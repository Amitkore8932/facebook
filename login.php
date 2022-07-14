<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    

    <!-- Bootstrap CSS -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
	<!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
    <!-- Style -->
    <link rel="stylesheet" href="../build/css/login_style.css?v2">
	<link href="../build/css/mbg.css?v3" rel="stylesheet">
	
    <title>MBG Timesheet Portal</title>
	
	<script>
		function doLogin() {
			location.href="dashboard.php";
		}
	</script>
	
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-1" style="background-image: url('images/banner.webp');"></div>
    <div class="contents order-2 order-md-2">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 center" >
            <div class="align-items-center" style="text-align:center">
				<img src="images/mbg_logo.svg" width="200px" />
				
			</div>
            
            
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="email@mbgcorp.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password">
              </div>
              
			  

				<button class="btn  btn-sm right mbg-background-color " style="width:100%; " onclick="doLogin();"><i class="fa fa-lock"></i> Login</button>

            
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

  </body>
</html>