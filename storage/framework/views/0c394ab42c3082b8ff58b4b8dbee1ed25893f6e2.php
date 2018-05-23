<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
    <div class="row telas">
        <div class="col-sm-12 text-center">
            <h2>Usuários</h2>
            <form action="/cadUsuario" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Nome" name="nome" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="E-mail" name="email" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Login" name="login" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Senha" name="senha" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-secondary w-100">Salvar</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row telas">
        <div class="col">
            <table class="table table-striped tabela">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Login</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($usuarios)): ?>
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($usuario->id); ?></th>
                                <td><?php echo e($usuario->nome); ?></td>
                                <td><?php echo e($usuario->login); ?></td>
                                <td><?php echo e($usuario->email); ?></td>
                                <td class="text-center">
                                    <form action="/delUsuario" method="post">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="id" value="<?php echo e($midia->id); ?>">
                                        <button type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>