<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Yêu Sách Bookstore</title>
<link rel="icon" type="image/png" href="<?php echo base_url()?>static/image/LOGO.ico" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/stylesheet.css"
	data-minify="1" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/sheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/styleDialog.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/styleHome.css">
<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat"
	rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url()?>static/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>static/js/Cookies.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body class="common-home">

	<!-- Phần header cho trang Web -->
	<?php require_once('comp/Header.php')?>

	<div class="container-fluid" id="content">
		<section>
			<div clas="container"
				style="width: 80%; transform: translateX(11.5%); margin: 1.5em 0em;">
				<div class="row khung">
					<div class="col-xs-12">
						<div id="my-carousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#my-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#my-carousel" data-slide-to="1" class=""></li>
								<li data-target="#my-carousel" data-slide-to="2" class=""></li>
							</ol>
							<div class="carousel-inner">
								<?php
									if ($bangTin !== null && sizeof($bangTin) > 0) {
										echo '<div class="item active"><a onclick="openNewTab(' . "'UserCT-BanTin?id="
												. $bangTin[0]["MaTin"] . "')" .'"> <img src="' . base_url() . 'static/image/banner/' . $bangTin[0]["Anh"]
												. '" style="width: 100%; background-repeat: no-repeat; cursor:pointer;"> </a></div>';
										for ($i = 1; $i < sizeof($bangTin); $i++) {
											echo '<div class="item"><a onclick="openNewTab(' . "'UserCT-BanTin?id=" . $bangTin[$i]["MaTin"]
													. "')" . '"> <img src="' . base_url() . 'static/image/banner/' . $bangTin[$i]["Anh"]
													. '" style="width: 100%; background-repeat: no-repeat; cursor:pointer;"></a></div>';
										}
									}
								?>
								<a class="left carousel-control" href="#my-carousel"
									data-slide="prev"> <span
									class="glyphicon glyphicon-chevron-left"></span></a> <a
									class="right carousel-control" href="#my-carousel"
									data-slide="next"> <span
									class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<article class="container">
			<div class="bookshelf" style="margin: 1em 1em 1em 0em;">
				<div class="row descrip">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding-left: 0;">
						<div class="title">Danh mục</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6"></div>
				</div>
				<ul class="row content listView">
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/kinh-nghiem-song-00001.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00001.jpeg"></img>
							<div class="detail">Kinh Nghiệm Sống</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/sach-van-hoc-00002.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00002.jpeg"></img>
							<div class="detail">Sách Văn Học</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/sach-kinh-te-00004.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00004.jpeg"></img>
							<div class="detail">Sách Kinh Tế</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/tieu-thuyet-00005.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00005.jpeg"></img>
							<div class="detail">Tiểu Thuyết</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/trinh-tham-00007.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00007.jpeg"></img>
							<div class="detail">Trinh Thám</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/van-hoc-nuoc-ngoai-00009.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00009.jpeg"></img>
							<div class="detail">Văn học nước ngoài</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/truyen-tranh-00010.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00010.jpeg"></img>
							<div class="detail">Truyện tranh</div>
						</div>
					</li>
					<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 listView-item">
						<div class="thumbnail" onclick="gotoPage('<?php echo base_url()?>category/khoa-hoc-vien-tuong-00013.html')">
							<img src="<?php echo base_url()?>static/image/categories/type00013.jpeg"></img>
							<div class="detail">Khoa Học Viễn Tưởng</div>
						</div>
					</li>
				</ul>
			</div>
		</article>
		<article class="container">
			<div class="bookshelf" style="margin: 1em 1em 1em 0em;">
				<div class="row descrip">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding-left: 0;">
						<div class="title">Sách yêu thích</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
						<div class="view-detail">
							<a href="<?php echo base_url()?>products/sach-yeu-thich-00001.html">Xem chi tiết >></a>
						</div>
					</div>
				</div>
				<div class="row content">
					<?php
						if ($likeProducts !== null && sizeof($likeProducts) > 0) {
							for ($i = 0; $i < sizeof($likeProducts); $i++) {
								$product = $likeProducts[$i];
								echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">";
								echo "<div class=\"book\" id=\"" . $product["MaSach"] . "\"><div class=\"icon-bar vertical\">";
								echo "<ul><li><div class=\"button-modify\">";
								echo "<div class=\"button-arc forest right\" onclick=\"gotoPage('ViewBook?id=" . $product["MaSach"] . "')\">";
								echo "<i class=\"fa fa-info-circle\" onclick=\"gotoPage('ViewBook?id=" . $product["MaSach"] . "')\"></i>";
								echo "<div class=\"content content-right\"><span>Thông tin chi tiết</span></div></div></div></li>";
								echo "<li><div class=\"button-modify\"><div class=\"button-arc cool right\" style=\"transform: translateY(150%)\">";
								echo "<i class=\"fa fa-cart-plus\" onclick=\"addBookToCart('" . $product["MaSach"] . "', 1)\"></i>";
								echo "<div class=\"content content-right\"><span>Cho vào giỏ hàng</span></div></div></div></li>";
								echo "<li><div class=\"button-modify\"><div class=\"button-arc danger right\" style=\"transform: translateY(300%)\">";
								echo "<i class=\"fa fa-money\" onclick=\"buyNow('" . $product["MaSach"] . "', 1)\"></i>";
								echo "<div class=\"content content-right\"><span>Mua ngay</span></div></div></div></li></ul></div>";
								echo "<div class=\"thumbnail\">";
								echo "<img onclick=\"gotoPage('ViewBook?id=" . $product["MaSach"] . "')\" style=\"cursor:pointer\" alt=\"" . $product["MaSach"] . "\" src=\"". base_url() . "static/image/" . $product["DuongDan"] . "\"></div>";
								echo "<div class=\"info-book\"><div class=\"title\">" . $product["TenSach"] . "</div>";
								echo "<div class=\"price\">" . $product["GiaBan"] . "</div></div></div></div>";
							}
						}
					?>
				</div>
			</div>

			<div class="bookshelf" style="margin: 1em 1em 1em 0em;">
				<div class="row descrip">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="padding-left: 0;">
						<div class="title">Sách bán chạy</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
						<div class="view-detail">
							<a href="<?php echo base_url()?>products/sach-ban-chay-00002.html">Xem chi tiết >></a>
						</div>
					</div>
				</div>
				<div class="row content">
					<?php
						if ($sellingProducts !== null && sizeof($sellingProducts) > 0) {
							for ($i = 0; $i < sizeof($sellingProducts); $i++) {
								$product = $sellingProducts[$i];
								echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">";
								echo "<div class=\"book\" id=\"" . $product["MaSach"] . "\"><div class=\"icon-bar vertical\">";
								echo "<ul><li><div class=\"button-modify\">";
								echo "<div class=\"button-arc forest right\" onclick=\"gotoPage('ViewBook?id=" . $product["MaSach"] . "')\">";
								echo "<i class=\"fa fa-info-circle\" onclick=\"gotoPage('ViewBook?id=" . $product["MaSach"] . "')\"></i>";
								echo "<div class=\"content content-right\"><span>Thông tin chi tiết</span></div></div></div></li>";
								echo "<li><div class=\"button-modify\"><div class=\"button-arc cool right\" style=\"transform: translateY(150%)\">";
								echo "<i class=\"fa fa-cart-plus\" onclick=\"addBookToCart('" . $product["MaSach"] . "', 1)\"></i>";
								echo "<div class=\"content content-right\"><span>Cho vào giỏ hàng</span></div></div></div></li>";
								echo "<li><div class=\"button-modify\"><div class=\"button-arc danger right\" style=\"transform: translateY(300%)\">";
								echo "<i class=\"fa fa-money\" onclick=\"buyNow('" . $product["MaSach"] . "', 1)\"></i>";
								echo "<div class=\"content content-right\"><span>Mua ngay</span></div></div></div></li></ul></div>";
								echo "<div class=\"thumbnail\">";
								echo "<img onclick=\"gotoPage('ViewBook?id=" . $product["MaSach"] . "')\" style=\"cursor:pointer\" alt=\"" . $product["MaSach"] . "\" src=\"". base_url() . "static/image/" . $product["DuongDan"] . "\"></div>";
								echo "<div class=\"info-book\"><div class=\"title\">" . $product["TenSach"] . "</div>";
								echo "<div class=\"price\">" . $product["GiaBan"] . "</div></div></div></div>";
							}
						}
					?>
				</div>
			</div>
		</article>
	</div>

	<div>
		<div class="dialog" id="confirm-form" style="width: 60%;">
			<div class="header">
				<div class="title">Thanh toán</div>
				<a class="f-right close" href="#"><i class="fa fa-close"></i></a>
			</div>
			<ul class="content">
				<li class="item" style="height: 100px;"><span class="title">Tên
						người mua</span>
					<div class="detail">
						<input id="username" type="text" autocomplete="on" name="username"
							placeholder="Name..." value="" />
					</div></li>
				<li class="item" style="height: 100px;"><span class="title">Địa
						chỉ giao hàng</span>
					<div class="detail">
						<input id="address" type="text" name="address"
							placeholder="Address..." value="" />
					</div></li>
				<li class="item" style="height: 100px;"><span class="title">Số
						điện thoại</span>
					<div class="detail">
						<input id="phone" type="text" name="phone" placeholder="Phone..."
							value="" />
					</div></li>
				<li class="item">
					<button class="button submit-button" onclick="addCart()">Đặt
						hàng</button>
				</li>
			</ul>
		</div>
	</div>

	<!-- Phần footer cho trang Web -->
	<!-- <%@ include file="../comp/Footer.jsp"%> -->
	<?php require_once('comp/Footer.php')?>

	<script type="text/javascript">
		$(document).ready(function() {
			// khi click đóng hộp thoại
			$(document).on('click', "a.close, #over", function() {
				$('#over, .dialog').fadeOut(300, function() {
					$('#over').remove();
					var url = location.href;
					if (url.indexOf('ViewCart') == -1) {
						deleteAllCookie();

						var button = $('.cart-count')[0];
						$(button).find('#number').text(0);
					}
				});
				return false;
			});

			$(document).on('click', "button.submit-button", function() {
				$('#over, .dialog').fadeOut(300, function() {
					$('#over').remove();
					deleteAllCookie();
				});
				return false;
			});
		});

		function openNewTab(url) {
			window.open(url, '_blank');
		}
		function changeStateOrder(maHD, bool) {
			if (bool) {
				var url = window.location.href;
				$(".QLDH_tbDonHang").load(url + " #table", {
					maHD : maHD
				});
			}
		}
		function reloadKH() {
			var URL = window.location.href;
			var searchU = document.getElementById("btnSearch").value;
			document.getElementById("btnSearch").value = searchU;

		}
		function refreshPage() {
			window.location.href = window.location.href
		}
	</script>
</body>
</html>