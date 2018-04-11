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
            <h4 class="box-title">Seus compromissos</h4>
          </div>
          <div class="box-body">
            <!-- the events -->
            <div id="external-events">
              <?php
              foreach($TipoHorarios as $tipo){
              ?>
              <div id="<?php echo $tipo['tipoHorarios']['tipo_horarios_id'];?>" style="color: #fff; background-color: <?php echo $tipo['tipoHorarios']['cor']?>; border-color: <?php echo $tipo['tipoHorarios']['cor'] ; ?>" class="external-event"><?php echo$tipo['tipoHorarios']['titulo']; ?></div>
              <?php
              }
              ?>
              
              <div class="checkbox">
                <label for="drop-remove">
                  <input type="checkbox" id="drop-remove">
                  Remover após largar
                </label>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /. box -->
        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Compromisso</h3>
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
                <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
              </ul>
            </div>
            <!-- /btn-group -->
            <div class="input-group">
              <input maxlength="30"  required  id="new-event" type="text" class="form-control" placeholder="Nome do afazer">

              <div class="input-group-btn">
                <button id="add-new-event" type="button" class="btn btn-primary btn-success">Criar</button>
              </div>
              <div class="checkbox">
                <label for="drop-remove">
                  <input type="checkbox" id="urgente">
                  <p class="help-block">Urgente</p>
                </label>
              </div>
              <!-- /btn-group -->
            </div>
            <!-- /input-group -->
            </div>
            
            <div id="delete" class="box box-solid">
              <div id="droppable">
                <div class="box-header with-border">
                  <h3 class="box-title">Deletar</h3>
                  <p class="help-block">Arraste aqui</p>
                </div>
                <div class="box-body">
                  <i class="fa fa-trash" style="font-size:50px"></i>
                </div>
              </div>
            </div>
            
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
/* global $*/

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
        
        
        if(todosEventos[x].id == null){
          if(todosEventos[x].urgente){
            var horarios = {Horario:{dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id,urgente:1}};
          }else{
            var horarios = {Horario:{dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}};
          }
        }else{
          if(todosEventos[x].urgente){
            var horarios = {Horario:{id:todosEventos[x].id, dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id,urgente:1}};
          }else{
            var horarios = {Horario:{id:todosEventos[x].id, dt_Inicio:dt_Ini, dt_Termino:dt_Fim,psicologos_id:todosEventos[x].psicologos_id,tipo_horarios_id:todosEventos[x].tipo_horarios_id}};
          }
          
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

        if(drag.id == 1 || drag.id == 2){
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
        right : 'month,agendaWeek,agendaDay'
      },
      //Random default events
      events    : '/cakephp/horarios/feed', // PEGA OS DADOS DA URL -> MANDA COMO PARAMETRO START e END
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      selectable: true,
      drop      : function (date, allDay) { // this function is called when something is dropped
      //console.log(date)
        // retrieve the dropped element's stored Event Object
        alert($('#urgente').is(':checked'))
        var originalEventObject = $(this).data('eventObject') 

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)
        // assign it the date that was reported
        //console.log(copiedEventObject)
        
          if($('#urgente').is(':checked')){
            console.log($(this)[0])
            copiedEventObject.start            = date 
            copiedEventObject.end              = date._d.getTime() + (60*60*1000) // data final com 1 hora a mais do event drop
            copiedEventObject.allDay           = false
            copiedEventObject.backgroundColor  = $(this).css('background-color')
            copiedEventObject.borderColor      = $(this).css('border-color')
            copiedEventObject.tipo_horarios_id = $(this)[0].id
            copiedEventObject.psicologos_id    = 1
            copiedEventObject.urgente          = $('#urgente').is(':checked')
            copiedEventObject.title            = $(this)[0].innerHTML + " - urgente"
          }else{
            copiedEventObject.start            = date 
            copiedEventObject.end              = date._d.getTime() + (60*60*1000) // data final com 1 hora a mais do event drop
            copiedEventObject.allDay           = false
            copiedEventObject.backgroundColor  = $(this).css('background-color')
            copiedEventObject.borderColor      = $(this).css('border-color')
            copiedEventObject.tipo_horarios_id = $(this)[0].id
            copiedEventObject.psicologos_id    = 1
            copiedEventObject.urgente          = $('#urgente').is(':checked')
          }
          
          
          //console.log($(this))

        //console.log(date)
        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
          $('#drop-remove').prop('checked', false);
        }
      
      },
      eventRender: function(event, element,jsEvent) {
          if(event.urgente) {
            //alert(event.title)
              event.title += " - urgente";
          }
      },  
      eventDragStop: function(event,jsEvent) {
        var trashEl = $('#delete');
        var ofs = trashEl.offset();
        var x1 = ofs.left;
        var x2 = ofs.left + trashEl.outerWidth(true);
        var y1 = ofs.top;
        var y2 = ofs.top + trashEl.outerHeight(true);
        if (jsEvent.pageX >= x1 && jsEvent.pageX<= x2 &&
            jsEvent.pageY >= y1 && jsEvent.pageY <= y2) {
            var resposta = confirm("Deseja deletar esse horário ?");
            if(resposta){
              if(event.id == null){
                $('#calendar').fullCalendar('removeEvents', event._id);
              }else{
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
        }
      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })

    
    
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }
      // create event database
      // criar o array
      var tipoHorarios = {TipoHorario:{titulo:val,cor:currColor}}
      
      // CHAMA AQUI O AJAXTIPO
      $.when(ajaxTipo(tipoHorarios)).done(function(){
        //Create events html
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.html(val)
        event.attr('id',newEventId)
        $('#external-events').prepend(event)
  
        //Add draggable funtionality
        init_events(event)
  
        //Remove event from text input
        $('#new-event').val('')
      })

    })

    
    
    

    
  })
</script>

</html>
