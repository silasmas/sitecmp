@extends('admin.layouts.template')

@section('autres_style')
<link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/js/parsley/parsley.css') }}">
<link href="{{ asset('assets/vendor/photoswipe/photoswipe.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/photoswipe/default-skin/default-skin.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/simplemde/simplemde.min.css') }}" rel="stylesheet">

@endsection
@section("content")

<!-- .page-title-bar -->
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{ route('ministres') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Ministres</a>
            </li>
        </ol>
    </nav><!-- /.breadcrumb -->

    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> {{ !isset($dataMinister) ? "Ajouter un ministre": 'Modifier un ministre' }}
        </h1><!-- .btn-toolbar -->
        <div id="dt-buttons" class="btn-toolbar"></div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
</header><!-- /.page-title-bar -->

<div class="page-section">
    <!-- .card-deck-xl -->
    <div class="card-deck-xl">
        <!-- .card -->
        <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">
                <h4 class="card-title"> {{ !isset($dataMinister) ? "Ajouter un Ministre": 'Modifier un Ministre' }}
                    <span class="badge badge-warning">{{ !isset($dataMinister) ? "Enregistrement": 'Modification'}}</span>
                </h4>
                <h6 class="card-subtitle mb-4">{{ !isset($dataMinister) ? "Ce formulaire vous permet d'enregistrer un
                    Ministre":"Ce formulaire vous permet de modifier un Ministre" }}</h6><!-- form -->
                <div class="form-group row">
                    @if (session()->has('message'))
                    <div class="col-md-6 col-md-offset-3">
                        <div class="alert alert-{{session()->get('type')}} alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            {{ session()->get('message') }}
                        </div>
                    </div>
                </div>
                @endif
                <form method="POST" enctype="multipart/form-data" id="{{isset($dataMinister)?"eventUpdate-form":'event-form'}}" 
                action="{{ route( isset($dataMinister)?"UpdatMinistres":'storeMinistre') }}"
                     data-parsley-validate>
                    @csrf
                    <fieldset>
                        <legend>Formulaire</legend> <!-- .form-group -->
                        <div class="form-group row" hidden>
                            <div class="col-lg-6">
                                <label for="lbl1">ID<abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control id" id="id" placeholder="Entrer la designation"
                                    value="{{ isset($dataMinister) ? $dataMinister->id: '' }}" name="id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Nom complet <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control fullname" id="fullname"
                                    placeholder="Entrer le nom au complet" required=""
                                    value="{{ isset($dataMinister) ? $dataMinister->fullname : '' }}" name="fullname">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Contact <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control contact" id="contact"
                                    placeholder="Entrer la designation" required=""
                                    value="{{ isset($dataMinister) ? $dataMinister->contact : '' }}" name="contact">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Facebook </label>
                                <input type="text" name="facebook_url" class="form-control facebook_url"
                                    id="facebook_url" placeholder="Entrer l'url de la page'"
                                    value="{{ isset($dataMinister) ? $dataMinister->facebook_url : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Instagram </label>
                                <input type="text" name="instagram_url" class="form-control instagram_url"
                                    id="instagram_url" placeholder="Entrer l'url de la page'"
                                    value="{{ isset($dataMinister) ? $dataMinister->instagram_url : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Twitter </label>
                                <input type="text" name="twitter_url" class="form-control twitter_url" id="twitter_url"
                                    placeholder="Entrer l'url de la page'"
                                    value="{{ isset($dataMinister) ? $dataMinister->twitter_url : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Youtube </label>
                                <input type="text" name="youtube_url" class="form-control youtube_url" id="youtube_url"
                                    placeholder="Entrer l'url de la page'"
                                    value="{{ isset($dataMinister) ? $dataMinister->youtube_url : '' }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-lg-4">
                                <label for="sel1">Type</label>
                                <select name="type" class="custom-select type" id="type" required="">
                                    <option value="Pasteur" {{ isset($dataMinister)&& $dataMinister->type=="Pasteur"?"selected":""}}>Pasteur</option>
                                    <option value="Prophète" {{ isset($dataMinister)&& $dataMinister->type=="Prophète"?"selected":"" }}>Prophète </option>
                                    <option value="Berger" {{ isset($dataMinister)&& $dataMinister->type=="Berger"?"selected":""}}>Berger </option>
                                    <option value="Pasteur stagiaire" {{ isset($dataMinister)&& $dataMinister->type=="Pasteur stagiaire"?"selected":"" }}>Pasteur stagiaire </option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <label for="sel1">Est titulaire<abbr title="Required">*</abbr></label>
                                <select class="custom-select est_a_la_une" name="is_titular" id="is_titular"
                                    required="">
                                    <option value="">Choisissez</option>
                                    <option value="1" {{ isset($dataMinister)&& $dataMinister->
                                        is_titular==1?"selected":"" }}> OUI
                                    </option>
                                    <option value="0" {{ isset($dataMinister)&& $dataMinister->
                                        is_titular==0?"selected":"" }}>NON
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="sel1">Est active<abbr title="Required">*</abbr></label>
                                <select class="custom-select is_active" name="is_active" id="is_active" required="">
                                    <option value="">Choisissez</option>
                                    <option value="1" {{ isset($dataMinister)&& $dataMinister->
                                        is_active==1?"selected":""}}> OUI</option>
                                    <option value="0" {{ isset($dataMinister)&& $dataMinister->is_active==0?"selected":""}}>NON</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label for="lbl1">Biographie </label>
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <textarea data-toggle="simplemde" name="bio" data-spellchecker="false"
                                        data-autosave='{ "enabled": true, "unique_id": "SimpleMDEDemo" }'>
                                        {{ isset($dataMinister)?$dataMinister->bio:""}}
                                    </textarea>
                                   

                                </div><!-- /.card -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label class="mr-2">Image profil</label>
                                <div class="custom-file">
                                    <input type="file" name="image_url" class="custom-file-input image_url"
                                        id="image_url" {{ isset($dataMinister)?"":"required" }}
                                        value="{{isset($dataMinister)?$dataMinister->image_url:""}}">
                                    <label class="custom-file-label" for="fileupload-customInput">Choose
                                        files</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row" {{ isset($dataMinister)?"":"hidden" }}>
                            <div class="col-lg-6">
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid"
                                                src="{{ asset(isset($dataMinister)?'storage/'.$dataMinister->image_url:"") }}"
                                                alt="Card image cap" width="200">
                                            <a href="{{ asset(isset($dataMinister)?'storage/'.$dataMinister->image_url:"") }}"
                                                class="img-link" data-size="600x450">
                                                <span class="tile tile-circle bg-danger"><span
                                                        class="oi oi-eye"></span></span>
                                                <span class="img-caption d-none">Image caption goes
                                                    here</span></a>
                                            <div class="figure-action">
                                                <a href="#" class="btn btn-block btn-sm btn-primary">Voir </a>
                                            </div>
                                        </div><!-- /.figure-img -->
                                        <!-- .figure-caption -->
                                        <figcaption class="figure-caption">
                                            <ul class="list-inline text-muted mb-0">
                                                <li class="list-inline-item">
                                                    <span class="oi oi-paperclip"></span> 0.62MB
                                                </li>
                                                <li class="list-inline-item float-right">
                                                    <span class="oi oi-calendar"></span>
                                                </li>
                                            </ul>
                                        </figcaption><!-- /.figure-caption -->
                                    </figure><!-- /.card-figure -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="card-body border-top">
                                    <button type="submit" id="btform" class="btn btn-primary btn-lg btn-block">{{
                                        isset($dataMinister)?"Modifier":"Enregistrer" }}</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('autres-script')
{{-- <script src="{{ asset('js/app') }}"></script> --}}
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/vendor/flatpickr/plugins/monthSelect/index.js') }}"></script>

<script src="{{ asset('assets/site/js/admin.form.js') }}"></script>

<script src="{{ asset('assets/site/js/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/site/js/parsley/i18n/fr.js') }}"></script>
<script src="{{ asset('assets/site/js/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/vendor/popper.js/umd/popper.min.js') }}"></script>

<script src="{{ asset('assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/photoswipe-demo.js') }}"></script>

<script src="{{ asset('assets/vendor/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/summernote-demo.js') }}"></script>
<script src="{{ asset('assets/vendor/simplemde/simplemde.min.js') }}"></script>

@endsection