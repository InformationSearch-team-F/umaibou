<?php
/**
 * 物品管理DB利用版
 * Created by IntelliJ IDEA.
 * User: reoh
 * Date: 2018/01/08
 * Time: 14:48
 */
$HOST="localhost";
$DBNAME="umaibou_db";
$USER="root";
$PASS="pass";


/**
 * テーブル名: items
 * id   name
 * 1    item1
 * 2    item2
 *
 */

// mysqliクラスのオブジェクトを作成
$mysqli = new mysqli($HOST,$USER,$PASS,$DBNAME);
if ($mysqli->connect_error) {    // connect_errorはPHP5.3.0以降で有効
    die("connect_error!!　　" .  $mysqli->connect_error);
}
// 文字化け防止
$mysqli->set_charset("utf8");
?>






<!DOCTYPE html>
<html lang="ja">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Umaibou-SYSTEM</title>
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>


<body class="body-wrapper">

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="dashboard.html">Dashboard</a>
							</li>
							<!--
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Pages <span><i class="fa fa-angle-down"></i></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="category.html">Category</a>
									<a class="dropdown-item" href="single.html">Single Page</a>
									<a class="dropdown-item" href="store-single.html">Store Single</a>
									<a class="dropdown-item" href="dashboard.html">Dashboard</a>
									<a class="dropdown-item" href="user-profile.html">User Profile</a>
									<a class="dropdown-item" href="submit-coupon.html">Submit Coupon</a>
									<a class="dropdown-item" href="blog.html">Blog</a>
									<a class="dropdown-item" href="single-blog.html">Single Post</a>
								</div>
							</li>-->
							<!--
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Listing <span><i class="fa fa-angle-down"></i></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>-->
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="index.html">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link add-button" href="#"><i class="fa fa-plus-circle"></i> Add Listing</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Let's revive the dead stocks in your Lab.</h1>
                    <p>Find new value for the dead stocks and recommend new usage to you.</p>
<!--					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href=""><i class="fa fa-bed"></i> Hotel</a></li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-grav"></i> Fitness</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-car"></i> Cars</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-cutlery"></i> Restaurants</a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fa fa-coffee"></i> Cafe</a>
							</li>
						</ul>
					</div>-->

				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="#">
						<div class="row">
							<!-- Store Search -->
							<div class="col-lg-30 col-md-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
									<!-- Search Button -->
									<button class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            New deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>New items</h2>
					<p>研究室に新しい備品が入荷しました。</p>
                </div>
			</div>
		</div>

		<div class="row">
			<!-- offer 01 -->
            <? //新着商品を取り出す
            // ？（パラメータマーカ）を用いたSELECT文のひな型をセット
            $sql = "SELECT id, name FROM items WHERE id > ? AND id < ?";
            // ステートメントハンドルを取得する
            if ($stmt = $mysqli->prepare($sql)) {
                $id1 = 2;    $id2 = 5;    // 次のbind_param()行と前後しても良い
                // 条件値をSQLにバインドする
                $stmt->bind_param("ii", $id1, $id2); //"ii"="int int"
                // プリペアドステートメントを実行
                $stmt->execute();
                // 取得結果を変数にバインドする
                $stmt->bind_result($id, $name);
                // 値を取得
                while ($stmt->fetch()) {
                    $html=<<<EOT
<div class="col-sm-12 col-lg-3">
				<!-- product card -->
                <div class="product-item bg-light">
                    <div class="card" style="min-height:40rem;">>
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="">
                                <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="">$id,$name</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                </li>
                            </ul>
                            <p class="card-text">利用可能です。</p>
                            <div class="product-ratings">
                                <ul class="list-inline">
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
EOT;

                    echo $html;



                }
                // ステートメントを閉じる
                $stmt->close();
            }
            ?>

		</div>


	</div>
</section>








<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Popular items</h2>
                    <p>研究室内の多くの人たちが使用しています。あなたも使ってみませんか。</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <? //人気商品を取り出す
            // ？（パラメータマーカ）を用いたSELECT文のひな型をセット
            $sql = "SELECT id, name FROM items WHERE id > ? AND id < ?";
            // ステートメントハンドルを取得する
            if ($stmt = $mysqli->prepare($sql)) {
                $id1 = 2;    $id2 = 5;    // 次のbind_param()行と前後しても良い
                // 条件値をSQLにバインドする
                $stmt->bind_param("ii", $id1, $id2); //"ii"="int int"
                // プリペアドステートメントを実行
                $stmt->execute();
                // 取得結果を変数にバインドする
                $stmt->bind_result($id, $name);
                // 値を取得
                while ($stmt->fetch()) {
                    $html=<<<EOT
<div class="col-sm-12 col-lg-3">
				<!-- product card -->
                <div class="product-item bg-light">
                    <div class="card" style="min-height:40rem;">>
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="">
                                <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="">$id,$name</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-folder-open-o"></i>Electronics</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i>26th December</a>
                                </li>
                            </ul>
                            <p class="card-text">利用可能です。</p>
                            <div class="product-ratings">
                                <ul class="list-inline">
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
EOT;

                    echo $html;



                }
                // ステートメントを閉じる
                $stmt->close();
            }
            ?>

        </div>
    </div>
</section>


<!--============================
=            Footer            =
=============================-->


<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
              <p>情報検索特論</p>
              <p>Copyright © 2017. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js/scripts.js"></script>

</body>

</html>


<?
// DB接続を閉じる
$mysqli->close();
?>
