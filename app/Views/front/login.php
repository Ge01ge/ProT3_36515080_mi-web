<section>
<div class="container mt-5">
    <h2 class="mb-4">Inicio de Sesión</h2>
    <form>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
      </div>
      <button type="submit" class="btn btn-success">Iniciar Sesión</button>
      <div class="mt-3">
        <p>¿Aún no se ha registrado? <a href="<?php echo base_url('registrarse'); ?>">Registrarse aquí</a></p>
      </div>
    </form>
  </div>
</section>