<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Povești de Succes</h1>
<p><a href="<?php echo e(route('members.index')); ?>">Înapoi la Membri</a></p>

<form action="<?php echo e(route('stories.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="title" placeholder="Titlu Poveste" required><br>
    <textarea name="content" placeholder="Povestea ta..." required></textarea><br>
    <input type="email" name="author_email" placeholder="Emailul tău" required><br>
    <button type="submit">Salvează Povestea</button>
</form>

<hr>

<?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="border-bottom: 1px solid #ccc; margin-bottom: 10px;">
        <h3><?php echo e($story->title); ?></h3>
        <p><?php echo e($story->content); ?></p>
        <small>Autor: <?php echo e($story->author_email); ?></small>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\women-fintech\resources\views/stories/index.blade.php ENDPATH**/ ?>