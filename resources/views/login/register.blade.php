<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIPUTNAS | Register</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="{{ asset('AdminLte/plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('AdminLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('AdminLte/dist/css/adminlte.min.css?v=3.2.0') }}">
	<script nonce="e2eac535-3bea-4531-9d71-5e8f6b0527c9">
		(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);
	</script>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<h1><b>SIPUTNAS</b></h1>
			<h3>Sistem Informasi Pembuatan Surat Dinas</h3>
			<h3>BPS Kota Madiun</h3>
		</div>

		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Register</p>
				<form action="{{ route('postlogin') }}" method="post">
					{{ @csrf_field() }}
					<div class="input-group mb-3">
						<input type="username" class="form-control" name="username" placeholder="Username">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
                    <div class="input-group mb-3">
						<input type="name" class="form-control" name="name" placeholder="Name">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
                    <div class="input-group mb-3">
						<input type="email" class="form-control" name="email" placeholder="Email Address">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
                    <div class="input-group mb-3">
						<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="col-4" >
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
				</form>

				<p class="mb-0">
					<a href="register.html" class="text-center">Log In</a>
				</p>
			</div>
		</div>
	</div>
	<script src="{{ asset('AdminLte/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('AdminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('AdminLte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>
</html>