@extends('layoutrec')
@section('cabecera')
<h1>
  Recepcion
  <small>Tareas</small>
</h1>
<ol class="breadcrumb">
  <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li></i> Lista de medicos</a></li>

</ol>

@stop
@section('cuerpo')
<section class="content">
  <!-- Info boxes -->
<div class="row">

  <!-- /.col -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Lista de medicos</h3>

    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped">
        <thead >
        <tr class="success">
          <th>Nombre</th>
          <th>Turno</th>
          <th>Especialidad</th>
          <th>Nick de usuario</th>
          <th>Ingreso</th>
        </tr>
        </thead>
        <tbody>
          @if(count($medicos)>0)
         <tr>
           @foreach ($medicos as $medico)
            <?php $nombre=$medico->nombres.' '.$medico->apellidos; ?>
              <th><?php echo $nombre;?></th>
              <th><?php echo $medico->turno;?></th>
               <th><?php echo $medico->nombre; ?></th>
               <th class="info"><label class="label label-info" >{{ $medico->nombre_usuario}}</label>
               </th>
               <th>{{ $medico->created_at}}</th>
       </tr>
           <?php endforeach; endif;

         ?>
        </tbody>
        <tfoot>
        <tr class="info">
          <th>Nombre</th>
          <th>Turno</th>
          <th>Especialidad</th>
          <th>Nick de usuario</th>
          <th>Ingreso</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- /.col -->
</div>
<!-- /.row -->

      <!-- /.row -->

            <div class="example-modal">
              <div class="modal fade modal-primary" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Registro de pacientes</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" method="POST" action="regpacientes">
                        <div class="box-body">
                          <div class="form-group">
                            <div class="form-group">
                              <label >Carnet de identidad</label>
                              <input type="int" class="form-control" id="ci" name="ci" placeholder="Ingrese CI" required>
                            <div class="form-group">
                                <label >Expedido</label>
                              <select class="form-control" name="expedido" required>
                                <option value="">Seleccione</option>
                                <option value="LP">La Paz</option>
                                <option value="OR">Oruro</option>
                                <option value="PT">Potosi</option>
                                <option value="CB">Cochabamba</option>
                                <option value="TJ">Tarija</option>
                                <option value="CH">Chuquisaca</option>
                                <option value="SC">Santa Cruz</option>
                                <option value="PA">Pando</option>
                                <option value="BE">Beni</option>
                              </select>
                            </div>

                            <label >Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres" required>
                          </div>
                          <div class="form-group">
                            <label >Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" required>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-outline">Guardar</button>
                          </div>
                        </div>
                        <!-- /.box-body -->


                      </form>

                    </div>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            </div>
            <!-- /.example-modal -->
@stop
@section('post')
  <!-- Bootstrap 3.3.6 -->
  <!-- DataTables -->

  <!-- Sparkline -->
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  <!-- SlimScroll 1.3.0 -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="plugins/chartjs/Chart.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
  <!-- AdminLTE for demo purposes -->

  <script type="text/javascript">
                $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeIn(2500); },0000); });
                $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeOut(2500); },5000); });
              </script>


  </section>
@stop
