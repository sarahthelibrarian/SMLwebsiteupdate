<?php require_once( "SNIPPETS/HEADER.php" ); ?>
<div class="container" style="margin-top:30px">
  <main id="maincontent">
  <div class="row" style = "margin-bottom: 5%;">
    <div class="col-sm-3 column-2">
      <h3>Quick Links</h3>
      <div class="btn-group-vertical">
        <a class="btn btn-custom" href="curbsidepickup.php" role="button">Curbside Pickup</a>
        <a class="btn btn-custom" href="#" role="button">Library Appointment</a>
        <a class="btn btn-custom" href="https://mvlc.ent.sirsi.net/client/en_US/northandover" role="button">Online Catalog</a>
          <a class="btn btn-custom" href="https://www.surveymonkey.com/r/53XZ5HW" role="button">Reader Request Form</a>
        <a class="btn btn-custom" href="#" role="button">E-Library</a>
        <a class="btn btn-custom" href="#" role="button">Library Cards</a>
        <a class="btn btn-custom" href="https://stevensmemlib.libguides.com/employmentsupport/" role="button">Employment Support Page</a>
      </div>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-6 column-1">
      <h3>Latest News</h3>
      <div class="sr-only">
        Below here is a carousel of images. If you want to cycle through the images of the carousel for their alternative text,
        use the left and right arrow keys.
        </div>

      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators my-4">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <a href="#" target="_blank">
            <img src="weeklyfeature.png" alt="weekly feature: tumblebook library" width="1100" height="500">
          </a>
          </div>
          <div class="carousel-item">
            <a href="#" target="_blank">
            <img src="fallingleaves.png" alt="falling leaves contest information" width="1100" height="500">
          </a>
          </div>
          <div class="carousel-item">
            <a href="#" target="_blank">
            <img src="digitaldisplay.png" alt="digital book display flyer" width="1100" height="500">
          </a>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
    <div class="col-sm-3 column-1">
      <h3>Curbside Pickup</h3>
      <figure>
        <a href ="curbsidepickup.php">
        <img onmouseover= 'changeCurbside("appoint.png");' onmouseout = "changeCurbside('curbside.png');" src="curbside.png" alt="Make curbside pickup appointment here!" id = "curbside" style="width:100%">
      </a>
      </figure>
    </div>
</div>
<div class="row">
  <div class="col-sm-3 column-2">
    <div class="business-hours">
      <h3 class="title">Hours</h3>
      <ul class="list-unstyled opening-hours">
        <li>Sunday <span class="pull-right">Closed</span></li>
        <li>Monday <span class="pull-right">10:00 am - 9:00pm</span></li>
        <li>Tuesday <span class="pull-right">10:00 am - 9:00pm</span></li>
        <li>Wednesday <span class="pull-right">10:00 am - 9:00pm</span></li>
        <li>Thursday <span class="pull-right">10:00 am - 9:00pm</span></li>
        <li>Friday <span class="pull-right">10:00 am - 6:00pm</span></li>
        <li>Saturday <span class="pull-right">10:00 am - 1:00pm</span></li>
      </ul>
    </div>
  </div>
  <div class="col-sm-3 column-1">
    <h3>Children's Room</h3>
    <figure>
      <a href ="#" target ="_blank">
      <img onmouseover= 'changeChildrens("comein.png");' onmouseout = "changeChildrens('childrensroom.png');" src="childrensroom.png" alt="Virtual Children's Room" id = "Children" style="width:100%">
    </a>
    </figure>
  </div>
  <div class="col-sm-3 column-1">
    <h3>Teen Room</h3>
    <figure>
      <a href ="#" target ="_blank">
      <img onmouseover= 'changeTeen("comein.png");' onmouseout = "changeTeen('teenroom.png');" src="teenroom.png" alt="Virtual Teen Room" id = "teen" style="width:100%">
      </a>
    </figure>
  </div>
  <div class="col-sm-3 column-2">
    <h3>Events</h3>
    <div class="btn-group-vertical">
      <a class="btn btn-custom" href="http://www.eventkeeper.com/code/events.cfm?curOrg=STEVENSML&curKey1=Adult" role="button">Adult Events</a>
      <a class="btn btn-custom" href="http://www.eventkeeper.com/code/events.cfm?curOrg=STEVENSML&curKey1=Teen" role="button">Teen Events</a>
      <a class="btn btn-custom" href="http://www.eventkeeper.com/code/events.cfm?curOrg=STEVENSML&curKey1=Children" role="button">Children's Events</a>
      <a class="btn btn-custom" href="https://libraries.state.ma.us/calendar" role="button">State-Wide Calendar</a>
    </div>
</div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>
