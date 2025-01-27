<section class="our-history white-bg page-section-ptb">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-12 mt-10">
                <div id="pdf-controls" style="text-align: center; margin-bottom: 20px;">
                    <div hidden>
                        <button id="prev-page">Précédent</button>
                        <span id="page-info">Page <span id="current-page"></span> sur <span
                                id="total-pages"></span></span>
                        <button id="next-page">Suivant</button>
 
                    </div>
                    <button id="zoom-in">Zoom +</button>
                    <button id="zoom-out">Zoom -</button>
                </div>
            </div>
            <div class="col-md-12">
                <div id="pdf-viewer" style="display: flex; justify-content: center; overflow: hidden;">
                    <canvas id="pdf-canvas"
                        style="border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>