<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header align-items-start">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    {{ $actualites->titre }}
                </h5>
                <p>
                    {{ $actualites->soutTitre }}
                </p>
                <button type="button" class="p-0 close btn btn-lg" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row justify-content-center">
                    @if ($actualites->img_url != "")
                    <div class="mb-3 col-12">
                        <img src="{{ asset('storage/'.$actualites->img_url) }}" class="img-fluid w-100"
                            alt="{{ $actualites->titre }}">
                    </div>
                    @endif

                    <div class="col-12">
                        <p>{!! $actualites->description !!}</p>
                    </div>
                    <a type="button" class="button icon mb-10 mr-10 mt-lg-5 mt-3" target="blank"
                        href="{{ asset('assets/document/Alimentation-B21-2025.pdf') }}">
                        Télécharger le plan alimentaire B21-2025
                    </a>
                    {{-- <div class="mt-3 text-center col-12">
                        <a href="https://www.jeunesse.eglisecmp.com/retreat/inscription_en_ligne/12/"
                            class="btn btn-primary" target="_blank">
                            S'inscrire à la retraite
                        </a>
                    </div> --}}
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
