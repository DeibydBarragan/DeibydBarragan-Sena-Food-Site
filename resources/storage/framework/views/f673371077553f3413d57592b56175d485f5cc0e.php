<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar sesión</title>
	<link rel="shortcut icon" href="<?php echo e(asset('logo.png')); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo e(asset('css/stylesLogin.css')); ?>">

</head>
<body>
	
	<div class="contenedorLogin">
		<h1>Inicio de sesión</h1>
		<form action=" <?php echo e(Route('validar')); ?>" method="post">
		<?php echo csrf_field(); ?>
			<div class="contenedorUsername">
				<input type="email" name="Correo" placeholder=" " required>
				<label>Correo</label>
			</div>
			<div class="contenedorUsername">
				<input type="password" name="Contrasena" placeholder=" " required>
				<label>Contraseña</label>
			</div>
			<div class="contenedorRegistrar">
				<?php if(Session::has('usuarioIncorrecto')): ?>
					<h5><font color="red" background-color="red"><?php echo e(session('usuarioIncorrecto')); ?></font></h5>
				<?php endif; ?>
			</div>
			<div class="contenedorOlvidar">
				<a href="#">¿Olvidaste tu contraseña?</a>
			</div>
			<input type="submit" value="Iniciar Sesion">
			<div class="contenedorRegistrar">
				¿No tienes cuenta? <a href="<?php echo e(Route('registro.index')); ?>">Registrate</a>
			</div>
		</form>
	</div>
</body>
</html>
<?php /**PATH C:\laragon\www\Proyecto\resources\views/login.blade.php ENDPATH**/ ?>