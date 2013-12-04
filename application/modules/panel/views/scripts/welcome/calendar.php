<?php echo $this->Breadcrumb(0, 'main', 0);?>
<div id="celender" class="span6"></div>
<script src='lib/jquery/plug/jquery-ui.custom.min.js' type="text/javascript" charset="utf-8"></script>
<script src='lib/fullcalendar/fullcalendar.min.js'></script>  <!-- 载入日历记事本 -->
<script type='text/javascript'>
       	var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

         $('#celender').fullCalendar({
            theme: false,
			header: {
				left: 'month,agendaWeek,agendaDay',
				center: 'title',
				right: 'prev,next today'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
            events: '<?php echo $this->url(array(
            	'action' => 'weshop',
            	'controller' => 'events',
            	'module' => 'api'
            ));?>',
            eventDrop: function(event, delta) {
                alert(event.title + ' was moved ' + delta + ' days' + '(should probably update your database)');
            },
            loading: function(bool) {
                if (bool) $('#loading').fadeIn();
                else $("#loading").fadeOut();
            }
            
        });
</script>