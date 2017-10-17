<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎你</h3>
						<form action=".../controllers/UserController.php" name="f" method="post">
							<div class="input_outer">
								<span class="u_user"></span>
								<input id="studentNumber" name="logname" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入学号">
							</div>
							<div class="mb2"><a id="login" class="act-but submit" href="http://120.27.122.238/NJFUTest/basic/web/index.php?r=user/user&id=" style="color: #FFFFFF" onclick="click()">查询</a></div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/TweenLite.min.js"></script>
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/EasePack.min.js"></script>
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/rAF.js"></script>
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/demo-1.js"></script>
		<script type="text/javascript">
			document.getElementById("login").onclick=function(){
				document.getElementById("login").href+=document.getElementById("studentNumber").value;
		}//查询按钮的点击事件
		</script>
	</body>
</html>