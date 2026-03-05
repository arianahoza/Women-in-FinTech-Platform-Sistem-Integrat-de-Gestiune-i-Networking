<h1>Adăugare Membru Nou</h1>

<form action="<?php echo e(route('members.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <label>Nume (obligatoriu):</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email (obligatoriu, unic):</label><br>
    <input type="email" name="email" required><br><br>

    <label>Profesie (obligatoriu):</label><br>
    <input type="text" name="profession" required><br><br>

    <label>Companie (opțional):</label><br>
    <input type="text" name="company"><br><br>

    <label>LinkedIn URL (opțional):</label><br>
    <input type="url" name="linkedin_url"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select><br><br>

    <button type="submit">Salvează Membru</button>
</form><?php /**PATH C:\xampp\htdocs\women-fintech\resources\views/members/create.blade.php ENDPATH**/ ?>