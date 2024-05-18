<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
  	<title></title>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="../../../css/style.css">
	<style type="text/css">
		.small{
			color: #ff0000;
		}
	</style>
</head>
<body>
<div class="container right-panel-active">
			<!-- 登录 -->
			<div class="container__form container--signup" >
				<form class="form" method="post" action="member.php">
					<h2 class="form__title">登录</h2>
					<input type="text" placeholder="请输入用户名" class="input"  name="username" id="lu" />
                    <small class="small" id="lutext"></small>
					<input type="password" placeholder="请输入密码" class="input" name="passwd" id="lp"/>
					<small class="small" id="lptext"></small>
					<a href="forgot_form.php" class="link">忘记密码了?</a>
					<input class="btn" type="submit" value="登录">
				</form>
			</div>
			<!-- 注册 -->
			<div class="container__form container--signin" >
				<form method="post" action="register_new.php" class="form" id="form2">
					<h2 class="form__title">注册</h2>
					<input type="text" placeholder="请输入学号/工号" class="input"  name="username" id="ru" />
                    <small class="small" id="rutext"></small>
					<input type="password" placeholder="请输入密码" class="input" name="passwd" id="rp"/>
					<small class="small" id="rptext"></small>
                    <input type="password" placeholder="再次确认密码" class="input" name="passwd2" id="rp"/>
                    <small class="small" id="rptext"></small>
					<input type="text" placeholder="请输入邮箱" class="input" name="email"/>
					<small class="small" ></small>
					<input class="btn" type="submit" value="注册">
				</form>
			</div>

			<!-- Overlay -->
			<div class="container__overlay">
				<div class="overlay">
					<div class="overlay__panel overlay--left">
						<button class="btn" id="signIn">没有账号?注册一个!</button>
					</div>
					<div class="overlay__panel overlay--right">
						<button class="btn" id="signUp">已有账号?点击登录!</button>
					</div>
				</div>
			</div>
		</div>
  <script  src="../../../js/script.js"></script>

</body>
</html>
