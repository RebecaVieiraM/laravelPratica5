

<?php $__env->startSection('conteudo'); ?>

<div class="grid-cabecalho">
    <h2>Dicionário</h2>
    <a href="/dicionarios/create">Criar Novo</a>
</div>
<table>
    <tr>
        <th>Palavra</th>
        <th>Significado</th>
        <th>-</th>
    </tr>
    <?php $__currentLoopData = $palavras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $palavras): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($palavras->palavra1); ?></td>
        <td><?php echo e($palavras->significado1); ?></td>
        <td>
            <form action="/dicionarios/delete" method="post" id="form-delete-<?php echo e($palavras->id); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($palavras->id); ?>">
                <a href="javascript:var c = confirm('Deseja deletar o item?'); if(c){document.getElementById('form-delete-<?php echo e($palavras->id); ?>').submit();}">EXCLUIR</a>
                <?php echo method_field("DELETE"); ?>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\12200905\Documents\devweb\pratica05\resources\views/index.blade.php ENDPATH**/ ?>