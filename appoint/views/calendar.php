<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<div class="box box-primary">
  <div class="box-body no-padding">
    <!-- THE CALENDAR -->
    <div id="calendar"></div>
  </div>
  <!-- /.box-body -->
</div>
<!-- /. box -->
<style>
.fc-disabled {
    background-color: #F0F0F0 !important;
    color: #000;
    cursor: default;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:10px;
}
</style>
<script language="javascript">

    $.ajax({
        method: "GET",
        type: "GET",
        url: "http://localhost:8888/event/fetchData.php?action=getEventsList",
        // data: formData,
        dataType: "json",
        success: function (data) {
            var arrayData =  data;

            let events = [];
            $.each(arrayData, function(key, value) {
               // console.log(value.res_date);
                var itemsEvents = {
                    title: "Date Booked : "+value.status,
                    start: new Date(value.res_date),
                    end: new Date (value.res_date),
                    backgroundColor: "#741bcd",
                    id : new Date(value.res_date).getFullYear()+"-"
                        +new Date(value.res_date).getMonth()+"-"
                        +new Date(value.res_date).getDay()
                }
                events.push(itemsEvents);
            });

            callendarFunction(events);

        },
        error: function (data) {
            console.log(data);
        }
    });


    function callendarFunction(dataEvents){
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
            nowIndicator: true,
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
            },
            selectable: true,
            selectAllow: function (info) {
                console.log(info);

                if(IsDateHasMoreThanFreeEvents(calendar,info.startStr)){
                    return  false;
                }
                return (info.start >= getDateWithoutTime(new Date()));
            },
            select: function (info) {
                $("#formEventBook").show();


               // var date = new Date()
                $("#rdate").val(info.startStr);
                $("#rdate1").val(info.startStr);
            },
            events: dataEvents,
            dayRender: function (date, cell) {

                var today = new Date();
                var end = new Date();
                end.setDate(today.getDate()+7);

                if (date.getDate() === today.getDate()) {
                    cell.css("background-color", "red");
                }

                if(date > today && date <= end) {
                    cell.css("background-color", "yellow");
                }

            }
        });

        calendar.render();
    }


    function IsDateHasMoreThanFreeEvents(calendar,dateStr){
        var allEvents = [];
        allEvents = calendar.getEvents();
        let compteur = 0;
        $.each(allEvents, function(key, v) {
            if(v.startStr.includes(dateStr)){
                compteur++;
            }
        });
        return compteur > 2;
    }

    document.addEventListener("DOMContentLoaded", function () {

    });

    //get date without the time of day
    function getDateWithoutTime(dt)
    {
        dt.setHours(0,0,0,0);
        return dt;
    }




    //$(function () {
//	$('#calendar').fullCalendar({
//		//timeFormat: 'H(:mm)t',
//        selectable: true,
//        selectAllow: function (info) {
//            return (info.start >= new Date());
//        },
//		header: {
//        	left: 'prev,next today',
//            center: 'title',
//            right: 'month,agendaWeek,agendaDay'
//		},
//        buttonText: {
//            today: 'today',
//            month: 'month',
//            week: 'week',
//            day: 'day'
//        },
//		//hiddenDays: [ 2, 4 ],
//        events: function(start, end, timezone, callback) {
//			$.ajax({
//				url	: '<?php //echo WEB_ROOT; ?>//api/process.php?cmd=calview',
//				dataType: 'json',
//				type	: 'POST',
//				data	: {
//					start	: start.format(),
//					end		: end.format()
//				},
//				success: function(doc) {
//					var events = [];
//					//console.log('events #########');
//					callback(doc);
//				}
//			});
//		},
//        editable: true,
//        droppable: true, // this allows things to be dropped onto the calendar !!!
//        drop: function (date, allDay) { },
//		eventClick: function(calEvent, jsEvent, view) {
//			//alert('Event: ' + calEvent.title);
//			//alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
//			//alert('View: ' + view.name);
//			// change the border color just for fun
//			//$(this).css('border-color', 'red');
//		},
//		dayRender: function(date, cell){
//			//console.log('dayRender');
//    		//console.log(date.format());
//			//$(cell).addClass('fc-disabled').html('Disabled');
//			 $(cell).css('opacity', 1);
//			//$(cell).css("display", "none");//    display:none;
//		},
//		viewRender: function(view, element) {},
//		eventRender: function(ev, element, view) {
//			//element.qtip({content: ev.title});
//		},
//		eventAfterRender : function(ev, element, view) {
//			if(ev.block == true) {
//				//console.log('After Render = ' + ev.title + ' BLOCK ? ' + ev.block);
//				//fc-day fc-widget-content
//				var start = ev.start.format();
//				$("td.fc-day[data-date='"+ start +"']").addClass('fc-disabled');
//			}
//		}
//		/*,
//
//		eventMouseover: function(calEvent, jsEvent) {
//			var tooltip = '<div class="tooltipevent" style="width:100px;height:100px;background:#ccc;position:absolute;z-index:10001;">' + calEvent.title + '</div>';
//			var $tootlip = $(tooltip).appendTo('body');
//
//			$(this).mouseover(function(e) {
//				$(this).css('z-index', 10000);
//				$tooltip.fadeIn('500');
//				$tooltip.fadeTo('10', 1.9);
//			}).mousemove(function(e) {
//				$tooltip.css('top', e.pageY + 10);
//				$tooltip.css('left', e.pageX + 20);
//			});
//		},
//		eventMouseout: function(calEvent, jsEvent) {
//			$(this).css('z-index', 8);
//			$('.tooltipevent').remove();
//		}*/
//	});
//});//off
</script>