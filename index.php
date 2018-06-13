<style type="text/css">
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}

div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #FFB354;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #FFB354;
  background-image: #FFB354;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #FFB354;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
	<div class="container">
		<div class="row" style="color: #FFB354">
		 <div class="col-sm-6">
		 		<label>Username :</label>
		 		<input type="text" name="name">
		 </div>

		 <div class="col-sm-6">
		 		<label>Password :</label>
		 		<input type="text" name="name"></div>
	   </div>
	</div>
<div class="container">
    <div class="row">
    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
                  <h4 class="glyphicon glyphicon-Home" style="color:#FFB354;background-color: black"></h4><br/>Home
                </a>
                <a href="#" class="list-group-item text-center" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
                  <h4 class="glyphicon glyphicon-User" style="color:#FFB354"></h4><br/>Admin
                </a>
                
                <a href="#" class="list-group-item text-center" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
                  <h4 class="glyphicon glyphicon-list" style="color:#FFB354"></h4><br/>All Data
                </a>
                <a href="#" class="list-group-item text-center" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
                  <h4 class="glyphicon glyphicon-flag" style="color:#FFB354"></h4><br/>Winner
                </a>
                <a href="#" class="list-group-item text-center" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
                  <h4 class="glyphicon glyphicon-off" style="color:#FFB354"></h4><br/>User
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active" style="background-image: url('img.jpg'); background-repeat: no-repeat;background-size: 100% 100%;">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#FFB354"></h1>
                      <h2 style="margin-top: 0;color:#FFB354">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#FFB354">Flight Reservation</h3>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#FFB354"></h1>
                      <h2 style="margin-top: 0;color:#FFB354">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#FFB354">Train Reservation</h3>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#FFB354"></h1>
                      <h2 style="margin-top: 0;color:#FFB354">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#FFB354">Hotel Directory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#FFB354"></h1>
                      <h2 style="margin-top: 0;color:#FFB354">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#FFB354">Restaurant Diirectory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#FFB354"></h1>
                      <h2 style="margin-top: 0;color:#FFB354">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#FFB354">Credit Card</h3>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>

</body>

<script type="text/javascript">
	

	$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

</script>