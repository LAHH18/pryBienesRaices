<div class="main-container">
	<div class="bg-dark p-5 rounded-3 text-center text-white">

    <form class="login" action="" method="POST" autocomplete="off" >
		<h5 class="text-white mb-4 position-relative d-inline-block">LOGIN</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="input-group">
			<span class="input-group-text input-group-text-custom"><img src="<?php echo APP_URL; ?>app/views/icons/person.svg" alt=""></span>
			    <input class="form-control form-control-custom" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field mt-3">
		  	<label class="label">Contraseña</label>
		  	<div class="input-group">
			  	<span class="input-group-text input-group-text-custom"><img src="<?php echo APP_URL; ?>app/views/icons/key.svg" alt=""></span>
		    	<input class="form-control form-control-custom" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<div class="form-text">
                  <p class="text-secondary mt-3" id="newpass">¿Olvidaste tu contraseña? <a href="recuperar.html" class="text-white text-decoration-none ">Click aquí</a></p>
                  <p class="text-secondary " id="newpass">¿Aún no estas registrado? <a href="registro.html" class="text-warning">Registrate</a></p>
        </div>

		<p class="has-text-centered mt-3">
			<button type="submit" class="btn btn-warning">Iniciar sesion</button>
		</p>

	</form>
	</div>
</div>
