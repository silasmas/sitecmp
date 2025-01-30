<style>
    #pdf-viewer canvas {
        margin: 50px;
        /* Espace entre les pages */
        display: block;
        /* Empêche les pages d'apparaître côte à côte */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Ajoute une ombre douce */
        border-radius: 8px;
        /* Coins arrondis */
    }

    #pdf-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    #pdf-controls button {
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        background-color: #650F1C;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #pdf-controls button:hover {
        background-color: #650F1C;
    }

    #pdf-viewer {
        width: 100%;
        height: auto;
        margin: 0 auto;
    }

    #pdf-canvas {
        max-width: 100%;
        height: auto;
    }
</style>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    {{-- <div class="modal-onload" data-bs-target="#myModal1"></div> --}}
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header align-items-start">
                <div class="modal-title" id="exampleModalLongTitle"><div class="section-title mb-10">
                    <h6>Sujets de prière</h6>
                    <h3>Pour l'amour de mon pays, je ne me tairai point !</h3>
                    <p>
                        Ésaïe 62:1
                        "Pour l'amour de Sion je ne me tairai point,
                        Pour l'amour de Jérusalem je ne prendrai point de repos,
                        Jusqu'à ce que son salut paraisse,
                        Comme l'aurore,
                        Et sa délivrance comme un flambeau qui s'allume."
                    </p>
                  </div>
                  </div>
                <button type="button" class="close btn btn-lg p-0 " data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mt-0 justify-content-center">

                    <div class="col-md-12 mt-10">
                        <div id="pdf-controls" style="text-align: center; margin-bottom: 20px;">
                            <div id="nav-controls" hidden>
                                <button id="prev-page">Précédent</button>
                                <span id="page-info">Page <span id="current-page"></span> sur <span
                                        id="total-pages"></span></span>
                                <button id="next-page">Suivant</button>

                            </div>
                            <button id="zoom-in">Zoom +</button>
                            <button id="zoom-out">Zoom -</button>


<button id="download-btn">Télécharger le PDF</button>
                        </div>
                    </div>
                    <div class="col-lg-12 xol-md-12">
                        <div id="pdf-viewer" style="display: flex; justify-content: center; overflow: hidden;">
                            <canvas id="pdf-canvas"
                                style="border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
    </div>
</div>
</div>

@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script>
    const url = "{{ asset('assets/document/SujetsPrières.pdf') }}";
    const pdfCanvas = document.getElementById('pdf-canvas');
    const ctx = pdfCanvas.getContext('2d');
    const pageInfo = document.getElementById('page-info');
    const currentPageEl = document.getElementById('current-page');
    const totalPagesEl = document.getElementById('total-pages');

    let pdfDoc = null;
    let currentPage = 1;
    let totalPages = 0;
    let scale = 1;
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    const pdfViewer = document.getElementById('pdf-viewer');

    pdfjsLib.getDocument(url).promise.then(doc => {
        pdfDoc = doc;
        totalPages = pdfDoc.numPages;
        totalPagesEl.textContent = totalPages;
        document.getElementById('nav-controls').hidden = false;
        renderPage(currentPage);
    }).catch(error => {
        console.error('Erreur lors du chargement du PDF :', error);
        pdfViewer.innerHTML = '<p>Impossible de charger le PDF.</p>';
    });

    function renderPage(pageNum) {
        pdfDoc.getPage(pageNum).then(page => {
            const viewport = page.getViewport({ scale });
            pdfCanvas.width = viewport.width;
            pdfCanvas.height = viewport.height;

            const renderContext = {
                canvasContext: ctx,
                viewport
            };

            page.render(renderContext).promise.then(() => {
                currentPageEl.textContent = pageNum;
            });
        });
    }

    document.getElementById('prev-page').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
        }
    });

    document.getElementById('next-page').addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderPage(currentPage);
        }
    });

    document.getElementById('zoom-in').addEventListener('click', () => {
        scale += 0.1;
        renderPage(currentPage);
    });

    document.getElementById('zoom-out').addEventListener('click', () => {
        if (scale > 0.5) {
            scale -= 0.1;
            renderPage(currentPage);
        }
    });

    // Fonction pour lire et afficher toutes les pages du PDF
    function readPDF(file) {
        const reader = new FileReader();

        reader.onload = function(event) {
            const typedarray = new Uint8Array(event.target.result);
            pdfjsLib.getDocument(typedarray).promise.then(pdf => {
                console.log('Nombre total de pages :', pdf.numPages);

                document.getElementById('pdf-container').innerHTML = '';

                for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                    pdf.getPage(pageNumber).then(page => {
                        const localScale = 1.5;
                        const viewport = page.getViewport({ scale: localScale });

                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;

                        document.getElementById('pdf-container').appendChild(canvas);

                        const renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        page.render(renderContext).promise.then(() => {
                            console.log(`Page ${pageNumber} rendue`);
                        });
                    });
                }
            }).catch(error => {
                console.error('Erreur lors du rendu du PDF :', error);
            });
        };

        reader.readAsArrayBuffer(file);
    }

</script>
@endsection
