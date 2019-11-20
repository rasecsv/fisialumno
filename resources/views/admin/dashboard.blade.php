@extends('admin.layout')

@section('content')

	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bienvenido</h3>
               <input type="hidden" value="{{Session::get('sesion','No existe session')}}"> 
            </div>
            <!-- /.box-header -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
        <div id="calendar"></div>
      </div>
      
      <!-- /.row -->
    </section>
   

@stop
@section('scripts')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script >
$(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [

              
            ]
        })
    });
</script>
@stop