
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Suscribete a nuestro boletín!! 🤗</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="alert_subcribe" class="alert alert-success" role="alert" style="display: none;">
  Gracias! Recibirás un correo, sino, verifica en spam.
</div>
        <label for="exampleFormControlInput1" class="form-label">Para obtener las ultimas novedades</label>
        <input id="email" name="email" class="form-control" placeholder="Ingresa tu correo ;D" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger" onClick="sendSub()">Por supuesto😊</button>
      </div>
    </div>
  </div>
</div>
