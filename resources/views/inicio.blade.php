@extends('layoutadmin')
@section('cabecera')
<h1>
  Administracion
  <small>Herramientas</small>
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

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box"><a href="#">
      <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Ajustes</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Modifica datos de usuarios</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box"><a href="#">
      <span class="info-box-icon bg-blue"><i class="ion ion-person-add"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Agregar usuarios</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Registra nuevos usuarios</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box"><a href="#">
      <span class="info-box-icon bg-yellow"><i class="ion ion-clipboard"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Listar personal</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Genera una lista de todo el personal clasificado por funciones</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box"><a href="#">
      <span class="info-box-icon bg-aqua"><i class="ion ion-person-stalker"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pacientes</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Lista de pacientes registrados</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box"><a href="#">
      <span class="info-box-icon bg-purple"><i class="fa ion-ios-paper-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Especialidades</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Lista de especialidades del hospital Agramont</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box"><a href="#">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-clock-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Recientes</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Muestra usuarios registrados recientemente</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- /.col -->
</div>
<!-- /.row -->
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Informe de pacientes atendidos anuales</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Atenciones: Junio, 2017</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong><h4>Pacientes atendidos por turnos</h4></strong>
                  </p>
                <div class="progress-group">
                    <span class="progress-text">Turno Mañana</span>
                    <span class="progress-number"><b>160</b>/200</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Turno Tarde</span>
                    <span class="progress-number"><b>310</b>/400</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Turno noche</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                    <span class="progress-text">Turno madrugada</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                   </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              <!-- ./box-body -->

            <!-- /.box-footer -->
          </div></div></div>
      <!-- /.row -->

@stop
@section('post')
  <!-- Bootstrap 3.3.6 -->
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
  



  </section>
@stop
