<?php $__env->startSection('centroAdm'); ?>
<h4>Redes Sociais</h4>
<form action="/" method="post">
    <input type="hidden" value="csrf_token()">
    <div class="form-row">
        <div class="form-group col">
            <label for="nomeRedeSocial">*Nome: </label>
            <input type="text" class="form-control" name="nomeRedeSocial" placeholder="Facebook" required>
        </div>
        <div class="form-group col">
            <label for="urlRedeSocial">*URL: </label>
            <input type="text" class="form-control" name="urlRedeSocial" placeholder="https://www.facebook.com/" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

<table class="table table-bordered table-hover tabelausuarios">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">URL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Facebook</td>
      <td>https://www.facebook.com/facebook/</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Twitter</td>
      <td>https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw</td>
    </tr><tr>
      <th scope="row">3</th>
      <td>Instagram</td>
      <td>//instagram.com/p/b6x-uok2_e/embed</td>
    </tr>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adm.adm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>