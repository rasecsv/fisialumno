<!--viene de -->
@extends('admin.layout')

@section('content')

	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Historial de Resultados</h3>
            </div>
            <!-- /.box-header -->
               <div class="box-body">
              <table id="tabla" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Examen</th>
                    <th scope="col">Diagnostico</th>
                    <th scope="col">Fecha</th>
                    
                  </tr>
                </thead>
                <tbody>

                  <?php
                    $contador =0;
                    foreach ($historial as $historial) {
                      $contador = $contador + 1;
                  ?>
                  <tr>
                    <th scope="row"><?= $contador ?></th>
                    <td><?= $historial->examen_id; ?></td>
                    <td><?= $historial->diagnostico; ?></td>
                    <td><?= $historial->updated_at; ?></td>
                    <td>
                      
                    </td>
                    
                  </tr>
                  <?php
                  }

                  ?>    
                </tfoot>
              </table>
            </div>
              
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