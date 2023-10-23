 <!--==========================
      SESSION MESSAGE
    ============================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
@if(Session::has('error'))
    Swal.fire(
    'Echec de l\'Opération!',
    "{!! Session::get('error') !!}",
    'error'
    )
@endif
@if(Session::has('success'))
Swal.fire(
'Succès',
"{!! Session::get('success') !!}",
'success'
)
@endif
@if(Session::has('already'))
Swal.fire(
'Information',
"{!! Session::get('already') !!}",
'info'
)
@endif

</script>