<!DOCTYPE html>
<html>
<head>
	<title>Sorae Sushi Sake Lounge – The best sushi in town</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin-assets/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admin-theme/css/style.css')}}" rel="stylesheet">
	<style type="text/css">
		body {
		    font-family: "Lato", sans-serif;
		}
		.main-head{
		    height: 150px;
		    background: #FFF;
		}
		.sidenav {
		    height: 100%;
		    background-color: #4e73df;
			/*background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);*/
            background-image: url({{asset('admin-assets/images/bg_1.jpg')}});
			background-size: cover;
		    overflow-x: hidden;
		    padding-top: 20px;
		}
		.main {
		    padding: 0px 10px;
		}
		@media screen and (max-height: 450px) {
		    .sidenav {padding-top: 15px;}
		}
		@media screen and (max-width: 450px) {
		    .login-form{
		        margin-top: 10%;
		    }
		    .register-form{
		        margin-top: 10%;
		    }
		}
		@media screen and (min-width: 768px){
		    .main{
		        margin-left: 40%; 
		    }
		    .sidenav{
		        width: 40%;
		        position: fixed;
		        z-index: 1;
		        top: 0;
		        left: 0;
		    }
		    .login-form{
		        margin-top: 5%;
		        margin-left: 25%;
		    }
		    .register-form{
		        margin-top: 20%;
		    }
		}
		.login-main-text{
		    margin-top: 10%;
		    padding: 40px;
		    color: #fff;
            background-color: #727cf5;
            height: 145px;
		}
		.login-main-text h2, h3{
		    font-weight: 300;
		}
		.btn-black{
		    background-color: #4e73df !important;
		    color: #fff;
		}
	</style>
</head>
<body>
<div class="sidenav">
     <div class="login-main-text">
        <h2>Soraesushi</h2>
         <h3>Login Page</h3>
        <p>Login or register from here to access.</p>
     </div>
</div>
<div class="main">
	<div class="login-form col-6">
   		<div class="card card-login">
            <div class="card-header">
                <div class="nav-header position-relative  text-center w-100">
                    <div class="brand-logo">
                        <a href="{{url('admin/')}}">
                            <span class="brand-title"><b>Soraesushi</b></span>
                        </a>
                    </div>
					<div class="text-center my-3">
                        <i class="fas fa-utensils fa-3x"></i>
                    </div>
                        <div class="card-body">
                            <form method="post" action="{{route('handleRegister')}}">
                            	@csrf
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control rounded-0 bg-transparent" placeholder="Username" name="username">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="email" class="form-control rounded-0 bg-transparent" placeholder="Email" name="email">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control rounded-0 bg-transparent" placeholder="Password" name="password">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control rounded-0 bg-transparent" placeholder="Confirm password" name="confirm_password">
                                </div>
                                <div class="form-group mb-4">
                                    <select class="form-control rounded-0 bg-transparent" name="role">
                                    	<option hidden>Cấp Quyền</option>
                                    	<option value="2">Nhân Viên</option>
                                    	<option value="1">Quản Lý</option>
                                    	<option value="0">Quản Lý Tổng</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn-primary btn-lg btn-block border-0" name="submit" value="Register">Register</button>
                                <br>
                            </form>
	                            <button onclick="location.href='./'" type="button" class="btn-primary btn-lg btn-block border-0">Back</button>
	                            <br>
                            <?php $value = session()->get('message'); echo $value; ?>
                        </div>
                </div>
            </div>
   		</div>
	</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
<?php
    if(session()->has('message')) {
        session()->forget('message');
    }
?>