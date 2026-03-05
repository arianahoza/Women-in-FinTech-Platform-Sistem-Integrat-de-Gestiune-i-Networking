<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Evenimente Viitoare</h1>
<p><a href="<?php echo e(route('members.index')); ?>">Înapoi la Membri</a></p>

<form action="<?php echo e(route('events.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Nume Eveniment" required><br>
    <input type="text" name="date" placeholder="Data (ex: 15 Iunie)" required><br>
    <input type="text" name="location" placeholder="Locație" required><br>
    <button type="submit">Adaugă Eveniment</button>
</form>

<hr>

<table class="table table-striped table-hover">
    <tr><th>Nume</th><th>Data</th><th>Locație</th></tr>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($event->name); ?></td>
        <td><?php echo e($event->date); ?></td>
        <td><?php echo e($event->location); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\women-fintech\resources\views/events/index.blade.php ENDPATH**/ ?>