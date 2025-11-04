<style>
    /* ----- Styles du viewer ----- */
    #pdf-viewer canvas {
        margin: 50px;
        /* Espace entre les pages */
        display: block;
        /* Empêche deux pages côte à côte */
        box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
        border-radius: 8px;
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
        color: #fff;
        cursor: pointer;
        transition: background-color .3s;
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- ====== Header du modal ====== -->
            <div class="modal-header align-items-start">
                <div class="modal-title" id="exampleModalLongTitle">
                    <div class="section-title mb-10">
                        <h6>{{ $actualites->soutTitre }}</h6>
                        <h3>{{ $actualites->titre }}</h3>
                        <p>{!! $actualites->description !!}</p>
                    </div>
                </div>
                <button type="button" class="close btn btn-lg p-0" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- ====== Body du modal ====== -->
            <div class="modal-body">
                <div class="row mt-0 justify-content-center">

                    @if ($actualites->img_url != "")
                        {{-- *** Cas IMAGE simple *** --}}
                        <div class="col-lg-12 col-md-12">
                            <div class="owl-carousel" data-nav-dots="true" data-autoheight="true" data-items="1"
                                data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="20">
                                <div class="item">
                                    <img class="img-fluid full-width" src="{{ asset('storage/' . $actualites->img_url) }}"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    @else
                        {{-- *** Cas PDF avec sélection de langue *** --}}
                        <div class="col-md-12 mt-10">
                            <div id="pdf-controls" style="text-align:center; margin-bottom:20px;">
                                <div class="row">
                                    <!-- Navigation pages -->
                                    <div class="col-lg-6 col-md-12 mb-10">
                                        <div id="nav-controls" hidden>
                                            <button id="prev-page">Précédent</button>
                                            <span id="page-info">
                                                Page <span id="current-page"></span> sur <span id="total-pages"></span>
                                            </span>
                                            <button id="next-page">Suivant</button>
                                        </div>
                                    </div>

                                    <!-- Sélecteur de langue -->
                                    <div class="col-lg-3 col-md-6 mb-10">
                                        <select id="pdf-lang" class="form-control">
                                            <option value="fr"
                                                data-url="{{ asset('assets/document/Alimentation-B21-2025.pdf') }}">Français
                                            </option>
                                            <option value="en"
                                                data-url="{{ asset('assets/document/Alimentation-B21-English.pdf') }}">
                                                Anglais</option>
                                            <option value="ln"
                                                data-url="{{ asset('assets/document/Alimentation-B21-Lingala.pdf') }}">
                                                Lingala</option>
                                            {{-- Ajouter d'autres langues ici --}}
                                        </select>
                                    </div>

                                    <!-- Zoom -->
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <button id="zoom-in">Zoom +</button>
                                        <button id="zoom-out">Zoom -</button>
                                    </div>

                                    <!-- Bouton Télécharger (synchronisé avec le select) -->
                                    <a id="download-btnPdf" class="button icon mb-10 mr-10 mt-lg-5 mt-3" target="_blank"
                                        href="{{ asset('assets/document/Alimentation-B21-2025.pdf') }}">
                                        Télécharger le plan alimentaire B21-2025
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Canvas PDF -->
                        <div class="col-lg-12 col-md-12" id="image-container">
                            <div id="pdf-viewer" style="display:flex; justify-content:center; overflow:hidden;">
                                <canvas id="pdf-canvas"
                                    style="border:1px solid #ddd; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,.1);">
                                </canvas>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            <!-- ====== Footer du modal ====== -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>

@section('script')
    {{-- Charger PDF.js UNE SEULE FOIS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

    <script>
        (function () {
            const modalEl = document.querySelector('.bd-example-modal-lg');

            // Initialise le viewer seulement à l'ouverture du modal
            function initPdfViewer() {
                const pdfCanvas = document.getElementById('pdf-canvas');
                const ctx = pdfCanvas ? pdfCanvas.getContext('2d') : null;
                const currentPageEl = document.getElementById('current-page');
                const totalPagesEl = document.getElementById('total-pages');
                const navControls = document.getElementById('nav-controls');
                const pdfViewer = document.getElementById('pdf-viewer');
                const dlBtn = document.getElementById('download-btnPdf');
                const langSelect = document.getElementById('pdf-lang');

                // Si on est dans le cas IMAGE, ces éléments n'existent pas → on sort proprement
                if (!pdfCanvas || !ctx || !navControls || !pdfViewer || !dlBtn || !langSelect) return;

                // État interne
                let pdfDoc = null;
                let currentPage = 1;
                let totalPages = 0;
                let scale = 1.2;
                let loadingTask = null;

                // Worker PDF.js (version alignée avec la librairie)
                pdfjsLib.GlobalWorkerOptions.workerSrc =
                    'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

                // Récupère l'URL du PDF pour la langue sélectionnée
                function selectedUrl() {
                    const opt = langSelect.options[langSelect.selectedIndex];
                    return opt && opt.dataset && opt.dataset.url ? encodeURI(opt.dataset.url) : '';
                }

                // Met à jour le href du bouton Télécharger pour suivre la langue
                function updateDownloadHref() {
                    const url = selectedUrl();
                    if (url) dlBtn.href = url;
                }

                // Annule un chargement en cours (si supporté)
                function cancelLoading() {
                    try { if (loadingTask && loadingTask.destroy) loadingTask.destroy(); } catch (e) { }
                    loadingTask = null;
                    pdfDoc = null;
                }

                // Nettoie le canvas
                function clearCanvas() {
                    ctx.clearRect(0, 0, pdfCanvas.width, pdfCanvas.height);
                }

                // Charge un PDF et affiche la première page
                function loadPdf(url) {
                    if (!url) {
                        pdfViewer.innerHTML =
                            '<p style="padding:12px;color:#b00020">Aucun PDF disponible pour cette langue.</p>';
                        return;
                    }
                    // --- Synchroniser le bouton Télécharger avec le PDF affiché ---
                    const opt = langSelect.options[langSelect.selectedIndex];
                    const forcedName = opt?.dataset?.name;                 // optionnel
                    dlBtn.href = url;                                      // même URL que le viewer
                    if (forcedName) {
                        dlBtn.setAttribute('download', forcedName);          // nom de fichier propre
                    } else {
                        // fallback: extraire le nom depuis l’URL
                        const fallback = url.split('/').pop().split('?')[0];
                        dlBtn.setAttribute('download', fallback);
                    }
                    // Reset UI
                    cancelLoading();
                    clearCanvas();
                    currentPage = 1;
                    totalPages = 0;
                    totalPagesEl.textContent = '';
                    navControls.hidden = true;

                    // Mettre le bouton Télécharger à jour
                    updateDownloadHref();

                    // Charger le document
                    loadingTask = pdfjsLib.getDocument(url);
                    loadingTask.promise.then(doc => {
                        pdfDoc = doc;
                        totalPages = pdfDoc.numPages;
                        totalPagesEl.textContent = totalPages;
                        navControls.hidden = false;
                        renderPage(currentPage);
                    }).catch(err => {
                        console.error('Erreur chargement PDF :', err);
                        pdfViewer.innerHTML =
                            '<p style="padding:12px;color:#b00020">Impossible de charger le PDF. Vérifie le chemin et l’accès public (storage:link).</p>';
                    });
                }

                // Rendu d'une page
                function renderPage(pageNum) {
                    if (!pdfDoc) return;
                    pdfDoc.getPage(pageNum).then(page => {
                        const viewport = page.getViewport({ scale: scale });
                        pdfCanvas.width = viewport.width;
                        pdfCanvas.height = viewport.height;
                        return page.render({ canvasContext: ctx, viewport }).promise;
                    }).then(() => {
                        currentPageEl.textContent = pageNum;
                    }).catch(e => console.error('Erreur rendu page :', e));
                }

                // Navigation
                document.getElementById('prev-page').onclick = function () {
                    if (currentPage > 1) { currentPage--; renderPage(currentPage); }
                };
                document.getElementById('next-page').onclick = function () {
                    if (currentPage < totalPages) { currentPage++; renderPage(currentPage); }
                };
                document.getElementById('zoom-in').onclick = function () {
                    scale = Math.min(scale + 0.15, 4); renderPage(currentPage);
                };
                document.getElementById('zoom-out').onclick = function () {
                    scale = Math.max(scale - 0.15, 0.3); renderPage(currentPage);
                };

                // Changement de langue → recharger le bon PDF (+ bouton)
                langSelect.addEventListener('change', function () {
                    loadPdf(selectedUrl());
                });

                // Démarrage : charger la 1ère option du select
                loadPdf(selectedUrl());
            }

            // Bootstrap 5 : lancer l'init quand le modal devient visible (une seule fois)
            if (modalEl) {
                modalEl.addEventListener('shown.bs.modal', initPdfViewer, { once: true });
            } else {
                // Fallback si le modal est déjà visible (rare)
                window.addEventListener('DOMContentLoaded', initPdfViewer);
            }
        })();
    </script>
@endsection
