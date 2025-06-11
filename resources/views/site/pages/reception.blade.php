@extends('site.layout.template', ['titre' => 'Reception pastorale'])

@section("content")
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

@include("site.parties.banniere",["t1"=>"Reception pastorale","t2"=>"Nos pasteurs sont là à votre disposition afin de vous servir avec amour,
                        confidentialité et fraternité","img"=>"slide1.png"])

@include("site.parties.info")
@include("site.parties.pdf")
@endsection
@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script>
    const url = "{{ asset("assets/document/doc.pdf") }}"; // Chemin vers votre PDF
    const pdfCanvas = document.getElementById('pdf-canvas');
    const ctx = pdfCanvas.getContext('2d');
    const pageInfo = document.getElementById('page-info');
    const currentPageEl = document.getElementById('current-page');
    const totalPagesEl = document.getElementById('total-pages');

    let pdfDoc = null;
    let currentPage = 1;
    let totalPages = 0;
    let scale = 1;
    // Configuration de PDF.js
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    const pdfViewer = document.getElementById('pdf-viewer');

    // Charger le PDF
    // pdfjsLib.getDocument(url).promise.then(pdf => {
    //     // Pour chaque page du PDF
    //     for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
    //         pdf.getPage(pageNum).then(page => {
    //             const canvas = document.createElement('canvas');
    //             const context = canvas.getContext('2d');
    //             const viewport = page.getViewport({ scale: 1.5 }); // Échelle d'affichage

    //             canvas.width = viewport.width;
    //             canvas.height = viewport.height;

    //             // Ajouter le canvas au conteneur
    //             pdfViewer.appendChild(canvas);

    //             // Rendre la page dans le canvas
    //             const renderContext = {
    //                 canvasContext: context,
    //                 viewport: viewport
    //             };
    //             page.render(renderContext);
    //         });
    //     }
    // }).catch(error => {
    //     console.error('Erreur lors du chargement du PDF :', error);
    //     pdfViewer.innerHTML = '<p>Impossible de charger le PDF.</p>';
    // });
    pdfjsLib.getDocument(url).promise.then(doc => {
        pdfDoc = doc;
        totalPages = pdfDoc.numPages;
        totalPagesEl.textContent = totalPages;
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

      // Gestion du zoom
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
</script>

@endsection
