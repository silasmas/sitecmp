@extends('site.layout.template', ['titre' => 'Media'])

@section("content")
<style>
    #pdf-viewer canvas {
    margin-bottom: 10px; /* Espace entre les pages */
    display: block; /* Empêche les pages d'apparaître côte à côte */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ajoute une ombre douce */
    border-radius: 8px; /* Coins arrondis */
}
</style>

<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6"
    data-img-src="{{ asset('assets/site/images/bg/B21-2024-fbc.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Reception pastorale</h1>
                    <p>Nos pasteurs sont là à votre disposition afin de vous servir avec amour,
                        confidentialité et fraternité</p>
                </div>

                </ul>
            </div>
        </div>
    </div>
</section>
@include("site.parties.info")

<div class="row">
    <div class="col-md-12">
        <div id="pdf-viewer" style="width: 100%; height: 900px; overflow: auto; border: 1px solid #ddd;"></div>


    </div>
</div>
@endsection
@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script>
    const url = "{{ asset("assets/document/horaire.pdf") }}"; // Chemin vers votre PDF

    // Configuration de PDF.js
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    const pdfViewer = document.getElementById('pdf-viewer');

    // Charger le PDF
    pdfjsLib.getDocument(url).promise.then(pdf => {
        // Pour chaque page du PDF
        for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
            pdf.getPage(pageNum).then(page => {
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                const viewport = page.getViewport({ scale: 1.5 }); // Échelle d'affichage

                canvas.width = viewport.width;
                canvas.height = viewport.height;

                // Ajouter le canvas au conteneur
                pdfViewer.appendChild(canvas);

                // Rendre la page dans le canvas
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        }
    }).catch(error => {
        console.error('Erreur lors du chargement du PDF :', error);
        pdfViewer.innerHTML = '<p>Impossible de charger le PDF.</p>';
    });
</script>

@endsection
