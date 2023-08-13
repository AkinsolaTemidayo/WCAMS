<div class="login-box pt-5">
	<!-- /.login-logo -->
	<div class="login-box-body">
	<h3 class="text-center mt-0 mb-4">
	<b>C</b>ontinuous <b>A</b>ssessment <b>M</b>anagement <b>S</b>ystem
	</h3> 
	<p class="login-box-msg">Login to start your session</p>

	<div id="infoMessage" class="text-center"><?php echo $message;?></div>

	<?= form_open("auth/cek_login", array('id'=>'login'));?>
		<div class="form-group has-feedback">
			<?= form_input($identity);?>
			<span class="fa fa-envelope form-control-feedback"></span>
			<span class="help-block"></span>
		</div>
		<div class="form-group has-feedback">
			<?= form_input($password);?>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="help-block"></span>
		</div>
		<div class="row">
			<div class="col-xs-8">
			<div class="checkbox icheck">
				<label>
				<?= form_checkbox('remember', '', FALSE, 'id="remember"');?> Remember Me
				</label>
			</div>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
			<?= form_submit('submit', lang('login_submit_btn'), array('id'=>'submit','class'=>'btn btn-success btn-block btn-flat'));?>
			</div>
			<!-- /.col -->
		</div>
		<?= form_close(); ?>

		<a href="<?=base_url()?>auth/forgot_password" class="text-center"><?= lang('login_forgot_password');?></a>

		<!-- <a href= style="margin: 1px 3px; float: right" >Register here</a> -->

	</div>
</div>

<script type="text/javascript">
	let base_url = '<?=base_url();?>';
</script>
<script src="<?=base_url()?>assets/dist/js/app/auth/login.js"></script>