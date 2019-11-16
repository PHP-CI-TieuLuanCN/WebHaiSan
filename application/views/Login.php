<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Đăng nhập</title>
<link rel="icon" type="image/png" href="<?php echo base_url()?>static/image/LOGO.ico"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/stylesheet.css" data-minify="1"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/sheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/styleDialog.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url()?>static/js/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn-search").click(function(){
        var id = $("#nameLogin").val().length;
        var pass= $("#passLogin").val().length;
        if (id == 0 || pass == 0) alert("Tên đăng nhập hoặc mật khẩu không được để trống");
    });
});
</script>
</head>
<body>
	
	<?php require_once('comp/Header.php')?>
	<div class="container" id="content">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
							<li itemprop="itemListElement"
								itemtype="http://schema.org/ListItem"><a itemprop="item"
								href="http://localhost:8080/Web_Ban_Sach/"> <span
									itemprop="name"> <i class="fa fa-home"></i> Trang chủ
								</span>
							</a> <span><i class="fa fa-angle-right"></i></span>
								<meta itemprop="position" content="1"></li>
							<li itemprop="itemListElement"
								itemtype="http://schema.org/ListItem"><a itemprop="item"
								href="Login"> <strong itemprop="name">Đăng nhập</strong>
							</a>
								<meta itemprop="position" content="3"></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-sm-12 col-xs-12 col-md-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="board">
									<h3>Khách hàng mới?</h3>
									<span> <strong>Tại sao không đăng kí thành
											viên?</strong>
									</span> <br> <span>Thành viên có thể trải nghiệm và được
										thông báo một cách sớm nhất những chương trình khuyến mãi có 1-0-2.</span> <br>
									<br> <a class="signup-window btn btn-primary" href="<?php echo base_url()?>sign-up.html" style="color: #eee !important;">Đăng ký ngay!</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="board">
									<h3>Đã có tài khoản</h3>
									<?php echo form_open('dang-nhap.html'); ?>
									<?php echo validation_errors(); ?>
									<?php 
										if (isset($error)	)
											echo '<p style="color: red;">'. $error .'</p>';
									?>
									<form action="#" method="POST">
										<div class="form-group">
											<label class="control-label" for="username">Tên đăng
												nhập</label> <input type="text" name="username" value=""
												placeholder="Username" id="username" class="form-control" max-length="30">
										</div>
										<div class="form-group">
											<label class="control-label" for="password">Mật khẩu</label>
											<input type="password" name="password" value=""
												maxlength="10" placeholder="Password" id="password"
												class="form-control">
										</div>
										<input type="submit" value="Đăng nhập" class="btn btn-primary"
											id="btn-search" style="width: max-content !important">
										<a class="forget-password" href="#form"><i class="fa fa-question-circle" id="QuenMK"></i></a>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div>
			<div class="dialog" id="form" style="width: 40%;">
				<div class="header">
					<div class="title">Quên mật khẩu</div>
						<a class="f-right close" href="#"><i
							class="fa fa-close"></i></a>
				</div>
				<ul class="content">
					<li class="item" style="height: 100px;">
						<span class="title">Tên đăng nhập</span>
						<div class="detail">
							<input id="username" type="text" autocomplete="on" name="username" placeholder="Name..." value="" />
						</div>
					</li>
					<li class="item">
						<button class="button submit-button" onclick="">Khôi phục</button>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php require_once('comp/Footer.php')?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('a.forget-password').click(function() {
				//lấy giá trị thuộc tính href - chính là phần tử "#login-box"
				var loginBox = $(this).attr('href');

				//cho hiện hộp đăng nhập trong 300ms
				$(loginBox).fadeIn(300);

				// thêm phần tử id="over" vào sau body
				$('body').append('<div id="over">');
				$('#over').fadeIn(300);

				return false;
			});

			// khi click đóng hộp thoại
			$(document).on('click', "a.close, #over, button.submit-button", function() {
				$('#over, .dialog').fadeOut(300, function() {
					$('#over').remove();
				});
				return false;
			});
		});
	</script>
</body>
</html>