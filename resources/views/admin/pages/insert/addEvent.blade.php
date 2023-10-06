@extends('admin.layouts.template')

@section('autres_style')
<link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">
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
        <h1 class="page-title mr-sm-auto"> Ajouter un évènement</h1><!-- .btn-toolbar -->
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
                <h4 class="card-title"> Bootstrap Select <span class="badge badge-warning">New</span>
                </h4>
                <h6 class="card-subtitle mb-4"> Brings select elements with intuitive multiselection, searching, and
                    much more. </h6><!-- form -->
                <form>
                    <fieldset>
                        <legend>Labels</legend> <!-- .form-group -->
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Designation (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control" id="lbl1" placeholder="Entrer la designation"
                                    required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Designation (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control" id="lbl1" placeholder="Entrer la designation"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="lbl1">Thème (FR) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control" id="lbl1" placeholder="Entrer le thème"
                                    required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Thème (EN) <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control" id="lbl1" placeholder="Entrer le thème"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label for="sel1">Type</label> <select class="custom-select" id="sel1" required="">
                                    <option value="">Culte</option>
                                    <option value=""> Seminaire </option>
                                    <option value="">Concert </option>
                                  </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="lbl1">Orateur <abbr title="Required">*</abbr></label>
                                <input type="text" class="form-control" id="lbl1" placeholder="Entrer le nom de l'aurateur"
                                    required="">
                            </div>
                            <div class="col-lg-2">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <label for="lbl1">Est à la une <abbr title="Required">*</abbr></label>
                                    <span></span> <!-- .switcher-control -->
                                    <label class="switcher-control">
                                        <input type="" class="switcher-input" checked> 
                                        <span class="switcher-indicator"></span>
                                    </label> <!-- /.switcher-control -->
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="control-label" for="flatpickr07">Range Calendar</label> 
                                <input id="flatpickr07" type="text" class="form-control" data-toggle="flatpickr" data-mode="range" data-date-format="Y-m-d" data-default-dates='["2019-03-03", "2019-03-20"]'>
                            </div>
                            <div class="col-lg-6">
                                <label class="mr-2">Image</label>
                                <div class="btn btn-secondary fileinput-button">
                                  <i class="fa fa-plus fa-fw"></i> <span>Trouvé l'image...</span> <!-- The file input field used as target for the file upload widget -->
                                  <input id="fileupload-btn" type="file" name="files[]" multiple>
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

    <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-process.js') }}"></script>
    <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-image.js') }}"></script>
    <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-audio.js') }}"></script>
    <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-video.js') }}"></script>
    <script src="{{ asset('assets/vendor/blueimp-file-upload/js/jquery.fileupload-validate.js') }}"></script>
    <script src="{{ asset('assets/javascript/pages/uploader-demo.js') }}"></script>
@endsection