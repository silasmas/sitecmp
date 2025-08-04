@extends('site.layout.template', ['titre' => 'Mois évangélique'])

@section("content")
<style>
    #pdf-viewer canvas {
        margin: 50px auto;
        display: block;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    #pdf-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
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
        background-color: #4e0b16;
    }

    #pdf-viewer {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    #pdf-canvas {
        max-width: 90%;
        height: auto;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    #pdf-canvas {
    width: 50%;
    max-width: 1200px;
    height: auto;
}

</style>

@include("site.parties.banniere",[
    "t1"=>"Mois évangélique",
    "t2"=>"Un rendez-vous divin pour une génération en feu",
    "img"=>"slide1.png"
])

<section class="our-history white-bg page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-10">
                <div id="pdf-controls">
                    <button id="prev-page">Précédent</button>
                    <span id="page-info">Page <span id="current-page"></span> sur <span id="total-pages"></span></span>
                    <button id="next-page">Suivant</button>
                    <button id="zoom-in">Zoom +</button>
                    <button id="zoom-out">Zoom -</button>
                    <button id="download-btnPdf">Télécharger <i class="fa-solid fa-file-pdf"></i></button>
                </div>
                <div id="pdf-viewer">
                    <canvas id="pdf-canvas"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
<script>
    const url = "{{ asset('assets/document/ev.pdf') }}"; // PDF statique
    const pdfCanvas = document.getElementById('pdf-canvas');
    const ctx = pdfCanvas.getContext('2d');

    const currentPageEl = document.getElementById('current-page');
    const totalPagesEl = document.getElementById('total-pages');
    const pageInfo = document.getElementById('page-info');
    const pdfViewer = document.getElementById('pdf-viewer');

    let pdfDoc = null;
    let currentPage = 1;
    let totalPages = 0;
    let scale = 1.5;

    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    pdfjsLib.getDocument(url).promise.then(doc => {
        pdfDoc = doc;
        totalPages = doc.numPages;
        totalPagesEl.textContent = totalPages;
        renderPage(currentPage);
    }).catch(error => {
        console.error('Erreur lors du chargement du PDF :', error);
        pdfViewer.innerHTML = '<p>Impossible de charger le PDF.</p>';
    });

    function renderPage(pageNum) {
        pdfDoc.getPage(pageNum).then(page => {
            const viewport = page.getViewport({ scale: scale });
            pdfCanvas.width = viewport.width;
            pdfCanvas.height = viewport.height;

            const renderContext = {
                canvasContext: ctx,
                viewport: viewport
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

    document.getElementById('download-btnPdf').addEventListener('click', () => {
        window.open(url, '_blank');
    });
</script>
@endsection
