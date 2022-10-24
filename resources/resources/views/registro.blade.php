<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
    <link rel="shortcut icon" href="{{ asset('logo.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('css/styleRegistro.css')}}">
</head>
<body>
		<div class="contenedorRegistro">
			<h1>Registro</h1>
			<form method="POST" action="{{ route('registro.create')}}" enctype="multipart/form-data">
				@csrf
				<div class="Uno">
					<div class="contenedorUser">
						<input type="text" placeholder=" " name="Nombre" value="{{ old('Nombre') }}" maxlength="30" required>
						<label>Nombre</label>
					</div>
					<div class="contenedorUser">
						<input type="text" placeholder=" " name="Apellidos" value="{{ old('Apellidos') }}" minlength="3" maxlength="30" required>
						<label>Apellido</label>
					</div>
				</div>
					<div class="contenedorUser">
						<input type="text" placeholder=" " name="Correo" value="{{ old('Correo') }}" maxlength="40" required>
						<label>Correo Electronico</label>
					</div>
					@error('Correo')
						<center><h5><font color="red" background-color="red">{{ $message }}</font></h5></center>
            		@enderror
					<div class="contenedorUser">
						<input type="password" placeholder=" " name="Contrasena" value="{{ old('Contrasena') }}" minlength="7" maxlength="15" required >
						<label>Contraseña</label>
					</div>
					<div class="contenedorUser">
						<input type="password" placeholder=" " name="Contrasenac" value="{{ old('Contrasenac') }}" minlength="7" maxlength="15" required >
						<label>Confirme su contraseña</label>
					</div>
					
						@if(Session::has('Contrasena'))
							<h5><font color="red" background-color="red">{{session('Contrasena')}}</font></h5>
						@endif
					

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

				@error('foto')
					<center><h5><font color="red" background-color="red">{{ $message }}</font></h5></center>
            	@enderror

				<input type="submit" value="Registrarte">
			</form>
		</div>
		<script src="{{ asset('scripts/registro.js')}}"></script>
</body>
</html>