@extends('layoutadmin')
@section('cuerpo')
<section class="content">
  <!-- Info boxes -->
<div class="row">

  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Ajustes</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Modifica datos de usuarios</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-blue"><i class="ion ion-person-add"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Agregar usuarios</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Registra nuevos usuarios</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="ion ion-clipboard"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Reportes</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Genera reportes globales</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="ion ion-person-stalker"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Perfiles</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Lista de perfiles existentes de usuarios</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-purple"><i class="fa ion-ios-paper-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Especialidades</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Lista de especialidades del hospital Agramont</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-clock-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Recientes</span>
        <span class="info-box-number" style="font-weight:normal; font-size:15px;">Muestra usuarios registrados recientemente</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- /.col -->
</div>
<!-- /.row -->
</section>
@stop
