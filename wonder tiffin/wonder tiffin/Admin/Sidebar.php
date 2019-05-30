<!doctype php>
<php lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="DCS_GNU" content="IE=edge,chrome=1" />

	<title>Sidebar | Admin | Wonder Tiffin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap book core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<style>
	@keyframes BackgroundGradient{
		
							0%{
								background-position:0% 50%;
							}
							50%{
								background-position:100% 50%;
							}
							100%{
								background-position:0% 50%;
							}
	}
	</style>
</head>
<body>
  <div class="sidebar" data-color="" data-image="assets/img/">

  <!--


      Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
      Tip 2: you can also add an image using data-image tag

  -->

    <div class="sidebar-wrapper" style="background:linear-gradient(132deg,	#4F86F7,#CD607E,#0066FF);
																background-size:400% 400%;
																animation:BackgroundGradient 5s ease infinite; height:70px;">
          <div class="logo">
              <a href="index.php" class="simple-text">
                  <b>Wonder tiffin - ADMIN</b>
              </a>
          </div>

          <ul class="nav">
              <li>
                  <a href="index.php">
                      <i class="pe-7s-graph"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <li>
                  <a href="user.php">
                      <i class="pe-7s-users"></i>
                      <p>User Management</p>
                  </a>
              </li>
			  <li>
                  <a href="chef_info.php">
                      <i class="pe-7s-users"></i>
                      <p>Chef Management</p>
                  </a>
             </li>
			 <li>
                  <a href="menu.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Menu Management</p>
                  </a>
              </li>
            
              <li>
                  <a href="upload.php">
                      <i class="pe-7s-notebook"></i>
                      <p>Upload Menu Management</p>
                  </a>
              </li>
				<li>
                  <a href="category.php">
                      <i class="pe-7s-network"></i>
                      <p>Category Management</p>
                  </a>
              </li>
			 
              <li>
					<a href="order_manage.php">
                      <i class="pe-7s-shopbag"></i>
                      <p>Order Management</p>
                  </a>
              </li>
			       <li>
                  <a href="feedback.php">
                      <i class="pe-7s-like2"></i>
                      <p>Feedback</p>
                  </a>
             </li>
            
						
          </ul>
    </div>
  </div>
</body>
</html>
								