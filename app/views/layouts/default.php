<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DietCake Demo</title>

<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
	padding-top: 60px;
}
</style>
</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="<?php eh(url('/')) ?>">DietCake Demo</a>
				<div style="width: 40%; float: right;">
					<?php if(isset($_SESSION['userinfo'])): ?>
					<a class="brand">Hi <?php echo $_SESSION['userinfo']['username']; ?> !</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="brand" style="color:  blue;" href="/auth/logout">Logout</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

      <?php echo $_content_?>

    </div>

	<script>
    console.log(<?php eh(round(microtime(true) - TIME_START, 3)) ?> + 'sec');
    </script>

</body>
</html>
