@extends('admin.layouts.template')

@section('autres_style')
<link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/js/parsley/parsley.css') }}">
<link href="{{ asset('assets/vendor/photoswipe/photoswipe.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/photoswipe/default-skin/default-skin.css') }}" rel="stylesheet">

@endsection
@section("content")

<!-- .page-title-bar -->
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{ route('video_all') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Videos</a>
            </li>
        </ol>
    </nav><!-- /.breadcrumb -->

    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto"> {{ !isset($dataEvent) ? "Ajouter une video": 'Modifier un video' }}
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
                <h4 class="card-title"> {{ !isset($dataEvent) ? "Ajouter une video": 'Modifier une video' }} <span
                        class="badge badge-warning">{{ !isset($dataEvent) ? "Enregistrement": 'Modification' }}</span>
                </h4>
                <h6 class="card-subtitle mb-4">{{ !isset($dataEvent) ? "Ce formulaire vous permet d'enregistrer une video":"Ce formulaire vous permet de modifier une video" }}</h6><!-- form -->
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
                <form method="POST" enctype="multipart/form-data" id="{{ isset($dataVideo)?"
                    eventUpdate-form":'event-form'}}" action="{{ route( isset($dataVideo)?" UpdatVideo":'storVideo') }}"
                    data-parsley-validate>
                    @csrf
                    <fieldset>
                        <legend>Formulaire</legend> <!-- .form-group -->
                        <div class="form-group row" hidden>
                            <div class="col-lg-6">
                                <label for="lbl1">ID<abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control id" id="id" placeholder="Entrer la designation"
                                    value="{{ isset($dataVideo) ? $dataVideo->id: '' }}" name="id">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Titre (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control titre_fr" id="titre_fr"
                                    placeholder="Entrer la titre" required=""
                                    value="{{ isset($dataVideo) ? $dataVideo->getTranslation('titre', 'fr') : '' }}"
                                    name="titre_fr">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Titre (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control titre_en" id="titre_en"
                                    placeholder="Entrer la titre" required=""
                                    value="{{ isset($dataVideo) ? $dataVideo->getTranslation('titre', 'en') : '' }}"
                                    name="titre_en">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Description (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" name="description_fr" class="form-control description_fr"
                                    id="description_fr" placeholder="Entrer le description"
                                    value="{{ isset($dataVideo) ? $dataVideo->getTranslation('description', 'fr') : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Description (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" name="description_en" class="form-control description_en"
                                    id="description_en" placeholder="Entrer le description"
                                    value="{{ isset($dataVideo) ? $dataVideo->getTranslation('description', 'en') : '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Lien de la Video <abbr title="Required">*</abbr></label>
                                <input type="text" name="video" class="form-control video" id="video"
                                    placeholder="Entrer le lien de la video" required=""
                                    value="{{ isset($dataVideo) ? $dataVideo->video : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="flatpickr07">Date </label>
                                <input id="flatpickr02" required="" type="text" name="dateRealiser"
                                    class="form-control dateRealiser" data-toggle="flatpickr" data-enable-time="true"
                                    data-date-format="Y-m-d H:i"
                                    value="{{ isset($dataVideo) ? $dataVideo->dateRealiser : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="sel1">Jour<abbr title="Required">*</abbr></label>
                                <select class="custom-select active" name="jour" id="active" required="">
                                    <option value="">Choisissez</option>
                                    <option value="bunda" {{ isset($dataVideo)&& $dataVideo->active==1?"selected":"" }}>
                                        Bunda</option>
                                    <option value="dimanche" {{ isset($dataVideo)&& $dataVideo->active==0?"selected":""
                                        }}>Dimanche</option>
                                    <option value="mercredi" {{ isset($dataVideo)&& $dataVideo->active==0?"selected":""
                                        }}>Mercredi</option>
                                    <option value="jeudi" {{ isset($dataVideo)&& $dataVideo->active==0?"selected":""
                                        }}>Jeudi</option>
                                    <option value="campagne" {{ isset($dataVideo)&& $dataVideo->active==0?"selected":""
                                        }}>Campagne</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="sel1">Est active<abbr title="Required">*</abbr></label>
                                <select class="custom-select active" name="active" id="active" required="">
                                    <option value="">Choisissez</option>
                                    <option value="1" {{ isset($dataVideo)&& $dataVideo->active==1?"selected":"" }}> OUI
                                    </option>
                                    <option value="0" {{ isset($dataVideo)&& $dataVideo->active==0?"selected":"" }}>NON
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label class="mr-2">Image (FR){{
                                    isset($dataVideo)?$dataVideo->getTranslation('image_url', 'fr'):""
                                    }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image_fr" class="custom-file-input image_fr" id="image_fr"
                                        {{ isset($dataVideo)?"":"required" }}
                                        value="{{ isset($dataVideo)?$dataVideo->getTranslation('image_url', 'fr'):""}}">
                                    <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" {{ isset($dataVideo)?"":"hidden" }}>
                            <div class="col-lg-6">
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid"
                                                src="{{ asset(isset($dataVideo)?'storage/'.$dataVideo->getTranslation('image_url', 'fr'):"") }}"
                                                alt="Card image cap" c>
                                            <a href="{{ asset(isset($dataVideo)?'storage/'.$dataVideo->getTranslation('image_url', 'fr'):"") }}"
                                                class="img-link" data-size="600x450">
                                                <span class="tile tile-circle bg-danger"><span
                                                        class="oi oi-eye"></span></span>
                                                <span class="img-caption d-none">Image caption goes here</span></a>
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
                            <div class="col-lg-6">
                                <div class="card card-figure align-middle text-right">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid"
                                                src="{{ asset(isset($dataVideo)?'storage/'.$dataEvent->getTranslation('image_url', 'en'):"") }}"
                                                alt="Card image cap" width="600" height="20">
                                            <a href="{{ asset(isset($dataEvent)?'storage/'.$dataEvent->getTranslation('image_url', 'en'):"") }}"
                                                class="img-link" data-size="600x450">
                                                <span class="tile tile-circle bg-danger"><span
                                                        class="oi oi-eye"></span></span>
                                                <span class="img-caption d-none"></span></a>
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
                                        isset($dataEvent)?"Modifier":"Enregistrer" }}</button>
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

@endsection
