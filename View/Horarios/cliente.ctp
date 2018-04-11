<?php
    	
	echo $this->Html->css('fullcalendar.min.css');
  echo $this->Html->script('jquery-ui.min.js'); 
  echo $this->Html->script('jquery.slimscroll.min.js'); 
  echo $this->Html->script('fastclick.js'); 
  echo $this->Html->script('jquery.ui.touch-punch'); 
  echo $this->Html->script('moment.js'); 
  echo $this->Html->script('fullcalendar.min.js');
  
  echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>
<div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Agenda
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-body no-padding">
            <!-- THE CALENDAR -->
            <div id="calendar"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3">
        <div class="box box-solid">
          <div class="box-header with-border">
            <h4 class="box-title">Reservar Horário</h4>
          </div>
          <div class="box-body">
            <!-- the events -->
            <div id="external-events">
              <div id="<?php  echo $TipoHorarios['TipoHorario']['tipo_horarios_id'];?>" style="color: #fff; background-color:
                <?php echo $TipoHorarios['TipoHorario']['cor']?>; border-color: <?php echo $TipoHorarios['TipoHorario']['cor'] ; ?>" class="external-event"><?php echo $TipoHorarios['TipoHorario']['titulo']; ?></div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
         <div id="save" class="box box-solid">
          <div id="saved"  class="box-header with-border">
            <button class="fa fa-save" id="salvar" onclick="salvar()"> Salvar </button>
          </div>
        </div>
        <!-- /. box -->
        <div id="delete" class="box box-solid">
          <div id="droppable"  class="box-header with-border">
            <h3 class="box-title">Deletar</h3>
            <p class="help-block">Arraste aqui</p>
            <i class="fa fa-trash" style="font-size:50px"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
  <div id="post-view"></div>

<?php


?>

<!-- Page specific script  A DOCUMENTACAO DESTA MERDA SE ENCONTRA NESSE LINK AQUI, ACHO Q VAI DAR BOA É TÓIS https://fullcalendar.io/docs/event-source-object

important shit 

Renderizar novos horarios

$("#calendar").fullCalendar('removeEvents'); primeiro apaga todos
$("#demo-calendar").fullCalendar('addEventSource', JSON); coloca todos de novo


$('#calendar').fullCalendar('clientEvents'); eventos criados ja esta funcionando do jeito q esta, só falta setar horarios

pegar data certa ->
$('#calendar').fullCalendar('clientEvents')[0].start._d.toGMTString();
$('#calendar').fullCalendar('clientEvents')[0].start._d.toISOString();

-->
<script src="/cakephp/js/pt-br.js"></script>
<script>

var salvarArray = new Array(); 
//sample.push(new Object());
/* global $*/

//function GetCalendarDateRange() {
  //      var calendar = $('#calendar').fullCalendar('getCalendar');
    //    var view = calendar.view;
      //  var start = view.start._d;
        //var end = view.end._d;
        //var dates = { start: start, end: end };
        //return dates;
    //}
    
  function salvar() {
  
   var todosEventos = $('#calendar').fullCalendar('clientEvents')

      for(var x =0; x<todosEventos.length;x++){
        var dt_Ini = todosEventos[x].start._d.toISOString()
        var dt_Fim = todosEventos[x].end._d.toISOString()
        dt_Ini = dt_Ini.replace("T"," ")
        dt_Ini = dt_Ini.replace("Z","")
        dt_Ini = dt_Ini.replace(".00","")
        dt_Fim = dt_Fim.replace("T"," ")
        dt_Fim = dt_Fim.replace("Z","")
        dt_Fim = dt_Fim.replace(".00","")
        
        
         if(todosEventos[x].id == null){
          var horarios = {Horario:{dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}};
        }else{
          var horarios = {Horario:{id:todosEventos[x].id, dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}};
        }
        
        //var tipo_horarios = {0:{titulo:todosEventos[x].title, cor:todosEventos[x].backgroundColor}};
        //horarios.tipo_horarios = tipo_horarios
        //console.log(horarios) // fazer post dessa merda para salvar no banco, esse botao é só de teste, sera removido depois
          // FALTA ARRUMAR O ERRO 500 DO SERVIDOR NA HORA DE SALVAR, DEVE SER POR CAUSA DE ALGUM ARRAY, SEILA
        $.ajax({
          type: "post",  // Request method: post, get
          url: "/cakephp/horarios/add", // URL to request
          data: horarios,  // post data
          success: function(response) {
            document.getElementById("post-view").innerHTML = response;
          },
          error:function (XMLHttpRequest, textStatus, errorThrown) {
          }
        });
      }
  
  return '';
}


function validateDates (dateSplit)
    {
      
      var dateRanges = $('#calendar').fullCalendar('clientEvents');

      for(var dateRange in dateRanges)
      {
        // var dateRange = {start:"2018-04-13 08:00:000", end:"2018-04-13 12:00:000", psicologos_id:1, tipo_horarios_id:3};
        var dateRangeInicio = new Date(dateRange.start);
        var dateRangeTermino = new Date(dateRange.end);
        
        //alert(dateSplit.start);
        //alert(dateRange.start._d);
        
        //alert(start);
        //alert(end);
        //alert(dates);
        
        // var dateSplit = {start:"2018-04-13 09:00:000", end:"2018-04-13 10:00:000", psicologos_id:1, tipo_horarios_id:3};
        var dateSplitInicio = new Date(dateSplit.start);
        var dateSplitTermino = new Date(dateSplit.end);
      
        
        if(dateRangeInicio.getYear() === dateSplitInicio.getYear() && dateRangeInicio.getMonth() === dateSplitInicio.getMonth() && dateRangeInicio.getDay() === dateSplitInicio.getDay())
        {
          if(dateRangeInicio.getHours() < dateSplitInicio.getHours() )
          {
            var dateRangeSplit = dateRange;
            dateRange.end = dateSplit.start;
            dateRangeSplit.start = dateSplitTermino;
            
            return [dateRange , dateRangeSplit];
          }
          else
          {
            if(dateRangeInicio.getHours() === dateSplitInicio.getHours())
            {
              dateRange.start = dateSplit.end;
            }
            else
            {
              dateRange.end = dateSplit.start;
            }
            return dateRange;
          }
        }
      }
    }
function teste(){
   var todosEventos = $('#calendar').fullCalendar('clientEvents');
    var horarios;
      for(var x =0; x<todosEventos.length;x++){
        if(todosEventos[x].tipo_horarios_id == 3){
          var dt_Ini = todosEventos[x].start._d.toISOString()
          var dt_Fim = todosEventos[x].end._d.toISOString()
          dt_Ini = dt_Ini.replace("T"," ")
          dt_Ini = dt_Ini.replace("Z","")
          dt_Ini = dt_Ini.replace(".00","")
          dt_Fim = dt_Fim.replace("T"," ")
          dt_Fim = dt_Fim.replace("Z","")
          dt_Fim = dt_Fim.replace(".00","")
          horarios[x]=dt_Ini;
          alert("alo");
          // if(todosEventos[x].id == null){
          //   horarios.push({Horario:{start:dt_Ini, end:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}});
          // }else{
          //   horarios.push({Horario:{id:todosEventos[x].id, start:dt_Ini, end:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}});
          // }
          
        }
      }
      console.log(horarios);
}
$(window).bind('beforeunload', function() {

var todosEventos = $('#calendar').fullCalendar('clientEvents')

      for(var x =0; x<todosEventos.length;x++){
        var dt_Ini = todosEventos[x].start._d.toISOString()
        var dt_Fim = todosEventos[x].end._d.toISOString()
        dt_Ini = dt_Ini.replace("T"," ")
        dt_Ini = dt_Ini.replace("Z","")
        dt_Ini = dt_Ini.replace(".00","")
        dt_Fim = dt_Fim.replace("T"," ")
        dt_Fim = dt_Fim.replace("Z","")
        dt_Fim = dt_Fim.replace(".00","")
        
        //console.log(todosEventos[x]);
        if(todosEventos[x].id == null){
          var horarios = {Horario:{dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}};
        }else{
          var horarios = {Horario:{id:todosEventos[x].id, dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}};
        }
        
        //var tipo_horarios = {0:{titulo:todosEventos[x].title, cor:todosEventos[x].backgroundColor}};
        //horarios.tipo_horarios = tipo_horarios
        //console.log(horarios) // fazer post dessa merda para salvar no banco, esse botao é só de teste, sera removido depois
          // FALTA ARRUMAR O ERRO 500 DO SERVIDOR NA HORA DE SALVAR, DEVE SER POR CAUSA DE ALGUM ARRAY, SEILA
        $.ajax({
          type: "post",  // Request method: post, get
          url: "/cakephp/horarios/add", // URL to request
          data: horarios,  // post data
          success: function(response) {
            document.getElementById("post-view").innerHTML = response;
          },
          error:function (XMLHttpRequest, textStatus, errorThrown) {
          }
        });
      }
  
  return '';
});
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        console.log($(ui.draggable))
        var drag = $(ui.draggable)[0];

        if(drag.id == 1 || drag.id == 2 || drag.id == 3){
          alert("impossivel deletar esse evento")
        }else{
          var eventos = $('#calendar').fullCalendar('clientEvents');
          for(var x =0; x<eventos.length;x++){
            if(eventos[x].tipo_horarios_id == drag.id){
              alert("Impossível excluir compromisso pois ele esta sendo usado por um horário na agenda");
              return ""
            }
          }
          var a = confirm('Deseja deletar esse compromisso?');
          if(a){
            $.when($.ajax({
              type: "post",  // Request method: post, get
              url: "/cakephp/TipoHorarios/delete/"+$(ui.draggable)[0].id, // URL to request
              success: function(response) {
                document.getElementById("post-view").innerHTML = response;
              },
              error:function (XMLHttpRequest, textStatus, errorThrown) {
              }
            })).done(function(){
              $(ui.draggable).remove()  
            })
          }else{
            return ""
          }

        }
        
      }
    });
  } );
  $( function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
      var newEventId =0;

     function ajaxTipo(arr){
       
      return $.ajax({
        type: "post",  // Request method: post, get
        url: "/cakephp/TipoHorarios/add", // URL to request
        data: arr,  // post data
        success: function(response) {
          //document.getElementById("post-view").innerHTML = response; debug only
          console.log(response + "ALOOOOOOOOOOOOO");
          newEventId = response;
        },
        error:function (XMLHttpRequest, textStatus, errorThrown) {
          alert(textStatus + "Não foi possível salvar afazer, tente mais tarde");
        }
      });
    }
    
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)
        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })
    
      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'agendaWeek,agendaDay'
      },
      defaultView: 'agendaWeek',

      //Random default events
      events    : '/cakephp/horarios/feed', // PEGA OS DADOS DA URL -> MANDA COMO PARAMETRO START e END
      editable  : false,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      
      eventRender: function(event, element,jsEvent) {
          if(event.tipo_horarios_id == 3) {
              event.editable = true;
          }
      },
      drop      : function (date, allDay) { // this function is called when something is dropped
        
        // Talvez seja uma boa pro futuro https://stackoverflow.com/questions/14557862/run-jquery-function-onclick
        
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject') 
        console.log($(this).data('eventObject'))

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)
        // assign it the date that was reported
        //console.log($(this))
        copiedEventObject.start            = date 
        copiedEventObject.end              = date._d.getTime() + (60*60*1000) // data final com 1 hora a mais do event drop
        copiedEventObject.allDay           = false
        copiedEventObject.backgroundColor  = $(this).css('background-color')
        copiedEventObject.borderColor      = $(this).css('border-color')
        copiedEventObject.tipo_horarios_id = $(this)[0].id
        copiedEventObject.psicologos_id    = 1
        copiedEventObject.editable         = true
        copiedEventObject.durationEditable = false
        
        
        var x = validateDates(copiedEventObject);
        
        console.log(x);
        //console.log(date)
        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)
      },
          
      eventDragStop: function(event,jsEvent) { // validar somente para o reservar id=3
          console.log(event);
          console.log(jsEvent);
          var trashEl = $('#delete');
          var ofs = trashEl.offset();
          var x1 = ofs.left;
          var x2 = ofs.left + trashEl.outerWidth(true);
          var y1 = ofs.top;
          var y2 = ofs.top + trashEl.outerHeight(true);
          if (jsEvent.pageX >= x1 && jsEvent.pageX<= x2 &&
              jsEvent.pageY >= y1 && jsEvent.pageY <= y2) {
            if(event.tipo_horarios_id == 3){
              var resposta = confirm("Deseja deletar essa reserva ?");
              if(resposta){
                if(event.id == null){
                  $('#calendar').fullCalendar('removeEvents', event._id);
                }else{ // só ira cair aqui se ele foi salvo no banco antes
                  $.when($.ajax({
                    type: "post",  // Request method: post, get
                    url: "/cakephp/Horarios/delete/"+event.id, // URL to request
                    success: function(response) {
                      document.getElementById("post-view").innerHTML = response;
                    },
                    error:function (XMLHttpRequest, textStatus, errorThrown) {
                    }
                  })).done(function(){
                    $('#calendar').fullCalendar('removeEvents', event.id);
                  })
                } 
              }
            }else{
              alert("Impossível deletar esse evento");
            }
          }

      }
    })
  })
</script>

</html>
