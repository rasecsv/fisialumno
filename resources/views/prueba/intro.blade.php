<!--viene de -->
@extends('admin.layout')

@section('content')
  <?php session(['idCarrito' => '123456']);?>
	 <section class="content">
      @if(session('status'))
            <div class="alert alert-success alert-block" >
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ session('status')}}</strong>
            </div>
      @endif 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Examen Psicologico</h3>
            </div>
            <div class="content"> 
              <nav class="navbar navbar-light bg-light">
                <span class="navbar-text">
                  Bienvenido al sistema, a continuación procedera a realizar el examen psicologico.
                </span>
              </nav>
            </div>
            <a href="{{url(route('test_view'))}}" class="btn btn-success">Comenzar</a>
          </div>
        </div>
        <!-- /.col -->        
      </div>
      <!-- /.row -->
    </section>
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
          crossorigin="anonymous"></script>
<script >
   window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
            }, 2000);
</script>
@stop