<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Assessment</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <form action="<?php echo e(URL('assesupdate/'.$asses->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('Put'); ?>
        <label for="type">Type</label>
        <input type="text" name="type" id="" value="<?php echo e($asses->name); ?>">
        <label for="status">Status</label>
        <select name="status" id="">
            <option value="Publish">Publish</option>
            <option value="Not Yet">Not Yet</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html><?php /**PATH D:\projects\MobiSchool.com\resources\views/Assesment/Teacher/Edit.blade.php ENDPATH**/ ?>