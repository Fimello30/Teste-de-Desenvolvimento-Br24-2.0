<?php $__env->startSection('Titulo','Lista de contatos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h2>Lista de contatos</h2><br><br><br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
        </tr>

        <?php for($i = 0; $i < $result['total']; $i++): ?>
            <tr>
                <td><?php echo e($result['result'][$i]['NAME']); ?></td>
                <td><?php echo e($result['result'][$i]['UF_CRM_1592106833']); ?></td>
                <td><?php echo e($result['result'][$i]['EMAIL'][0]['VALUE']); ?></td>
                <td><?php echo e($result['result'][$i]['PHONE'][0]['VALUE']); ?></td>
            </tr>
        <?php endfor; ?>
    </table>
    <br><br><br>

        <a class="btn btn-primary" href="/" role="button">Voltar</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fimel\Desktop\Teste de Desenvolvimento  Br24 2.0\TesteDesenvolvimentoBr4\resources\views/contato/index.blade.php ENDPATH**/ ?>