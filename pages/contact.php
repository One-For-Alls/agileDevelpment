<div id="page-contact">
  <div class="page-contact-container">
    <div class="page-contact-container-header">
      <h1>Contactanos</h1>
    </div>
    <div class="page-contact-container-body">
      <form action="pages/email.php" method="post">
        <div class="field">
          <label class="label-field" for="">Nombres <span>*</span></label>
          <input class="input-field" type="text" name="nombre" required>
        </div>
        <div class="field">
          <label class="label-field" for="">Apellidos <span>*</span></label>
          <input class="input-field" type="text" name="apellido" required>
        </div>
        <div class="field">
          <label class="label-field" for="">Correo <span>*</span></label>
          <input class="input-field" type="email" name="email"  required>
        </div>
        <div class="field">
          <label class="label-field" for="">Telefono / Celular <span>*</span></label>
          <input class="input-field" type="tel" name="celular" required>
        </div>
        <div class="field">
          <label class="label-field" for="">Mensaje <span>*</span></label>
          <textarea class="input-field" type="text" name="mensaje" rows="6" required></textarea>
        </div>
        <div class="btn-container">
          <button type="submit" class="btn-send">Enviar mensaje</button>
        </div>
      </form>
    </div>
  </div>
</div>