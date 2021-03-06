<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('centro'); ?>
    <div class="row telas-maior">
        <div class="col-sm-12 text-center">
            <h2>Minha rede</h2>
            <form action="/cadHost" method="post">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="hostname" class="form-control" placeholder="Hostname"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="ip" class="form-control" placeholder="IP"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="mac" class="form-control" placeholder="MAC"/>
                        </div>
                        <div class="form-group text-left">
                            <label for="so">Sistema Operacional: </label>
                            <select name="so" class="form-control">
                                <option value="Windows XP">Windows XP</option>
                                <option value="Windows 7">Windows 7</option>
                                <option value="Windows 8">Windows 8</option>
                                <option value="Windows 10">Windows 10</option>
                                <option value="Windows Server 2003">Windows Server 2003</option>
                                <option value="Windows Server 2008">Windows Server 2008</option>
                                <option value="Windows Server 2012">Windows Server 2012</option>
                                <option value="Windows Server 2016">Windows Server 2016</option>
                                <option value="Ubuntu 12">Ubuntu 12</option>
                                <option value="Ubuntu 14">Ubuntu 14</option>
                                <option value="Ubuntu 16">Ubuntu 16</option>
                                <option value="Ubuntu 17">Ubuntu 17</option>
                                <option value="Debian 8">Debian 9</option>
                                <option value="Debian 9">Debian 8</option>
                                <option value="CentOS 6">CentOS 6</option>
                                <option value="CentOS 7">CentOS 7</option>
                                <option value="ProxMox">ProxMox</option>
                                <option value="VMWare">VMWare</option>
                                <option value="PFSense">PFSense</option>
                                <option value="Windows (outro)">Windows (Outro)</option>
                                <option value="Linux (outro)">Linux (Outro)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="setor" class="form-control" placeholder="Setor"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="usuario" class="form-control" placeholder="Usuário"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="ram" class="form-control" placeholder="RAM"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="HD" class="form-control" placeholder="HD"/>
                        </div>
                        <div class="form-group text-left">
                            <label for="tipo">Tipo: </label>
                            <select name="tipo" class="form-control">
                                <option value="Desktop">Desktop</option>
                                <option value="Servidor">Servidor</option>
                                <option value="Notebook">Notebook</option>
                                <option value="Workstation">Workstation</option>
                                <option value="Smartphone">Smartphone</option>
                            </select>
                        </div>
                        <div class="form-inline text-left" style="margin-bottom:12px;">
                            <label for="estado" class="text-left" style="width:12%;">Estado: </label>
                            <select name="estado" class="form-control" style="width:88%;">
                                <option value="Disponível">Disponível</option>
                                <option value="Em uso">Em uso</option>
                                <option value="Em manutenção">Em manutenção</option>
                                <option value="Em testes">Em testes</option>
                                <option value="Furtado">Furtado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-outline-secondary w-100" type="submit">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row telas-maior">
        <div class="col-sm-12">
            <table class="table table-striped tabela">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hostname</th>
                            <th scope="col">IP</th>
                            <th scope="col">MAC</th>
                            <th scope="col">SO</th>
                            <th scope="col">Setor</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">RAM</th>
                            <th scope="col">HD</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <?php if(isset($hosts)): ?>
                        <?php $__currentLoopData = $hosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $host): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($host->id); ?></th>
                                <td><?php echo e($host->nome); ?></td>
                                <td><?php echo e($host->ip); ?></td>
                                <td><?php echo e($host->mac); ?></td>
                                <td><?php echo e($host->so); ?></td>
                                <td><?php echo e($host->setor); ?></td>
                                <td><?php echo e($host->usuario); ?></td>
                                <td><?php echo e($host->ram); ?></td>
                                <td><?php echo e($host->hd); ?></td>
                                <td><?php echo e($host->tipo); ?></td>
                                <td><?php echo e($host->estado); ?></td>
                                <td class="text-center">
                                    <form action="/delHost" method="post">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" name="id" value="<?php echo e($host->id); ?>">
                                        <button type="submit" style="background:none;border:none;cursor:pointer;"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>