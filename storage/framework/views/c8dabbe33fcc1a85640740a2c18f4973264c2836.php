<?php $__env->startSection('centroAdm'); ?>
<h4>Posts</h4>
<form action="/" method="post">
    <input type="hidden" value="csrf_token()">
    <div class="form-row">
        <div class="form-group col">
            <label for="tituloPost">*Título: </label>
            <input type="text" class="form-control" name="tituloPost" placeholder="Lhamas" required>
        </div>
        <div class="form-group col">
            <label for="resumoPost">*Resumo: </label>
            <input type="text" class="form-control" name="resumoPost" placeholder="Lhamas são animais legais" required>
            <small>Use poucas palavras.</small>
        </div>
    </div>
    <label for="conteudoPost">*Conteúdo do Post: </label>
    <textarea class="form-control" name="conteudoPost" required></textarea><br>
    <label for="tagsPost">Tags: </label>
    <input type="text" class="form-control" name="tagsPost">
    <small>Use tags separadas por vírgula (',').</small><br><br>
    <button type="submit" class="btn btn-primary">Publicar</button>
</form>

<table class="table table-bordered table-hover tabelausuarios">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Resumo</th>
      <th scope="col">Usuario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Titulo</td>
      <td>Texto</td>
      <td>lucas</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Titulo</td>
      <td>Texto</td>
      <td>lucas</td>
    </tr><tr>
      <th scope="row">3</th>
      <td>Titulo</td>
      <td>Texto</td>
      <td>lucas</td>
    </tr>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adm.adm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>