<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Thumbnail Carousel with Content</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	background: #ebebeb;
	font-family: "Open Sans", sans-serif;
}
.carousel {
	margin: 30px auto 60px;
	padding: 0 80px;
}
.carousel .carousel-item {
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item h4 {
	font-family: 'Varela Round', sans-serif;
  font-size: 16px;
}
.carousel .carousel-item img {
	max-width: 100%;
	display: inline-block;
}
.carousel .carousel-item .btn {
	border-radius: 0;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	border: none;
	background: #a177ff;
	padding: 6px 15px;
	margin-top: 5px;
}
.carousel .carousel-item .btn:hover {
	background: #8c5bff;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
  width: 220px;
  height: 320px;
	margin: 5px;
	text-align: left;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0,0,0,0.1);   
}
.carousel .thumb-content {
	padding: 15px;
	font-size: 13px;
}
.carousel .thumb-content h5 {
  opacity: 0.3;
  font-size: 10px;
}.carousel .thumb-content p {
  opacity: 0.6;
  font-size: 10px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 44px;
	background: none;	
	margin: auto 0;
	border-radius: 50%;
	border: 3px solid rgba(0, 0, 0, 0.8);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	border-radius: 50%;
	margin: 4px;
	border: none;
}
.carousel-indicators li {	
	background: #ababab;
}
.carousel-indicators li.active {	
	background: #555;
}
</style>
</head>
<body>
<?php
  include 'header.php';
?>
<div class="container-xl">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
					<!-- Wrapper for carousel items -->

    
			<div class="carousel-inner">
				<div class="carousel-item active">
        <h3>Chính trị</h3>
					<div class="row">
          <?php
          //php
            include '../../models/Database.php';
            $sql = "SELECT id, title, created_at, content FROM news WHERE category_id='1' LIMIT 3";
            $result = $conection->query($sql);
            while($row = $result->fetch_assoc()){
              echo '
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../img/1369307.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>' . $row["title"] . '</h4>
                  <h5>' . $row["created_at"] . '</h5>
									<p>'. substr($row["content"], 0, 20) .'</p>
									<a href="#viewDetail" class="btn btn-primary">Xem thêm <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
            ';}?>
					</div>
				</div>
		  </div>
      <!-- het hang 1 -->
      <div class="carousel-inner">
				<div class="carousel-item active">
        <h3>Kinh tế</h3>
					<div class="row">
          <?php
          //php
            include '../../models/Database.php';
            $sql = "SELECT id, title, created_at, content FROM news WHERE category_id='2' LIMIT 3";
            $result = $conection->query($sql);
            while($row = $result->fetch_assoc()){
              echo '
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../img/1369307.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>' . $row["title"] . '</h4>
                  <h5>' . $row["created_at"] . '</h5>
									<p>'. substr($row["content"], 0, 20) .'</p>
									<a href= "../news/detail.php" method="POST" class="btn btn-primary">Xem thêm <i class="fa fa-angle-right"></i></a>
								</div>						
							</div>
						</div>
            ';}?>
					</div>
				</div>
		  </div>
			<!-- Carousel controls -->
      </div>
		</div>
	</div>
</div>

</div>
</body>
</html>