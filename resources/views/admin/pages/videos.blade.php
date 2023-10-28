@extends('admin.layouts.template')

@section('autres_style')
<link href="{{ asset('assets/stylesheets/dataTables/datatables.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/photoswipe/photoswipe.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/photoswipe/assets/vendor/photoswipe/default-skin/default-skin.css') }}"
    rel="stylesheet">
@endsection
@section("content")
<div class="container-fluid">
    <div class="row page-section-ptb">
        <div class="col-lg-12 col-md-12">
            <div class="tab nav-bt nav-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="home-02-tab" data-bs-toggle="tab" href="#home-02" role="tab"
                            aria-controls="home-02" aria-selected="true">
                            <h4 class="mb-0">Vidéos</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-02-tab" data-bs-toggle="tab" href="#profile-02" role="tab"
                            aria-controls="profile-02" aria-selected="false">
                            <h4 class="mb-0">Photos</h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content px-5" id="myTabContent">
                    <div class="tab-pane fade active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
                        <!-- .page-title-bar -->
                        <header class="page-title-bar">
                            <!-- floating action -->
                            <a href="{{ route('addEvent') }}">
                                <button type="button" class="btn btn-success btn-floated">
                                    <span class="fa fa-plus"></span>
                                </button> <!-- /floating action -->
                            </a>
                            <!-- title and toolbar -->
                            <div class="d-md-flex align-items-md-start">
                                <h1 class="page-title mr-sm-auto"> Liste des évènements</h1><!-- .btn-toolbar -->
                                <div id="dt-buttons" class="btn-toolbar"></div><!-- /.btn-toolbar -->
                            </div><!-- /title and toolbar -->
                        </header><!-- /.page-title-bar -->
                        <!-- .page-section -->
                        <div class="page-section">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <!-- .card-header -->
                                <div class="card-header">
                                    <!-- .nav-tabs -->
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab" href="#tab1">All</a>
                                        </li>
                                    </ul><!-- /.nav-tabs -->
                                </div><!-- /.card-header -->
                                <!-- .card-body -->
                                <div class="card-body">

                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Theme</th>
                                                <th>Orateur</th>
                                                <th>A la une</th>
                                                <th>Debut</th>
                                                <th>Fin</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @forelse ($videos as $i)
                                            <tr class="gradeX">
                                                <td>
                                                    <div class="card card-figure">
                                                        <!-- .card-figure -->
                                                        <figure class="figure">
                                                            <!-- .figure-img -->
                                                            <div class="figure-img">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('storage/'.$i->image_url) }}"
                                                                    width="100" alt="Card image cap">
                                                                <a href="{{ asset('storage/'.$i->image_url) }}"
                                                                    class="img-link" data-size="100x100">
                                                                    <span class="tile tile-circle bg-danger"><span
                                                                            class="oi oi-eye"></span></span>
                                                                    <span class="img-caption d-none">Image caption goes
                                                                        here</span></a>
                                                                <div class="figure-action">
                                                                    <a href="#"
                                                                        class="btn btn-block btn-sm btn-primary">Voir en
                                                                        detail</a>
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
                                                </td>
                                                <td>{{ $i->designation }}</td>
                                                <td>{{ $i->theme }}</td>
                                                <td>{{ $i->type }}</td>
                                                <td>{{ $i->orateur }}</td>
                                                <td>{{ $i->est_a_la_une }}</td>
                                                <td>{{ \Carbon\Carbon::parse($i->date_debut)->isoFormat('LLL') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($i->date_fin)->isoFormat('LLL') }}</td>
                                                <td class="center align-middle text-right">
                                                    <a href="{{ $i->id }}" class="btn btn-sm btn-icon btn-secondary">
                                                        <i class="fa fa-eye"></i>
                                                        <span class="sr-only">Detail</span>
                                                    </a>

                                                    <a href="{{ route('editEvent',['id'=>$i->id]) }}"
                                                        class="btn btn-sm btn-icon btn-secondary">
                                                        <i class="fa fa-pencil-alt"></i>
                                                        <span class="sr-only">Modifier</span>
                                                    </a>
                                                    <a href="{{ $i->id }}" class="btn btn-sm btn-icon btn-secondary"
                                                        onclick="event.preventDefault();deletEvent({{ $i->id }},'delEvent')">
                                                        <i class="fa fa-trash-alt"></i>
                                                        <span class="sr-only">Supprimer</span>
                                                    </a>
                                                </td>

                                                @empty
                                                @endforelse


                                        </tbody> --}}
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Theme</th>
                                                <th>Orateur</th>
                                                <th>A la une</th>
                                                <th>Debut</th>
                                                <th>Fin</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div><!-- /.page-section -->
                    </div>
                    <div class="tab-pane fade" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                        <header class="page-title-bar">
                            <!-- floating action -->
                            <a href="{{ route('addEvent') }}">
                                <button type="button" class="btn btn-success btn-floated">
                                    <span class="fa fa-plus"></span>
                                </button> <!-- /floating action -->
                            </a>
                            <!-- title and toolbar -->
                            <div class="d-md-flex align-items-md-start">
                                <h1 class="page-title mr-sm-auto"> Liste des évènements</h1><!-- .btn-toolbar -->
                                <div id="dt-buttons" class="btn-toolbar"></div><!-- /.btn-toolbar -->
                            </div><!-- /title and toolbar -->
                        </header><!-- /.page-title-bar -->
                        <!-- .page-section -->
                        <div class="page-section">
                            <!-- .card -->
                            <div class="card card-fluid">
                                <!-- .card-header -->
                                <div class="card-header">
                                    <!-- .nav-tabs -->
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="tab" href="#tab1">All</a>
                                        </li>
                                    </ul><!-- /.nav-tabs -->
                                </div><!-- /.card-header -->
                                <!-- .card-body -->
                                <div class="card-body">

                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Theme</th>
                                                <th>Orateur</th>
                                                <th>A la une</th>
                                                <th>Debut</th>
                                                <th>Fin</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            @forelse ($videos as $i)
                                            <tr class="gradeX">
                                                <td>
                                                    <div class="card card-figure">
                                                        <!-- .card-figure -->
                                                        <figure class="figure">
                                                            <!-- .figure-img -->
                                                            <div class="figure-img">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('storage/'.$i->image_url) }}"
                                                                    width="100" alt="Card image cap">
                                                                <a href="{{ asset('storage/'.$i->image_url) }}"
                                                                    class="img-link" data-size="100x100">
                                                                    <span class="tile tile-circle bg-danger"><span
                                                                            class="oi oi-eye"></span></span>
                                                                    <span class="img-caption d-none">Image caption goes
                                                                        here</span></a>
                                                                <div class="figure-action">
                                                                    <a href="#"
                                                                        class="btn btn-block btn-sm btn-primary">Voir en
                                                                        detail</a>
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
                                                </td>
                                                <td>{{ $i->designation }}</td>
                                                <td>{{ $i->theme }}</td>
                                                <td>{{ $i->type }}</td>
                                                <td>{{ $i->orateur }}</td>
                                                <td>{{ $i->est_a_la_une }}</td>
                                                <td>{{ \Carbon\Carbon::parse($i->date_debut)->isoFormat('LLL') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($i->date_fin)->isoFormat('LLL') }}</td>
                                                <td class="center align-middle text-right">
                                                    <a href="{{ $i->id }}" class="btn btn-sm btn-icon btn-secondary">
                                                        <i class="fa fa-eye"></i>
                                                        <span class="sr-only">Detail</span>
                                                    </a>

                                                    <a href="{{ route('editEvent',['id'=>$i->id]) }}"
                                                        class="btn btn-sm btn-icon btn-secondary">
                                                        <i class="fa fa-pencil-alt"></i>
                                                        <span class="sr-only">Modifier</span>
                                                    </a>
                                                    <a href="{{ $i->id }}" class="btn btn-sm btn-icon btn-secondary"
                                                        onclick="event.preventDefault();deletEvent({{ $i->id }},'delEvent')">
                                                        <i class="fa fa-trash-alt"></i>
                                                        <span class="sr-only">Supprimer</span>
                                                    </a>
                                                </td>

                                                @empty
                                                @endforelse


                                        </tbody> --}}
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Designation</th>
                                                <th>Theme</th>
                                                <th>Orateur</th>
                                                <th>A la une</th>
                                                <th>Debut</th>
                                                <th>Fin</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </div><!-- /.page-section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('autres-script')

{{-- <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script> --}}

<!-- BEGIN PAGE LEVEL JS -->
{{-- <script src="{{ asset('assets/javascript/pages/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/datatables-filters-demo.js') }}"></script> --}}
<!-- END PAGE LEVEL JS -->

<script src="{{ asset('assets/site/js/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/site/js/admin.form.js') }}"></script>
<script src="{{ asset('assets/javascript/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/javascript/pages/photoswipe-demo.js') }}"></script>
<script>
    $(document).ready(function() {
          $('.dataTables-example').DataTable({
              language: {
                  processing: "Traitement en cours...",
                  search: "Rechercher&nbsp;:",
                  lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                  info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                  infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                  infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                  infoPostFix: "",
                  loadingRecords: "Chargement en cours...",
                  zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                  emptyTable: "Aucune donnée disponible dans le tableau",
                  paginate: {
                      first: "Premier",
                      previous: "Pr&eacute;c&eacute;dent",
                      next: "Suivant",
                      last: "Dernier"
                  },
                  aria: {
                      sortAscending: ": activer pour trier la colonne par ordre croissant",
                      sortDescending: ": activer pour trier la colonne par ordre décroissant"
                  }
              },
              pageLength: 25,
              responsive: true,
              dom: '<"html5buttons"B>lTfgitp',
              buttons: [{
                      extend: 'copy'
                  },
                  {
                      extend: 'csv'
                  },
                  {
                      extend: 'excel',
                      title: 'NewsLetter'
                  },
                  {
                      extend: 'pdf',
                      title: 'NewsLetter'
                  },

                  {
                      extend: 'print',
                      customize: function(win) {
                          $(win.document.body).addClass('white-bg');
                          $(win.document.body).css('font-size', '10px');

                          $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                      }
                  }
              ]

          });


      });
</script>

@endsection