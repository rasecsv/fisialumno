<!--viene de -->
@extends('admin.layout')

@section('content')

	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Examen Psicologico</h3>
            </div>
            <!-- /.box-header -->

            <form method="POST"action="{{url(route('prueba_guardar'))}}"   enctype="multipart/form-data">
              {{csrf_field()}}
                  <input type="hidden"  name="codigo" value="{{Session::get('sesion','No existe session')}}">
                  <input type="hidden"  name="examen" value="1">
                  <?php 
                  $contador =0;
                  foreach ($dato as $key => $value) {
                    $contador = $contador + 1;
                    ?>
                      <div class="container" id="{{$value->id}}">
                        <h4>Pregunta N°: {{ $contador }}</h4>
                        <label > <?= $value->encabezado; ?> </label>
                        
                      <div class="form-group col-md-12">
                        <!--<div class="col-md-12">
                          <input id="optradio" type="radio" name="opt[{{$value->id}}]" 
                                   value="5" >
                                    Siempre
                          </input>
                        </div>-->
                        <div class="col-md-12">
                          <input id="optradio" type="radio" name="opt[{{$value->id}}]" 
                                   value="4" >
                                    Mucho
                          </input>
                        </div>
                        <div class="col-md-12">
                          <input id="optradio" type="radio" name="opt[{{$value->id}}]" 
                                    value="3">
                                    Regular
                          </input>
                        </div>
                        <div class="col-md-12">
                          <input id="optradio" type="radio" name="opt[{{$value->id}}]" 
                                    value="2">
                                    Poco
                          </input>
                        </div>
                        <div class="col-md-12">
                          <input id="optradio" type="radio" name="opt[{{$value->id}}]" 
                                    value="1">
                                    No
                          </input>
                        </div>
                      
                      </div>
                  </div>
                  <?php }
                ?>
                
              <div class="box-footer">
                <a href="{{url(route('test_vista'))}}" class="btn btn-danger">Cancelar</a>
                <!--<input type="submit" value="Guardar"  class="btn btn-primary">-->   
                <button type="submit" class="btn btn-primary" >Guardar</button>
              </div>
              
            </form>
            <!-- /.box-body -->
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
  
</script>
@stop