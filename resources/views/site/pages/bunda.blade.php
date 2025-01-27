@extends('site.layout.template',['titre' => "Bunda 21"])

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
@include("site.parties.banniere",["t1"=>"Bunda 21","t2"=>"Nous connaitre","img"=>"slide1.png"])
@include("site.parties.info")

<section class="meet-team white-bg page-section-ptb">
    <div class="container">
        <div class="container">
            <div class="row g-lg-5 align-items-center">
                <div class="col-lg-6 sm-mb-30">
                    <div class="owl-carousel bottom-center-dots owl-loaded owl-drag" data-nav-dots="ture"
                        data-smartspeed="1200" data-items="1" data-md-items="1" data-sm-items="1"
                        data-xs-items="1" data-xx-items="1">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1128px, 0px, 0px); transition: all 1.2s ease 0s; width: 3948px;">
                                <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                    <div class="item active">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/site/images/about/B21-2024-hd.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                    <div class="item">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/site/images/actus/B21-2024-Il-sera deborah.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 534px; margin-right: 30px;">
                                    <div class="item">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/site/images/actus/B21-2024-Il-sera dede.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 534px; margin-right: 30px;">
                                    <div class="item">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/site/images/actus/B21-2024-Il-sera louison.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 534px; margin-right: 30px;">
                                    <div class="item">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/site/images/actus/B21-2024-Il-sera marcello.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                    <div class="item">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/site/images/actus/B21-2024-Il-sera trésor.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                {{-- <div class="owl-item cloned" style="width: 534px; margin-right: 30px;">
                                    <div class="item">
                                        <img class="img-fluid" src="{{ asset('assets/site/images/act/.jpg') }}"
                                            alt="">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><i
                                    class="fa fa-angle-left fa-2x"></i></button><button type="button"
                                role="presentation" class="owl-next"><i
                                    class="fa fa-angle-right fa-2x"></i></button>
                        </div>
                        <div class="owl-dots"><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h6 class="text-intro mb-lg-3">Grande célébration Bunda 21</h6>
                        <h2 class="title-effect mb-lg-3">Temps de consécration à la recherche de la face de Dieu
                        </h2>
                        <p>
                            La grande célébration Bunda 21 est un programme de 21 jours de jeûne et prière
                            pendant lesquels
                            nous cherchons la face de Dieu pour nous-mêmes, pour nos ministères, nos mariages,
                            pour nos
                            business, nos Églises, notre pays.

                            Il y a bien de choses que Dieu nous a destinées, qui nous appartiennent, mais que
                            nous devons
                            palper, posséder.
                            Le prophète Elie, après avoir reçu une promesse de Dieu, a cherché Dieu à la
                            montagne ; il s’est
                            privé de la nourriture, a consenti des sacrifices,
                            bien que bénéficiaire de la promesse de Dieu, et ce jusqu’à ce que la pluie soit
                            tombée.

                            Nous n'attendons donc pas l’accomplissement des promesses de Dieu de manière
                            passive,
                            nous faisons notre part et cette dernière se trouve dans la prière.

                            <br><br>

                            {{-- Dieu cherche un homme qui se tienne à la brèche, ainsi IL nous appelle dans Sa
                            présence
                            --}}

                            Combats, possède et jouis de ton héritage.
                        </p>
                    </div>

                    <div class="mt-30">
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header align-items-start">
                                        <div class="modal-title" id="exampleModalLabel">
                                            <div class="section-title mb-10">
                                                <h6>EXPERTISE</h6>
                                                <h2>Modal title</h2>
                                                <p>We are an innovative agency. We develop and design customers
                                                    around the world. Our clients are some.</p>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="dropcap square">Y</span>ou can use model anywhere in your
                                        website consectetur adipisicing elit. At vel sed corporis delectus quo
                                        ea
                                        molestias a ab ad officiis eaque natus animi reiciendis sint beatae,
                                        dolor
                                        inventore praesentium lorem qui.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="meet-team gray-bg page-section-ptb">
            <div class="container">
                <ul class="nav  mb-5 nav-tabs nav-tab-page justify-content-center align-items-center" id="pills-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-arrivage-tab" data-bs-toggle="pill" data-bs-target="#plan"
                            type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Plan
                            alimentaire</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-fournisseur-tab" data-bs-toggle="pill" data-bs-target="#shop"
                            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Laissez-nous votre
                            témoignage Bunda 21</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="plan" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="row g-lg-5 position-relative time-line-table" style="z-index: 1">
                            <div class="col-12 text-center">
                                <h2 class="title-effect">Plan alimentaire</h2>
                                <br>
                                <a type="button" class="button icon mb-10 mr-10 mt-lg-5 mt-3" target="blank"
                                    href="{{ asset('assets/document/b21-plan-alimentaire-2024.pdf') }}">
                                    Télécharger le plan
                                </a>
                            </div>
                            <div class="line d-none d-lg-block"></div>
                            <section class="our-history white-bg page-section-ptb">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 mt-10">
                                            <div id="pdf-controls" style="text-align: center; margin-bottom: 20px;">
                                                <div id="nav-controls" hidden>
                                                    <button id="prev-page">Précédent</button>
                                                    <span id="page-info">Page <span id="current-page"></span> sur <span id="total-pages"></span></span>
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
                                        {{-- <input type="file" id="fileInput" accept="application/pdf">
                                        <div id="pdf-container"></div> <!-- Conteneur pour les pages multiples --> --}}
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="logement" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        @include('site.pages.bunda.logement')
                    </div>
                    <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="row mt-70">
                            <div class="col-sm-12">
                                <h4 class="mb-40">Remplissez ce formulaire</h4>
                                <form action="{{ route('temoignage') }}" method="post" id="newsletter">
                                    @csrf
                                    <div class="contact-form border-form clearfix">
                                        <div class="section-field">
                                            <input type="text" placeholder="Nom complet" class="form-control" name="fullname"
                                                required>
                                        </div>
                                        <div class="section-field">
                                            <input type="email" placeholder="Email (optionnel)" class="form-control"
                                                name="email">
                                        </div>
                                        <div class="section-field">
                                            <input type="text" placeholder="Téléphone" class="form-control" name="phone"
                                                required>
                                        </div>
                                        <div class="section-field textarea">
                                            <textarea class="input-message form-control" placeholder="Message" rows="7"
                                                name="message" required> </textarea>
                                        </div>
                                        <input type="hidden" name="action" value="sendEmail" />
                                        <button name="submit" type="submit" value="Send" class="button mt-30"><span> Send
                                                message
                                            </span> <i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        {{-- <ul class="nav  mb-5 nav-tabs nav-tab-page justify-content-center align-items-center" id="pills-tab"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#collegePastoral" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Pour la petite histoire</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-arrivage-tab" data-bs-toggle="pill" data-bs-target="#mediaBunda"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Play liste Bunda
                    21</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="collegePastoral" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">

            </div>
            <div class="tab-pane fade" id="mediaBunda" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    @include("site.pages.bunda.playliste")
                </div>
            </div>
        </div> --}}
    </div>
</section>


@endsection
@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

<script>
    const url = "{{ asset('assets/document/Plan_Alimentaire.pdf') }}";
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

    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file && file.type === 'application/pdf') {
            readPDF(file);
        } else {
            alert('Veuillez sélectionner un fichier PDF valide.');
        }
    });
</script>

@endsection
