<?php if(isset($_SESSION['error_message'])): ?>
<div class="alert alert-danger" role="alert">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<span class="sr-only">Error:</span>
	<?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
</div>
<?php endif; ?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<form name="form1" method="post" action="/auth/loginDo">
			<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1"
					bgcolor="#FFFFFF">
					<tr>
						<td colspan="3"><strong>Member Login </strong></td>
					</tr>
					<tr>
						<td width="78">Username</td>
						<td width="6">:</td>
						<td width="294"><input name="username" type="text" id="username" required="required"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input name="password" type="password" id="password" required="required"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><button type="submit" class="btn btn-primary">Login</button></td>
					</tr>
				</table>
			</td>
		</form>
	</tr>
</table>