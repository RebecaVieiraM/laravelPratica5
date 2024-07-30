

<?php $__env->startSection('conteudo'); ?>

<form action="/dicionarios/store" method="post">
    <?php echo csrf_field(); ?>
    <p>
        <label for="palavra1">Palavra</label>
        <input type="text" id="palavra1" name="palavra1" value="">
    </p>
    <p>
        <label for="significado1">Significado</label>
        <input type="text" id="significado1" name="significado1" value="">
    </p>
    <p>
        <button type="submit">Salvar</button>
    </p>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\12200905\Documents\devweb\pratica05\resources\views/formulario.blade.php ENDPATH**/ ?>