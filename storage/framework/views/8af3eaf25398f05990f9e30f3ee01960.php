<h1>Editare Profil Membru</h1>

<form action="<?php echo e(route('members.update', $member->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?> <label>Nume:</label><br>
    <input type="text" name="name" value="<?php echo e($member->name); ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo e($member->email); ?>" required><br>

    <label>Profesie:</label><br>
    <input type="text" name="profession" value="<?php echo e($member->profession); ?>" required><br>

    <label>Companie:</label><br>
    <input type="text" name="company" value="<?php echo e($member->company); ?>"><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="active" <?php echo e($member->status == 'active' ? 'selected' : ''); ?>>Active</option>
        <option value="inactive" <?php echo e($member->status == 'inactive' ? 'selected' : ''); ?>>Inactive</option>
    </select><br><br>

    <button type="submit">Salvează Modificările</button>
    <a href="<?php echo e(route('members.index')); ?>">Anulează</a>
</form><?php /**PATH C:\xampp\htdocs\women-fintech\resources\views/members/edit.blade.php ENDPATH**/ ?>