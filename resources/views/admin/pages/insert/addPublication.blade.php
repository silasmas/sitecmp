@extends('admin.layouts.template')

@section('autres_style')
<link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/js/parsley/parsley.css') }}">
<link href="{{ asset('assets/vendor/photoswipe/photoswipe.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/photoswipe/default-skin/default-skin.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/simplemde/simplemde.min.css') }}" rel="stylesheet">
@endsection
@section("content")

<!-- .page-title-bar -->
<header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{ route('posts') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Publications</a>
            </li>
        </ol>
    </nav><!-- /.breadcrumb -->

    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">  {{ !isset($dataPost) ? "Ajouter une publication": 'Modifier une publication' }}</h1><!-- .btn-toolbar -->
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
                <h4 class="card-title"> {{ !isset($dataPost) ? "Ajouter un publication": 'Modifier un publication' }} <span class="badge badge-warning">{{ !isset($dataPost) ? "Enregistrement": 'Modification' }}</span>
                </h4>
                <h6 class="card-subtitle mb-4">{{ !isset($dataPost) ? "Ce formulaire vous permet d'enregistrer un publication":"Ce formulaire vous permet de modifier un évènement" }}</h6><!-- form -->
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
                <form method="POST" enctype="multipart/form-data" id="{{ isset($dataPost)?"eventUpdate-form":'event-form'}}" action="{{ route( isset($dataPost)?"UpdatPost":'StorePost') }}" data-parsley-validate>
                    @csrf
                    <fieldset>
                        <legend>Formulaire</legend> <!-- .form-group -->
                        <div class="form-group row" hidden>
                            <div class="col-lg-6">
                                <label for="lbl1">ID<abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control id" id="id"
                                    placeholder="Entrer la designation"
                                    value="{{ isset($dataPost) ? $dataPost->id: '' }}"
                                    name="id">
                            </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Titre (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control title_fr" id="title_fr"
                                    placeholder="Entrer la title" required=""
                                    value="{{ isset($dataPost) ? $dataPost->getTranslation('title', 'fr') : '' }}"
                                    name="title_fr">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Titre (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control title_en" id="title_en"
                                    placeholder="Entrer la titre en anglais" required=""
                                    value="{{ isset($dataPost) ? $dataPost->getTranslation('title', 'en') : '' }}"
                                    name="title_en">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Auteur<abbr title="Required">*</abbr></label>
                                <input type="text" name="author" class="form-control author" id="author"
                                    placeholder="Entrer l'auteur"
                                    value="{{ isset($dataPost) ? $dataPost->author: '' }}"
                                    required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="sel1">Type</label>
                                <select name="type" class="custom-select type" id="type" required="">
                                    <option value="1" {{ isset($dataPost)&& $dataPost->type=="1"?"selected":""
                                        }}>Vidéo</option>
                                    <option value="2" {{ isset($dataPost)&& $dataPost->type=="2"?"selected":"" }}>
                                        Audio </option>
                                    <option value="3" {{ isset($dataPost)&& $dataPost->type=="3"?"selected":""
                                        }}>Article </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-6">
                                <label class="mr-2">Image (FR){{ isset($dataPost)?$dataPost->getTranslation('image_url', 'fr'):"" }}</label>
                                <div class="custom-file">
                                    <input type="file" name="image_fr" class="custom-file-input image_fr" id="image_fr"
                                        {{ isset($dataPost)?"":"required" }}
                                        value="{{ isset($dataPost)?$dataPost->getTranslation('image_url', 'fr'):""}}">
                                    <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <label class="mr-2">Image (EN)</label>
                                <div class="custom-file">
                                    <input type="file" name="image_en" class="custom-file-input image_en" id="image_en"
                                    {{ isset($dataPost)?"":"required" }}
                                        value="{{ isset($dataPost)?$dataPost->getTranslation('image_url', 'en'):"" }}">
                                    <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Observation <abbr title="Required">*</abbr></label>
                                <input type="text" name="observation" class="form-control observation" id="observation"
                                    placeholder="Entrer les observations" required=""
                                    value="{{ isset($dataPost) ? $dataPost->observation : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="flatpickr07">Date publication</label>
                                <input id="flatpickr02" required="" type="text" name="date_debut"
                                    class="form-control date_debut" data-toggle="flatpickr" data-enable-time="true"
                                    data-date-format="Y-m-d H:i"
                                    value="{{ isset($dataPost) ? $dataPost->date_debut : '' }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="sel1">Evénément</label>
                                <select name="type" class="custom-select type" id="type" required="">
                                    <option value="">Choisissez</option>
                                    @forelse ($events as $ev)
                                    <option value="1" {{ isset($dataPost)&& $dataPost->getTranslation('theme', 'fr')==$ev->getTranslation('theme', 'fr')?"selected":""}}>{{$ev->getTranslation('theme', 'fr')}}</option>
                                        
                                    @empty
                                        
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="sel1">Orateur</label>
                                <select name="type" class="custom-select type" id="type" required="">
                                    <option value="">Choisissez</option>
                                    @forelse ($pasteurs as $ev)
                                    <option value="1" {{ isset($dataPost)&& $dataPost->fullname==$ev->fullname?"selected":""}}>{{$ev->fullname}}</option>
                                        
                                    @empty
                                        
                                    @endforelse
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="sel1">Est active<abbr title="Required">*</abbr></label>
                                <select class="custom-select is_active" name="is_active" id="is_active"
                                    required="">
                                    <option value="">Choisissez</option>
                                    <option value="1" {{ isset($dataPost)&& $dataPost->is_active==1?"selected":"" }}> OUI
                                    </option>
                                    <option value="0" {{ isset($dataPost)&& $dataPost->is_active==0?"selected":"" }}>NON
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">References (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" name="references_fr" class="form-control references_fr"
                                    id="references_fr" placeholder="Entrer la reference" required=""
                                    value="{{ isset($dataPost) ? $dataPost->getTranslation('references', 'fr') : '' }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">References (EN)<abbr title="Required">*</abbr></label>
                                <input type="text" name="references_en" class="form-control references_en"
                                    id="references_en" placeholder="Entrer la reference" required=""
                                    value="{{ isset($dataPost) ? $dataPost->getTranslation('references', 'en') : '' }}">
                            </div>
           
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Descrition (FR)</label>
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <textarea data-toggle="simplemde" name="descriptiom_fr" data-spellchecker="false"
                                        data-autosave='{ "enabled": true, "unique_id": "SimpleMDEDemo" }'>
                                        {{ isset($dataMinister)?$dataMinister->descriptiom_fr:""}}
                                    </textarea>
                                </div><!-- /.card -->
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Descrition (EN) </label>
                                <!-- .card -->
                                <div class="card card-fluid">
                                    <textarea data-toggle="simplemde" name="description_en" data-spellchecker="false"
                                        data-autosave='{ "enabled": true, "unique_id": "SimpleMDEDemo" }'>
                                        {{ isset($dataMinister)?$dataMinister->description_en:""}}
                                    </textarea>
                                   

                                </div><!-- /.card -->
                            </div>
                        </div>
                        <div class="form-group row" {{ isset($dataPost)?"":"hidden" }}>
                            <div class="col-lg-6">
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                      <!-- .figure-img -->
                                      <div class="figure-img">
                                        <img class="img-fluid" src="{{ asset(isset($dataPost)?'storage/'.$dataPost->getTranslation('image_url', 'fr'):"") }}" alt="Card image cap" c>
                                        <a href="{{ asset(isset($dataPost)?'storage/'.$dataPost->getTranslation('image_url', 'fr'):"") }}" class="img-link" data-size="600x450">
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
                                        <img class="img-fluid" src="{{ asset(isset($dataPost)?'storage/'.$dataPost->getTranslation('image_url', 'en'):"") }}" alt="Card image cap" width="600" height="20">
                                        <a href="{{ asset(isset($dataPost)?'storage/'.$dataPost->getTranslation('image_url', 'en'):"") }}" class="img-link" data-size="600x450">
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
                                        isset($dataPost)?"Modifier":"Enregistrer" }}</button>
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
<script src="{{ asset('assets/vendor/simplemde/simplemde.min.js') }}"></script>
@endsection
