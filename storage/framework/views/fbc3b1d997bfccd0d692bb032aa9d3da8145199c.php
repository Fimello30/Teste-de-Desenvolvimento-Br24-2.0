<?php $__env->startSection('Titulo','Cadastro'); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="form-signin">

    <h2>Seleção - Br24</h2>
    <form class="form-signin" method="post" action="/cadastro">
        <?php echo e(csrf_field()); ?>

        <?php echo $__env->make('cadastro._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="btn-toolbar justify-content-between">
            <div>
                <a class="btn btn-primary" href="/" role="button">Voltar</a>
            </div>
            <div>
                <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fimel\Desktop\Teste de Desenvolvimento  Br24 2.0\TesteDesenvolvimentoBr4\resources\views/cadastro/index.blade.php ENDPATH**/ ?>