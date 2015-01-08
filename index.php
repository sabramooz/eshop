<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eshop</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/custom.css">
    <link rel="stylesheet" type="text/css" href="./css/slider.css">
    <link rel="stylesheet" type="text/css" href="./css/lightbox.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./js/jquery.min.js"></script>

  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">eshop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
      <li><a href="?page=login">ورود</a></li>
        <li><a href="#">پرسش و پاسخ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span> محصولات</a>
          <ul class="dropdown-menu" role="menu">
            <li class="text-right"><a href="#">محصول 1</a></li>
            <li class="text-right"><a href="#">محصول 2</a></li>
            <li class="text-right"><a href="#">محصول 3</a></li>
            <li class="divider"></li>
            <li class="text-right"><a href="#">مشاهده همه</a></li>
          </ul>
        </li>
        <li><a href="#">ارتباط با ما</a></li>
        <li><a href="#">دباره ما</a></li>
        <li><a href="?page=main">صفحه اصلی</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- /nav bar end -->
<div class="container-fluid">


<?php
	if(isset($_GET['page'])){
		include 'include/'.$_GET['page'].'.php';
		}else{
			include 'include/main.php';
			}

?>


<div class="row">
	<div class="col-sm-12" style="background-color:rgba(102,102,102,1);height:400px">
    	Footer
    </div>
</div>
</div>
   
   
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/lightbox.min.js"></script>
    <script src="./js/jssor.js"></script>
	<script src="./js/jssor.slider.min.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>