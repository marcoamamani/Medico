@extends('layoutrec')
@section('cabecera')
<h1>
  Recepcion
  <small>Tareas</small>
</h1>
<ol class="breadcrumb">
  <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>

</ol>

@stop
@section('cuerpo')
<section class="content">
  <!-- Info boxes -->
<div class="row">

  <!-- /.col -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Asignar pacientes a medico</h3>
    </br></br>
    @if (Session::has('mensaje'))
    <div class=" alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
      </button>
      <strong>Exito</strong> {{ Session::get('mensaje') }}
    </div>
    @endif
     <button type="button" class="btn btn-app success" data-toggle="modal" data-target="#myModal">
     <i class="fa fa-user-plus"></i> Registrar nuevo paciente </button>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped">
        <thead >
        <tr class="success">
          <th>Carnet de identidad</th>
          <th>Nombre del paciente</th>
          <th>Cuenta de usuario</th>
          <th>Detalles</th>
          <th>Asignar</th>
        </tr>
        </thead>
        <tbody>
          @if(count($pacientes)>0)
         <tr>
           @foreach ($pacientes as $paciente)
            <?php $nombre=$paciente->nombres.' '.$paciente->apellidos; ?>
               <th><?php echo $paciente->ci;?></th>
               <th><?php echo $nombre; ?></th>
               <th
                 <?php
                   if($paciente->cuenta==1)
                     {
                       echo 'class="success">'.'<label class="label label-success" >Registra cuenta</label>';
                     }
                     else
                     {
                       echo 'class="danger">'.'<label class="label label-danger" >No registra cuenta</label>';
                     }
                 ?>
               </th>
               <th><a class="btn btn-primary" href="pacientes/{{$paciente->id}}" title="Ver historial"> <span class="fa fa-search"> </span> </a></th>
               <th><div class="btn-group">
                 <button type="button" class="btn btn-info">Asignar</button>
                 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                   <span class="caret"></span>
                   <span class="sr-only">Toggle Dropdown</span>
                 </button>
                 <ul class="dropdown-menu" role="menu">
                   <li><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal2">Cita medica</button></li>
                   <li><button class="btn btn-block btn-warning" data-toggle="modal" data-target="#myModal3">Orden de laboratorio</button></li>
                   <li class="divider"></li>
                   <li><button class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal4">Atencion medica</button></li>

                 </ul></span> </a></th>
       </tr>
           <?php endforeach; endif;

         ?>
        </tbody>
        <tfoot>
        <tr class="info">
          <th>Nombre del paciente</th>
          <th>Carnet de identidad</th>
          <th>Cuenta de usuario</th>
          <th>Detalles</th>
          <th>Asignar</th>
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
            <div class="example-modal">
              <div class="modal fade modal-warning" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Asignar cita medica</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" method="POST" action="regcita">
                        <div class="box-body">
                          <div class="form-group">
                            <div class="form-group">
                              <label >Carnet de identidad</label>
                              <input type="int" class="form-control" id="cicita" name="ci" placeholder="Ingrese CI" readonly>
                            </div>
                            <label >Nombre del paciente</label>
                            <input type="text" class="form-control" id="nombrescita" name="nombres" placeholder="Ingrese sus nombres" readonly>
                          </div>
                          <div class="form-group">
                            <label >Especialidad</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Hora:</label>

                            <div class="input-group">
                              <input type="time" class="form-control ">

                              <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Fecha:</label>

                            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker" data-date-format="dd/mm/yyyy">
                            </div>
                            <!-- /.input group -->
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
            <div class="example-modal">
              <div class="modal fade modal-primary" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            <div class="example-modal">
              <div class="modal fade modal-primary" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            <div class="example-modal">
              <div class="modal fade modal-primary" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
  <!-- Select2 -->
  <script src="../../plugins/select2/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
  <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- FastClick -->
  

  <!-- SlimScroll 1.3.0 -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="plugins/chartjs/Chart.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


  <script type="text/javascript">
                $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeIn(2500); },0000); });
                $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeOut(2500); },5000); });
              </script>


  </section>
@stop
