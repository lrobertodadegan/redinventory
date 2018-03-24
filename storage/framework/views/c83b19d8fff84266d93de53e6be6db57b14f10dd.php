<?php $__env->startSection('centroAdm'); ?>
<h4>Usuários</h4>
<form action="/" method="post">
    <input type="hidden" value="csrf_token()">
    <div class="form-row">
        <div class="form-group col">
            <label for="nome">*Nome: </label>
            <input type="text" class="form-control" name="nomeUsuario" placeholder="Lucas Roberto" required>
        </div>
        <div class="form-group col">
            <label for="emailUsuario">*E-mail: </label>
            <input type="text" class="form-control" name="emailUsuario" placeholder="lrobertodaldegan@hotmail.com" required>
        </div>
    </div>
    <label for="permissaoUsuario">*Permissão: </label>
    <select class="form-control" name="permissaoUsuario" required>
        <option name="admin" selected>Administrador</option>
        <option name="admin">Escritor</option>
    </select><br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<table class="table table-bordered table-hover tabelausuarios">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">E-mail</th>
      <th scope="col">Permissão</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Lucas</td>
      <td>admin</td>
      <td>admin@example.com</td>
      <td>admin</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Lucas</td>
      <td>lucas.roberto</td>
      <td>lucas.roberto@example.com</td>
      <td>escritor</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Lucas</td>
      <td>lrobertodaldegan</td>
      <td>lrobertodaldegan@hotmail</td>
      <td>admin</td>
    </tr>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adm.adm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>