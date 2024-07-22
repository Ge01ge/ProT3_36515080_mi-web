<!--formulario de Registro-->
<section>
  <div class="container mt-5">
      <h2 class="mb-4">Formulario de Registro</h2>
      <form id="registrationForm">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
        </div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
        </div>
        <div id="liveAlertPlaceholder" style="width: 40vw;"></div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
  </section>

  <script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevenir el envío predeterminado del formulario

      // Mostrar el alert
      var alertPlaceholder = document.getElementById('liveAlertPlaceholder');
      var alert = document.createElement('div');
      alert.className = 'alert alert-success alert-dismissible fade show';
      alert.role = 'alert';
      alert.innerHTML = `
        Bien ya estas Registrado
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      `;
      alertPlaceholder.append(alert);

      // Enviar el formulario después de mostrar el alert
      setTimeout(function() {
        document.getElementById("registrationForm").submit();
      }, 2000); // Esperar 2 segundos antes de enviar el formulario
    });
  </script>
