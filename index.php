<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
<script>
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
</script>
<script>
var isChromium = window.chrome,
    vendorName = window.navigator.vendor,
    isOpera = window.navigator.userAgent.indexOf("OPR") > -1,
    isIEedge = window.navigator.userAgent.indexOf("Edge") > -1;
if(isChromium !== null && isChromium !== undefined && vendorName === "Google Inc." && isOpera == false && isIEedge == false) {
   // 
} else { 
   alert("*Use only 'Google Chrome' to optimize site features.*");// not Google chrome
	
	window.location = "https://www.google.com/chrome/";
}
</script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><font color="blue"><a href ="https://web.facebook.com/camia2007?_rdc=1&_rdr">Please Follow Us on Facebook Page!</a></font></h4>
            </div>
            <div class="modal-body">
                <p></p>
                <form>
                   <a href ="https://web.facebook.com/camia2007?_rdc=1&_rdr"><img src="admin/images/fbpage.jpg" alt="FB Page"></a>
                </form>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="6ryK-tIg_2bJN3qdY9jaBLolw-dnTtrbp63dAnPyO2o" />
  <title>Login - <?php include('admin/dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <link rel = "shortcut icon" href = "admin/images/CAMIA.png">
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">

  
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition login-page" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="" oncontextmenu="return false"
  style="background:url(admin/images/camiawall.jpg) no-repeat center center fixed;
		-webkit-background-size: cover !important;
		-moz-background-size: cover !important;
		-o-background-size: cover !important;
		background-size: cover !important;
	"
  
  >
  <br>
  <style>
		table {
		  border-collapse: collapse;
		  border-spacing: 0;
		  width: 100%;
		  border: 1px solid #ddd;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}
		img {
		  width: 100%;
		  height: auto;
		}
	</style>
	<div class="col-md-5" style="overflow-x:auto;">
      <label><font color="white" size="2" style="Italic">eCaMIA V3.0</font></label>
	  <script src="admin/dist/js/date_time.js"></script>   
		<b><font color ="white"><span id="date_time" class="pull-right"></span></font></b>
		<script type="text/javascript">window.onload = date_time('date_time');</script>
		<div class="login-box-body">
		
			<form action="login.php" method="post">
			<font size="2" face="Courier New" >
			<table style="overflow-x:auto;"> 
					<tr> 
						<img src="admin/images/CAMIALogo.png" alt="CaMIA LOGO">
						
					</tr>
				
					
			</table>
			</font>
			<br><br></ hr>
			

			<div class="form-group has-feedback">
				<label><font color="green" face="Arial Narrow" size="3">System Name</font></label>
				<select type="text" class="form-control" name="systemnamelabel" required >
					<option></option>
					<option value="GCLI">GROUP CREDIT LIFE INSURANCE (GCLI)</option>
					<option value="TRAVEL">TRAVEL INSURANCE PORTAL (TrIP)</option>
					<option value="MARK">CAMIA DAILY INSURANCE ONLINE (CDIO)</option>
					<option value="MIC">MICROINSURANCE COORDINATOR SYSTEM (MICS)</option>
					<option value="CTPL" disabled>CUMPOLSARY THIRD PARTY LIABILITY(CTPL)</option>
					<option value="PHILCARE">PHILCARE</option>
					<option value="FBINQUIRY">FB INQUIRY - (ADMIN VIEW)</option>
					<option value="MBACOOR">MBA COORDINATOR</option>
					<option value="VUL">VARIABLE UNIT LINK (VUL)</option>
					<option value="BAP">DAKILA</option>
				</select>
				<span class="glyphicon glyphicon-people form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<label><font color="green" face="Arial Narrow" size="3">Username</font></label>
				<input type="text" class="form-control" placeholder="Username" name="username" required>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
			  <label><font color="green" face="Arial Narrow" size="3">Password</font></label>
				<input type="password" class="form-control" placeholder="Password" name="password" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
			<div class="col-xs-6 pull-right">
			  <button type="reset" class="btn btn-block btn-flat">Clear</button>
            </div><!-- /.col -->
			<div class="col-xs-6 pull-right">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" default>Sign In</button>
            </div><!-- /.col -->
        </div><br>
			<center>
			<table>
			<tr>
				<th>
				<center><img src="admin/images/tagline.png" alt="CaMIA LOGO" style="width:100%;height:50%;"></center>
				</th>	
			</tr>
			</table>

			</center>
        </form>
		
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box --><br>
	
	
<!-- jQuery 2.1.4 -->
    <script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/dist/js/demo.js"></script>
  </body>
  
  </head>
</html>
