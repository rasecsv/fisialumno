<!--viene de -->
@extends('admin.layout')

@section('content')
   <section class="content">
      <div class="row">
        <div class="col-xs-9">
            
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Cita</h3>
            </div>
            <!-- /.box-header -->
             <div id="calendar"></div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
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

                @foreach($cita as $citas)
                {
                    title : '{{ $citas->descripcion}}',
                    start : '{{ $citas->fecita }}',
                    url : ''
                },
                @endforeach
            ]
        })
    });
</script>
@stop