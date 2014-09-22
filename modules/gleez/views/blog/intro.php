<script type="text/javascript">
    jQuery(document).ready(function(){ 
    startIntro();
    });

</script>
<style>
    .introjs-tooltip{
        max-width:600px !important;
    }
    .intro_title{
        font-weight:bold;
        clear:both;
        margin-bottom:10px;
    }
    .intro_start{
        width:400px;
    }
    .intro_medium{
        width:350px;
    }
    .intro_wide {
        width:400px;
    }
    .event_image{
       padding-left:20px;
       display:inline;
       background: url('/media/images/newseventicons-event.png');
       background-size: contain;
        background-repeat: no-repeat;
        background-position-x: center;
        margin-right:3px;
    }
    </style>
    <script src="//cdn.jsdelivr.net/intro.js/0.9.0/intro.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/intro.js/0.9.0/introjs.min.css">
<script type="text/javascript">
      function startIntro(){
     
        var intro = introJs();
          intro.setOptions({
            steps: [
              { 
                intro: "<div class='intro_title'>Welcome,</div>Since this is your first time here, let's take a look around...",
                tooltipClass: 'intro_start'
              },
              {
                element: '.widget-menu-user-menu',
                intro: "All user action options can be found here",
                position:'left',
                tooltipClass: 'intro_medium'
              },
              {
                element: '.widget-calendar-widget',
                intro: "<div class='intro_title'>Calendar widget</div><p>Offers a guick glance at past and upcoming neighborhood events.</p>Clicking on an event marked with <div class='event_image'> </div> will display event information and a link to the event details.",
                position:'left',
                tooltipClass: 'intro_wide'
              },  
              {
                element: '.openwidget',
                intro: 'Open or Close widgets by clicking the arrows',
                position: 'left'
              },
              {
                element: '.logo',
                intro: "Clicking the logo will take you back to the home screen",
                position: 'bottom right',
                tooltipClass: 'intro_medium'
              },             
              {
                element: '.dropdown-toggle',
                intro: "<div class='intro_title'>User Profile</div><p>Change user settings/password</p><p>Log out</p>",
                position: 'right bottom'
              },
              { 
                intro: "<div class='intro_title'>That's It!</div>Please use the contact form if you have any questions, problems or suggestions.",
                tooltipClass: 'intro_start'
              },
              
            ],
            showStepNumbers: false,
            overlayOpacity: 6,
          });
          intro.onchange(function(ele) {  
  //alert($(ele).attr('id'));
});

          intro.start();
      }
    </script>