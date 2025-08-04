<!-- BOUTON D'OUVERTURE DE LA MODALE -->

<!-- MODALE PDF -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lecture PDF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <div id="pdf-controls" class="mb-3 text-center">
                    <button id="modal-prev">Précédent</button>
                    <span id="modal-page-info">Page <span id="modal-current-page"></span> sur <span id="modal-total-pages"></span></span>
                    <button id="modal-next">Suivant</button>
                    <button id="modal-zoom-in">Zoom +</button>
                    <button id="modal-zoom-out">Zoom -</button>
                    <button id="modal-download">Télécharger</button>
                </div>
                <div class="d-flex justify-content-center">
                    <canvas id="modal-pdf-canvas" style="border: 1px solid #ddd; border-radius: 8px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
<script>
    let modalPdfDoc = null, modalCurrentPage = 1, modalTotalPages = 0, modalScale = 1;
    const modalCanvas = document.getElementById('modal-pdf-canvas');
    const modalCtx = modalCanvas.getContext('2d');

    const renderModalPage = (pageNum) => {
        modalPdfDoc.getPage(pageNum).then(page => {
            const viewport = page.getViewport({ scale: modalScale });
            modalCanvas.width = viewport.width;
            modalCanvas.height = viewport.height;
            page.render({ canvasContext: modalCtx, viewport }).promise.then(() => {
                document.getElementById('modal-current-page').textContent = pageNum;
            });
        });
    };

    const loadModalPDF = (url) => {
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';
        pdfjsLib.getDocument(url).promise.then(pdf => {
            modalPdfDoc = pdf;
            modalTotalPages = pdf.numPages;
            document.getElementById('modal-total-pages').textContent = modalTotalPages;
            modalCurrentPage = 1;
            renderModalPage(modalCurrentPage);
        });
    };

    // Navigation
    document.getElementById('modal-prev').onclick = () => {
        if (modalCurrentPage > 1) {
            modalCurrentPage--;
            renderModalPage(modalCurrentPage);
        }
    };
    document.getElementById('modal-next').onclick = () => {
        if (modalCurrentPage < modalTotalPages) {
            modalCurrentPage++;
            renderModalPage(modalCurrentPage);
        }
    };
    document.getElementById('modal-zoom-in').onclick = () => {
        modalScale += 0.1;
        renderModalPage(modalCurrentPage);
    };
    document.getElementById('modal-zoom-out').onclick = () => {
        if (modalScale > 0.5) {
            modalScale -= 0.1;
            renderModalPage(modalCurrentPage);
        }
    };
    document.getElementById('modal-download').onclick = () => {
        if (modalPdfDoc) {
            window.open(modalPdfDoc._pdfInfo.url, '_blank');
        }
    };

    // Changer de PDF selon le bouton cliqué
    document.querySelectorAll('[data-bs-target="#pdfModal"]').forEach(button => {
        button.addEventListener('click', () => {
            const url = button.getAttribute('data-pdf-url');
            loadModalPDF(url);
        });
    });
</script>

@endsection