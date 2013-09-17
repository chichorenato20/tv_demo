<!DOCTYPE html>
<html lang="<?=$this->lang->line('lenguaje');?>" class="login_page">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sonic-tec : <?=$this->lang->line('Logi_page');?></title>
    	<?php $rut='';(isset($ruta))?$rut=$ruta:$rut='';?>
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="<?=$rut;?>resources/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="<?=$rut;?>resources/bootstrap/css/bootstrap-responsive.min.css" />
        <!-- theme color-->
            <link rel="stylesheet" href="<?=$rut;?>resources/css/blue.css" />
        <!-- tooltip -->    
			<link rel="stylesheet" href="<?=$rut;?>resources/lib/qtip2/jquery.qtip.min.css" />
        <!-- main styles -->
            <link rel="stylesheet" href="<?=$rut;?>resources/css/style.css" />
    
        <!-- Favicon -->
            <link rel="shortcut icon" href="<?=$rut;?>resources/favicon.ico" />
    
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    
        <!--[if lte IE 8]>
            <script src="<?=$rut;?>js/ie/html5.js"></script>
			<script src="<?=$rut;?>js/ie/respond.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->
		
    </head>
    <body>
<div class="none_border login_box" style="border:none;box-shadow: 0 0 0; background-color:transparent;">
<div class="lang-flag-1"><a href="login/cambioIdioma/en/" title="<?=$this->lang->line('Logi_lang_en');?>"><img src="<?=$rut;?>resources/img/gCons/en.gif"></a><a href="login/cambioIdioma/es/" title="<?=$this->lang->line('Logi_lang_es');?>"><img src="<?=$rut;?>resources/img/gCons/per.gif"></a></div>
		<div class="login_box">
			
			<form action="login/acceso" method="post" id="login_form">
				<div class="top_b"><?=$this->lang->line('Logi_titu');?></div>    
				<div class="alert alert-info alert-login" style="font-size:12px;" id="sms1">
					<?=$this->lang->line('Logi_sms1');?>
				</div>
				<div class="cnt_b">
                <div class="formRow">
						<div class="input-prepend">
							<label><input name="opcion" type="checkbox" onClick="verpass(this)" id="check"> Tengo una cuenta en Sonic-Tec</label>
						</div>
					</div><br>
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-shopping-cart" id="icon_cart"></i></span><input type="text" id="num_pedi" name="num_pedi" placeholder="<?=$this->lang->line('Logi_num_pedido');?>" style="width:80%"/>
						</div>
					</div>
					<div class="formRow" style="display:none" id="pass_colum">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="password" id="pass" name="user_pass" placeholder="<?=$this->lang->line('Logi_pass');?>" style="width:80%"/>
						</div>
					</div>
					<div class="formRow clearfix">
						<label class="checkbox" id="check_recordar" style="display:none"><input type="checkbox" /> <?=$this->lang->line('Logi_recordar');?></label>
					</div>
				</div>
				<div class="btm_b clearfix">
					<button class="btn btn-inverse pull-right" type="submit"><?=$this->lang->line('Logi_entrar');?></button>
					<span class="link_reg"><a href="javascript:win_registro();"><?=$this->lang->line('Logi_registrate');?></a></span>
				</div>  
			</form>
			
			<form action="dashboard.html" method="post" id="pass_form" style="display:none">
				<div class="top_b">Can't sign in?</div>    
					<div class="alert alert-info alert-login">
					Please enter your email address. You will receive a link to create a new password via email.
				</div>
				<div class="cnt_b">
					<div class="formRow clearfix">
						<div class="input-prepend">
							<span class="add-on">@</span><input type="text" placeholder="Your email address" />
						</div>
					</div>
				</div>
				<div class="btm_b tac">
					<button class="btn btn-inverse" type="submit">Request New Password</button>
				</div>  
			</form>
			
			<form action="dashboard.html" method="post" id="reg_form" style="display:none">
				<div class="top_b">Sign up to Gebo Admin</div>
				<div class="alert alert-login">
					By filling in the form bellow and clicking the "Sign Up" button, you accept and agree to <a data-toggle="modal" href="<?=$rut;?>resources/#terms">Terms of Service</a>.
				</div>
				<div id="terms" class="modal hide fade" style="display:none">
					<div class="modal-header">
						<a class="close" data-dismiss="modal">×</a>
						<h3>Terms and Conditions</h3>
					</div>
					<div class="modal-body">
						<p>
							Nulla sollicitudin pulvinar enim, vitae mattis velit venenatis vel. Nullam dapibus est quis lacus tristique consectetur. Morbi posuere vestibulum neque, quis dictum odio facilisis placerat. Sed vel diam ultricies tortor egestas vulputate. Aliquam lobortis felis at ligula elementum volutpat. Ut accumsan sollicitudin neque vitae bibendum. Suspendisse id ullamcorper tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum at augue lorem, at sagittis dolor. Curabitur lobortis justo ut urna gravida scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam vitae ligula elit.
							Pellentesque tincidunt mollis erat ac iaculis. Morbi odio quam, suscipit at sagittis eget, commodo ut justo. Vestibulum auctor nibh id diam placerat dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vel nunc sed tellus rhoncus consectetur nec quis nunc. Donec ultricies aliquam turpis in rhoncus. Maecenas convallis lorem ut nisl posuere tristique. Suspendisse auctor nibh in velit hendrerit rhoncus. Fusce at libero velit. Integer eleifend sem a orci blandit id condimentum ipsum vehicula. Quisque vehicula erat non diam pellentesque sed volutpat purus congue. Duis feugiat, nisl in scelerisque congue, odio ipsum cursus erat, sit amet blandit risus enim quis ante. Pellentesque sollicitudin consectetur risus, sed rutrum ipsum vulputate id. Sed sed blandit sem. Integer eleifend pretium metus, id mattis lorem tincidunt vitae. Donec aliquam lorem eu odio facilisis eu tempus augue volutpat.
						</p>
					</div>
					<div class="modal-footer">
						<a data-dismiss="modal" class="btn" href="<?=$rut;?>resources/#">Close</a>
					</div>
				</div>
				<div class="cnt_b">
					
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Username" />
						</div>
					</div>
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><input type="text" placeholder="Password" />
						</div>
					</div>
					<div class="formRow">
						<div class="input-prepend">
							<span class="add-on">@</span><input type="text" placeholder="Your email address" />
						</div>
						<small>The e-mail address is not made public and will only be used if you wish to receive a new password.</small>
					</div>
					 
				</div>
				<div class="btm_b tac">
					<button class="btn btn-inverse" type="submit"><?=$this->lang->line('Logi_entrar');?></button>
				</div>  
			</form>
			
			<div class="links_b links_btm clearfix">
				<span class="linkform"><a href="<?=$rut;?>resources/#pass_form"><?=$this->lang->line('Logi_lost_pedido');?></a></span>
				<span class="linkform" style="display:none">Never mind, <a href="<?=$rut;?>resources/#login_form">send me back to the sign-in screen</a></span>
			</div>
		</div>
</div>
        <script src="<?=$rut;?>resources/js/jquery.min.js"></script>
        <script src="<?=$rut;?>resources/js/jquery.actual.min.js"></script>
        <script src="<?=$rut;?>resources/lib/validation/jquery.validate.min.js"></script>
		<script src="<?=$rut;?>resources/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
				//* validation
				$('#login_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						num_pedi: { required: true, minlength: 3 },
						user_pass:{ required: true, minlength: 3 }
					},
					highlight: function(element) {
						$(element).closest('div').addClass("f_error");
						setTimeout(function() {
							boxHeight()
						}, 200)
					},
					unhighlight: function(element) {
						$(element).closest('div').removeClass("f_error");
						setTimeout(function() {
							boxHeight()
						}, 200)
					},
					errorPlacement: function(error, element) {
						$(element).closest('div').append(error);
					}
				});
				
            });
			function verpass(check){
					var estado=$('#check:checked').val();
					if(estado=='on'){
						$('#sms1').html('<?=$this->lang->line('Logi_sms2');?>');
						$('#icon_cart').attr('class','icon-user');
						$('#num_pedi').attr('placeholder','<?=$this->lang->line('Logi_non_user');?>');
						$('#pass_colum').fadeIn(500);
						$('#check_recordar').fadeIn(500);
					}else{
						$('#sms1').html('<?=$this->lang->line('Logi_sms1');?>');
						$('#num_pedi').attr('placeholder','<?=$this->lang->line('Logi_num_pedido');?>');
						$('#icon_cart').attr('class','icon-shopping-cart');
						$('#pass_colum').fadeOut(300);
						$('#check_recordar').fadeOut(300);
					}
					}
				
				function win_registro(){alert('sss');}
        </script>
    </body>
</html>
