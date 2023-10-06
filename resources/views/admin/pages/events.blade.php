@extends('admin.layouts.template')

@section('autres_style')
    <link href="{{ asset('assets/stylesheetsd/dataTables/datatables.min.cs') }}" rel="stylesheet">
@endsection
@section("content")

            <!-- .page-title-bar -->
            <header class="page-title-bar">
              <!-- .breadcrumb -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">
                    <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tables</a>
                  </li>
                </ol>
              </nav><!-- /.breadcrumb -->
              <!-- floating action -->
              <a href="{{ route('addEvent') }}" type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></a> <!-- /floating action -->
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
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tab2">Ongoing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tab3">Completed</a>
                    </li>
                  </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                 
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>Designation</th>
                                <th>Theme</th>
                                <th>Type</th>
                                <th>Lieu</th>
                                <th>Orateur</th>
                                <th>A la une</th>
                                <th>Debut</th>
                                <th>Fin</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($events as $i)
                                <tr class="gradeX">
                                    <td>{{ $i->designation }}</td>
                                    <td>{{ $i->theme }}</td>
                                    <td>{{ $i->type }}</td>
                                    <td>{{ $i->lieu }}</td>
                                    <td>{{ $i->orateur }}</td>
                                    <td>{{ $i->est_a_la_une }}</td>
                                    <td>{{ \Carbon\Carbon::parse($i->date_debut)->isoFormat('LLL') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($i->date_fin)->isoFormat('LLL') }}</td>
                                    <td>{{ $i->image_url }}</td>
                                    <td class="center">

                                    </td>

                                @empty
                            @endforelse


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Designation</th>
                                <th>Theme</th>
                                <th>Type</th>
                                <th>Lieu</th>
                                <th>Orateur</th>
                                <th>A la une</th>
                                <th>Debut</th>
                                <th>Fin</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.card-body -->
              </div><!-- /.card -->
            </div><!-- /.page-section -->
          

@endsection
@section('autres-script')

<script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script> 

  <!-- BEGIN PAGE LEVEL JS -->
  <script src="{{ asset('assets/javascript/pages/dataTables.bootstrap.js') }}"></script>
  <script src="{{ asset('assets/javascript/pages/datatables-filters-demo.js') }}"></script> <!-- END PAGE LEVEL JS -->
  <script src="{{ asset('assets/javascript/dataTables/datatables.min.js') }}"></script>
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