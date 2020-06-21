<?php $__env->startSection('Titulo','Lista de companhia'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h2>Lista de contatos</h2><br><br><br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Saldo</th>
        </tr>

        <?php for($i = 0; $i < $result['total']; $i++): ?>
            <tr>
                <td><?php echo e($result['result'][$i]['TITLE']); ?></td>
                <td><?php echo e($result['result'][$i]['UF_CRM_1592106903']); ?></td>
                <td><?php echo e($result['result'][$i]['UF_CRM_1592205695']); ?></td>
            </tr>
        <?php endfor; ?>
    </table>
    <br><br><br>

    <a class="btn btn-primary" href="/" role="button">Voltar</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fimel\Desktop\Teste de Desenvolvimento  Br24 2.0\TesteDesenvolvimentoBr4\resources\views/companhia/index.blade.php ENDPATH**/ ?>