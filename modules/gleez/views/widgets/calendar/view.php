
<?php echo HTML::style('media/css/fullcalendar.css', NULL, TRUE); ?>


<?php echo HTML::script('media/js/fullcalendar.js', NULL, TRUE); ?>
<?php echo HTML::script('media/js/gcal.js', NULL, TRUE); ?>

<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<style type="text/css">
    .isEvent{
        background-color:#fff;
        color: #000;
        font-weight:bold;
        cursor: pointer;
        background-image: url('<?php echo URL::base(); ?>media/images/newseventicons-event.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position-x: center;
    }
    .fc-today{
        color: #F30;
    }
    .fc-day-content{
        display:none;
    }
    .fc-event-container{
        display:none;
    }
    .ui-dialog td{
        text-align: left;
    }
    .ui-dialog table{
        margin:10px 0;
    }
    .ui-dialog a{
        color: crimson;
        text-decoration: underline;
    }
    .ui-dialog{
        -webkit-box-shadow: 0px 3px 9px 0px rgba(50, 50, 50, 0.75);
        -moz-box-shadow:    0px 3px 9px 0px rgba(50, 50, 50, 0.75);
        box-shadow:         0px 3px 9px 0px rgba(50, 50, 50, 0.75);
    }
    .fc-header-title h2 {
        font-size:25px;
        }
    @media only screen and (max-width: 1730px) { .fc-header-title h2 { font-size:20px;}}
    @media only screen and (max-width: 1600px) { .fc-header-title h2 { font-size:15px;}}
    @media only screen and (max-width: 1188px) { .fc-header-title h2 { display:none;}}
        .fc table {
          border:none;  
        }
</style>
<script>
function goto_event(url){
    window.open(url, 'gcalevent', 'width=800,height=600');
}
    jQuery(document).click(function(event) {
        if (!jQuery(event.target).closest(".fc-content").length) {
                            var $activeDialogs = jQuery(".ui-dialog:visible").find('.ui-dialog-content');
                            $activeDialogs.dialog('close');
        }
    });
	jQuery(document).ready(function() {
            loadCalendar();
    });

function loadCalendar(){
		jQuery('#calendararea').fullCalendar({
                    header: {
                        left: 'title',
                        center: false,
                        right: 'prev,next'
                    },
                        eventColor: "#000",
                        eventBackgroundColor: "#000",
                        eventTextColor: "#000",
			// US Holidays
                        events: 'https://www.google.com/calendar/feeds/magreserve%40gmail.com/public/basic',
                       eventRender: function (event, element, monthView) { 
                         var dateString=jQuery.fullCalendar.formatDate( event.start, 'yyyy-MM-dd' );
                         var dis_start=jQuery.fullCalendar.formatDate( event.start, 'M/d/yy h:mm TT' );
                         var dis_end=jQuery.fullCalendar.formatDate( event.end, 'M/d/yy h:mm TT' );
                         jQuery('*[data-date="'+dateString+'"]').addClass("isEvent");
                         if(jQuery("#d"+dateString).length>0){
                             jQuery("#d"+dateString).empty();
                             jQuery("#d"+dateString).append("<table><tr><td>Event</td><td><i class='fa fa-calendar'> <a href='#' onClick=\"goto_event('"+
                                     event.url+"')\">"+event.title+"</a></i>"+
                                     "</td></tr><tr><td>Start</td><td>"+dis_start+
                                     "</td></tr><tr><td>End</td><td>"+dis_end+
                                     "</td></tr><tr><td>Location:</td><td>"+event.location+
                                     "</td></tr><tr><td>Description:</td><td>"+event.description+
                                     "</td></tr></table>");
                         } else {
                            jQuery(".eventdata").append("<div id='d"+dateString+"'><table><tr><td>Event</td><td><i class='fa fa-calendar'> <a href='#' onClick=\"goto_event('"+
                                    event.url+"')\">"+event.title+"</a></i>"+
                                     "</td></tr><tr><td>Start</td><td>"+dis_start+
                                     "</td></tr><tr><td>End</td><td>"+dis_end+
                                     "</td></tr><tr><td>Location:</td><td>"+event.location+
                                     "</td></tr><tr><td>Description:</td><td>"+event.description+
                                     "</td></tr></table></div>");
                            }
                        },
			eventClick: function(event) {
				// opens events in a popup window
//				
                                jQuery('#d'+dateString).dialog();
				return false;
			},
                        dayClick: function( date, allDay, jsEvent, view ){
                            var gd=date.toDateString();
                            var dp=new Date(gd);
                            var dateString=jQuery.fullCalendar.formatDate( date, 'yyyy-MM-dd' );;
                            if(jQuery('*[data-date="'+dateString+'"]').hasClass("isEvent")){
                            var $activeDialogs = jQuery(".ui-dialog:visible").find('.ui-dialog-content');
                            $activeDialogs.dialog('close');
                            jQuery( "#d"+dateString+" table:odd" ).css( "background-color", "#EBEBEB" ); 
                            jQuery('#d'+dateString).attr('title', dateString);
                            jQuery('#d'+dateString).dialog({
                                maxHeight: 350,
                                width: 600,
                                show: {effect: 'fade', duration: '150'},
                                hide: {effect: 'fade', duration: '10'},
                                position: {
                                   my: 'right top',
                                   at: 'left top',
                                   of: this
                                }});
                        }
                        },
			loading: function(bool) {
				if (bool) {
					jQuery('#loading').show();
				}else{
					jQuery('#loading').hide();
				}
			}
			
		});
                }
        

</script>
<style>
		
	#loading {
		position: absolute;
		top: 5px;
		right: 15px;
		}


</style>

<div id='loading' style='display:none'>loading...</div>
<div id='calendararea'></div>
<div class="eventdata" title="Event Schedule" style="display:none;"></div>

