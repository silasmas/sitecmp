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
                <a href="{{ route('event') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Events</a>
            </li>
        </ol>
    </nav><!-- /.breadcrumb -->

    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">  {{ !isset($dataEvent) ? "Ajouter un évènement": 'Modifier un évènement' }}</h1><!-- .btn-toolbar -->
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
                <h4 class="card-title"> {{ !isset($dataEvent) ? "Ajouter un évènement": 'Modifier un évènement' }} <span class="badge badge-warning">{{ !isset($dataEvent) ? "Enregistrement": 'Modification' }}</span>
                </h4>
                <h6 class="card-subtitle mb-4">{{ !isset($dataEvent) ? "Ce formulaire vous permet d'enregistrer un évènement":"Ce formulaire vous permet de modifier un évènement" }}</h6><!-- form -->
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
                <form method="POST" enctype="multipart/form-data" id="{{ isset($dataEvent)?"eventUpdate-form":'event-form'}}" action="{{ route( isset($dataEvent)?"UpdatEvent":'storEvent') }}" data-parsley-validate>
                    @csrf
                    <fieldset>
                        <legend>Formulaire</legend> <!-- .form-group -->
                        <div class="form-group row" hidden>
                            <div class="col-lg-6">
                                <label for="lbl1">ID<abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control id" id="id"
                                    placeholder="Entrer la designation"
                                    value="{{ isset($dataEvent) ? $dataEvent->id: '' }}"
                                    name="id">
                            </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Designation (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control designation_fr" id="designation_fr"
                                    placeholder="Entrer la designation" required=""
                                    value="{{ isset($dataEvent) ? $dataEvent->getTranslation('designation', 'fr') : '' }}"
                                    name="designation_fr">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Designation (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control designation_en" id="designation_en"
                                    placeholder="Entrer la designation" required=""
                                    value="{{ isset($dataEvent) ? $dataEvent->getTranslation('designation', 'en') : '' }}"
                                    name="designation_en">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Thème (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" name="theme_fr" class="form-control theme_fr" id="theme_fr"
                                    placeholder="Entrer le thème"
                                    value="{{ isset($dataEvent) ? $dataEvent->getTranslation('theme', 'fr') : '' }}"
                                    required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Thème (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" name="theme_en" class="form-control theme_en" id="theme_en"
                                    placeholder="Entrer le thème"
                                    value="{{ isset($dataEvent) ? $dataEvent->getTranslation('theme', 'en') : '' }}"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label for="lbl1">Orateur <abbr title="Required">*</abbr></label>
                                <input type="text" name="orateur" class="form-control orateur" id="orateur"
                                    placeholder="Entrer le nom de l'aurateur" required=""
                                    value="{{ isset($dataEvent) ? $dataEvent->orateur : '' }}">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="flatpickr07">Date debut</label>
                                <input id="flatpickr02" required="" type="text" name="date_debut"
                                    class="form-control date_debut" data-toggle="flatpickr" data-enable-time="true"
                                    data-date-format="Y-m-d H:i"
                                    value="{{ isset($dataEvent) ? $dataEvent->date_debut : '' }}">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="flatpickr07">Date fin</label>
                                <input id="flatpickr02" required="" type="text" name="date_fin"
                                    class="form-control date_fin" data-toggle="flatpickr" data-enable-time="true"
                                    data-date-format="Y-m-d H:i"
                                    value="{{ isset($dataEvent) ? $dataEvent->date_fin : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">References (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" name="references_fr" class="form-control references_fr"
                                    id="references_fr" placeholder="Entrer la reference" required=""
                                    value="{{ isset($dataEvent) ? $dataEvent->getTranslation('references', 'fr') : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">References (EN)<abbr title="Required">*</abbr></label>
                                <input type="text" name="references_en" class="form-control references_en"
                                    id="references_en" placeholder="Entrer la reference" required=""
                                    value="{{ isset($dataEvent) ? $dataEvent->getTranslation('references', 'en') : '' }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="sel1">Type</label>
                                <select name="type" class="custom-select type" id="type" required="">
                                    <option value="1" {{ isset($dataEvent)&& $dataEvent->type=="1"?"selected":""
                                        }}>Culte</option>
                                    <option value="2" {{ isset($dataEvent)&& $dataEvent->type=="2"?"selected":"" }}>
                                        Seminaire </option>
                                    <option value="3" {{ isset($dataEvent)&& $dataEvent->type=="3"?"selected":""
                                        }}>Concert </option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <label for="sel1">A la une<abbr title="Required">*</abbr></label>
                                <select class="custom-select est_a_la_une" name="est_a_la_une" id="est_a_la_une"
                                    required="">
                                    <option value="">Choisissez</option>
                                    <option value="1" {{ isset($dataEvent)&& $dataEvent->est_a_la_une==1?"selected":"" }}> OUI
                                    </option>
                                    <option value="0" {{ isset($dataEvent)&& $dataEvent->est_a_la_une==0?"selected":"" }}>NON
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="sel1">Est active<abbr title="Required">*</abbr></label>
                                <select class="custom-select active" name="active" id="active" required="">
                                    <option value="">Choisissez</option>
                                    <option value="1" {{ isset($dataEvent)&& $dataEvent->active==1?"selected":"" }}> OUI</option>
                                    <option value="0" {{ isset($dataEvent)&& $dataEvent->active==0?"selected":"" }}>NON</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-6">
                                <label class="mr-2">Image (FR){{ isset($dataEvent)?$dataEvent->getTranslation('image_url', 'fr'):"" }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image_fr" class="custom-file-input image_fr" id="image_fr"
                                        {{ isset($dataEvent)?"":"required" }}
                                        value="{{ isset($dataEvent)?$dataEvent->getTranslation('image_url', 'fr'):""}}">
                                    <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                                </div>
                        
                            </div>
                            <div class="col-lg-6">
                                <label class="mr-2">Image (EN)</label>
                                <div class="custom-file">
                                    <input type="file" name="image_en" class="custom-file-input image_en" id="image_en"
                                    {{ isset($dataEvent)?"":"required" }}
                                        value="{{ isset($dataEvent)?$dataEvent->getTranslation('image_url', 'en'):"" }}">
                                    <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" {{ isset($dataEvent)?"":"hidden" }}>
                            <div class="col-lg-6">
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                      <!-- .figure-img -->
                                      <div class="figure-img">
                                        <img class="img-fluid" src="{{ asset(isset($dataEvent)?'storage/'.$dataEvent->getTranslation('image_url', 'fr'):"") }}" alt="Card image cap" c> 
                                        <a href="{{ asset(isset($dataEvent)?'storage/'.$dataEvent->getTranslation('image_url', 'fr'):"") }}" class="img-link" data-size="600x450">
                                            <span class="tile tile-circle bg-danger"><span class="oi oi-eye"></span></span> 
                                            <span class="img-caption d-none">Image caption goes here</span></a>
                                        <div class="figure-action">
                                          <a href="#" class="btn btn-block btn-sm btn-primary">Voir </a>
                                        </div>
                                      </div><!-- /.figure-img -->
                                      <!-- .figure-caption -->
                                      <figcaption class="figure-caption">
                                        <ul class="list-inline text-muted mb-0">
                                          <li class="list-inline-item">
                                            <span class="oi oi-paperclip"></span> 0.62MB </li>
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
                                        <img class="img-fluid" src="{{ asset(isset($dataEvent)?'storage/'.$dataEvent->getTranslation('image_url', 'en'):"") }}" alt="Card image cap" width="600" height="20"> 
                                        <a href="{{ asset(isset($dataEvent)?'storage/'.$dataEvent->getTranslation('image_url', 'en'):"") }}" class="img-link" data-size="600x450">
                                            <span class="tile tile-circle bg-danger"><span class="oi oi-eye"></span></span> 
                                            <span class="img-caption d-none"></span></a>
                                        <div class="figure-action">
                                          <a href="#" class="btn btn-block btn-sm btn-primary">Voir </a>
                                        </div>
                                      </div><!-- /.figure-img -->
                                      <!-- .figure-caption -->
                                      <figcaption class="figure-caption">
                                        <ul class="list-inline text-muted mb-0">
                                          <li class="list-inline-item">
                                            <span class="oi oi-paperclip"></span> 0.62MB </li>
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
{{-- <script src="{{ asset('js/app') }}"></script> --}}
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/vendor/flatpickr/plugins/monthSelect/index.js') }}"></script>

{{-- <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
<script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.js') }}"></script>
<script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.js') }}"></script>
<script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.js') }}"></script>
<script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.js') }}"></script>
<script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/uploader-demo.js') }}"></script> --}}

<script src="{{ asset('assets/site/js/admin.form.js') }}"></script>

<script src="{{ asset('assets/site/js/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/site/js/parsley/i18n/fr.js') }}"></script>
<script src="{{ asset('assets/site/js/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/vendor/popper.js/umd/popper.min.js') }}"></script>

<script src="{{ asset('assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/photoswipe-demo.js') }}"></script>

@endsection