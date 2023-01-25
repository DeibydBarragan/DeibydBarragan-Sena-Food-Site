<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
    <link rel="shortcut icon" href="<?php echo e(asset('logo.png')); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo e(asset('css/styleRegistro.css')); ?>">
</head>
<body>
		<div class="contenedorRegistro">
			<h1>Registro</h1>
			<form method="POST" action="<?php echo e(route('registro.create')); ?>" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<div class="Uno">
					<div class="contenedorUser">
						<input type="text" placeholder=" " name="Nombre" value="<?php echo e(old('Nombre')); ?>" required>
						<label>Nombre</label>
					</div>
					<div class="contenedorUser">
						<input type="text" placeholder=" " name="Apellidos" value="<?php echo e(old('Apellidos')); ?>" minlength="3" required>
						<label>Apellido</label>
					</div>
				</div>
					<div class="contenedorUser">
						<input type="text" placeholder=" " name="Correo" value="<?php echo e(old('Correo')); ?>" required>
						<label>Correo Electronico</label>
					</div>
					<?php $__errorArgs = ['Correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<center><h5><font color="red" background-color="red"><?php echo e($message); ?></font></h5></center>
            		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					<div class="contenedorUser">
						<input type="password" placeholder=" " name="Contrasena" value="<?php echo e(old('Contrasena')); ?>" minlength="7" required >
						<label>Contraseña</label>
					</div>
					<div class="contenedorUser">
						<input type="password" placeholder=" " name="Contrasenac" value="<?php echo e(old('Contrasenac')); ?>" minlength="7" required >
						<label>Confirme su contraseña</label>
					</div>
					
						<?php if(Session::has('Contrasena')): ?>
							<h5><font color="red" background-color="red"><?php echo e(session('Contrasena')); ?></font></h5>
						<?php endif; ?>
					

					<div class="Uno">
						<div class="contenedorSelect">
							<font>Indique su centro de aprendizaje</font>
						</div>
						<div>
							<select class="select" name="id_centro">
								<option value="1">CME</option>
								<option value="2">CEET</option>
								<option value="3">CMM</option>
							</select>
						</div>
					</div>
					<!--ESTILO 1-->
				<div class="container-input">
					<input type="file" name="foto" id="file-1" class="inputfile inputfile-1" accept="image/*">
					<label for="file-1">
						<svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
						<span class="iborrainputfile">Escoja una foto</span>
					</label>
				</div>

				<?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<center><h5><font color="red" background-color="red"><?php echo e($message); ?></font></h5></center>
            	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

				<input type="submit" value="Registrarte">
			</form>
		</div>
		<script src="<?php echo e(asset('scripts/registro.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laragon\www\Proyecto\resources\views/registro.blade.php ENDPATH**/ ?>