@extends('layoutrec')
@section('cabecera')
<h1>
  Recepcion
  <small>Tareas</small>
</h1>
<ol class="breadcrumb">
  <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li></i> Calendario de citas</a></li>

</ol>

@stop
@section('cuerpo')
<section class="content">
  <!-- Info boxes -->
<div class="row">

  <!-- /.col -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Listado general de citas</h3>

    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped">
        <thead >
        <tr class="warning">
          <th>Paciente</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Medico</th>
          <th>Especialidad</th>
          <th>Acciones</th>
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
               <th><div class="btn-group">
                 <button type="button" class="btn btn-danger">Administrar</button>
                 <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                   <span class="caret"></span>
                   <span class="sr-only">Toggle Dropdown</span>
                 </button>
                 <ul class="dropdown-menu" role="menu">
                   <li><a href="#">Eliminar</a></li>
                   <li><a href="#">Cambiar fecha y hora</a></li>
                   <li class="divider"></li>
                   <li><a href="#">Cambiar Medico y/o Especialidad</a></li>

                 </ul></span> </a></th>
       </tr>
           <?php endforeach; endif;

         ?>
        </tbody>
        <tfoot>
        <tr class="warning">
          <th>Paciente</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Medico</th>
          <th>Especialidad</th>
          <th>Acciones</th>
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
<section class="content">
  <!-- Info boxes -->
<div class="row">

  <!-- /.col -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Calendario</h3>

    </div>

    <!-- /.box-header -->
    <div class="box-body">


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-3">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h4 class="box-title">Draggable Events</h4>
              </div>
              <div class="box-body">
                <!-- the events -->
                <div id="external-events">
                  <div class="external-event bg-green">Lunch</div>
                  <div class="external-event bg-yellow">Go home</div>
                  <div class="external-event bg-aqua">Do homework</div>
                  <div class="external-event bg-light-blue">Work on UI design</div>
                  <div class="external-event bg-red">Sleep tight</div>
                  <div class="checkbox">
                    <label for="drop-remove">
                      <input type="checkbox" id="drop-remove">
                      remove after drop
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /. box -->
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Create Event</h3>
              </div>
              <div class="box-body">
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                  <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                  <ul class="fc-color-picker" id="color-chooser">
                    <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                  </ul>
                </div>
                <!-- /btn-group -->
                <div class="input-group">
                  <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                  <div class="input-group-btn">
                    <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                  </div>
                  <!-- /btn-group -->
                </div>
                <!-- /input-group -->
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="box box-primary">
              <div class="box-body no-padding">
                <!-- THE CALENDAR -->
                <div id="calendario"></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
</div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!-- /.col -->
</div>
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
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="plugins/fullcalendar/fullcalendar.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {

      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function () {

          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          };

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject);

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 1070,
            revert: true, // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          });

        });
      }

      ini_events($('#external-events div.external-event'));

      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
          m = date.getMonth(),
          y = date.getFullYear();
      $('#calendario').fullCalendar({
        lang: 'es',
        header: {
          left: 'prev,next Hot',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        locale: 'es',

        buttonText: {
          today: 'Hoy',
          month: 'Mes',
          week: 'Semana',
          day: 'Dia'
        },
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
        //Random default events
        events: [
          {
            title: 'All Day Event',
            start: new Date(y, m, 1),
            backgroundColor: "#f56954", //red
            borderColor: "#f56954" //red
          },
          {
            title: 'Long Event',
            start: new Date(y, m, d - 5),
            end: new Date(y, m, d - 2),
            backgroundColor: "#f39c12", //yellow
            borderColor: "#f39c12" //yellow
          },
          {
            title: 'Meeting',
            start: new Date(y, m, d, 10, 30),
            allDay: false,
            backgroundColor: "#0073b7", //Blue
            borderColor: "#0073b7" //Blue
          },
          {
            title: 'Lunch',
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false,
            backgroundColor: "#00c0ef", //Info (aqua)
            borderColor: "#00c0ef" //Info (aqua)
          },
          {
            title: 'Birthday Party',
            start: new Date(y, m, d + 1, 19, 0),
            end: new Date(y, m, d + 1, 22, 30),
            allDay: false,
            backgroundColor: "#00a65a", //Success (green)
            borderColor: "#00a65a" //Success (green)
          },
          {
            title: 'Click for Google',
            start: new Date(y, m, 28),
            end: new Date(y, m, 29),
            url: 'http://google.com/',
            backgroundColor: "#3c8dbc", //Primary (light-blue)
            borderColor: "#3c8dbc" //Primary (light-blue)
          }
        ],
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function (date, allDay) { // this function is called when something is dropped

          // retrieve the dropped element's stored Event Object
          var originalEventObject = $(this).data('eventObject');

          // we need to copy it, so that multiple events don't have a reference to the same object
          var copiedEventObject = $.extend({}, originalEventObject);

          // assign it the date that was reported
          copiedEventObject.start = date;
          copiedEventObject.allDay = allDay;
          copiedEventObject.backgroundColor = $(this).css("background-color");
          copiedEventObject.borderColor = $(this).css("border-color");

          // render the event on the calendar
          // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
          $('#calendario').fullCalendar('renderEvent', copiedEventObject, true);

          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
          }

        }
      });

      /* ADDING EVENTS */
      var currColor = "#3c8dbc"; //Red by default
      //Color chooser button
      var colorChooser = $("#color-chooser-btn");
      $("#color-chooser > li > a").click(function (e) {
        e.preventDefault();
        //Save color
        currColor = $(this).css("color");
        //Add color effect to button
        $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
      });
      $("#add-new-event").click(function (e) {
        e.preventDefault();
        //Get value and make sure it is not null
        var val = $("#new-event").val();
        if (val.length == 0) {
          return;
        }

        //Create events
        var event = $("<div />");
        event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
        event.html(val);
        $('#external-events').prepend(event);

        //Add draggable funtionality
        ini_events(event);

        //Remove event from text input
        $("#new-event").val("");
      });
    });
    </script>
  <!-- Sparkline -->
  <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  <!-- SlimScroll 1.3.0 -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="plugins/chartjs/Chart.min.js"></script>


  <script type="text/javascript">
                $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeIn(2500); },0000); });
                $(document).ready(function() { setTimeout(function(){ $(".mensajewarning").fadeOut(2500); },5000); });
              </script>


  </section>
@stop
