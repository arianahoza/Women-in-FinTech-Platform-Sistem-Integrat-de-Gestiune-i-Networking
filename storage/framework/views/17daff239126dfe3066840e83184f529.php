<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<h1>Lista Membri Women in Fintech</h1>

<p>
    <a href="<?php echo e(route('members.index')); ?>">Membri</a> | 
    <a href="<?php echo e(route('stories.index')); ?>">Povești de Succes</a> | 
    <a href="<?php echo e(route('events.index')); ?>">Evenimente</a>
</p>

<hr>

<div style="margin-bottom: 20px;">
    <a href="<?php echo e(route('members.create')); ?>"><b>+ Adaugă Membru Nou</b></a> | 
    <a href="<?php echo e(route('members.export')); ?>">Descarcă CSV (Export)</a>
</div>

<form method="GET" action="<?php echo e(route('members.index')); ?>" style="background: #f9f9f9; padding: 10px; border: 1px solid #ddd;">
    
    <input type="text" name="profession" placeholder="Filtrează profesie" value="<?php echo e(request('profession')); ?>">
    
    <input type="text" name="company" placeholder="Filtrează companie" value="<?php echo e(request('company')); ?>">
    
    <select name="status">
        <option value="">-- Status --</option>
        <option value="active" <?php echo e(request('status') == 'active' ? 'selected' : ''); ?>>Active</option>
        <option value="inactive" <?php echo e(request('status') == 'inactive' ? 'selected' : ''); ?>>Inactive</option>
    </select>

    <button type="submit">Aplică Filtre</button>
    <a href="<?php echo e(route('members.index')); ?>">Resetează</a>
</form>

<br>

<table class="table table-striped table-hover" border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #eee;">
            <th style="padding: 10px;">Nume</th>
            <th style="padding: 10px;">Email</th>
            <th style="padding: 10px;">Profesie</th>
            <th style="padding: 10px;">Companie</th>
            <th style="padding: 10px;">Status</th>
            <th style="padding: 10px;">Acțiuni</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style="padding: 8px;"><?php echo e($member->name); ?></td>
            <td style="padding: 8px;"><?php echo e($member->email); ?></td>
            <td style="padding: 8px;"><?php echo e($member->profession); ?></td>
            <td style="padding: 8px;"><?php echo e($member->company); ?></td>
            <td style="padding: 8px;"><?php echo e($member->status); ?></td>
            <td style="padding: 8px;">
                <a href="<?php echo e(route('members.edit', $member->id)); ?>">Edit</a> | 
                
                <form action="<?php echo e(route('members.destroy', $member->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" onclick="return confirm('Sigur vrei să ștergi acest membru?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div style="margin-top: 15px;">
    <?php echo e($members->appends(request()->query())->links()); ?>

</div><?php /**PATH C:\xampp\htdocs\women-fintech\resources\views/members/index.blade.php ENDPATH**/ ?>