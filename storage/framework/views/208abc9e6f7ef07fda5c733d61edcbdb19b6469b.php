<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Assessment</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <a href="<?php echo e(URL::to('assesmake')); ?>"><button type="submit">Add</button></button></a>
    <?php if(count($asses) > 0): ?>
        <?php $__currentLoopData = $asses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article>
                <h3><?php echo e($item->Lesson->name); ?></h3>
                <h4><?php echo e($item->name); ?></h4>
                <p><?php echo e($item->Status); ?></p>
                <a href="<?php echo e(URL::to('assesshow/'.$item->id)); ?>"><button type="submit">View Questions</button></a>
                <a href="<?php echo e(URL::to('assesedit/'.$item->id)); ?>"><button type="submit">Update</button></a>
                <a href="<?php echo e(URL::to('assesdelete/'.$item->id)); ?>"><button type="submit">Delete</button></a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</body>
</html><?php /**PATH D:\projects\MobiSchool.com\resources\views/Assesment/Teacher/Assesment.blade.php ENDPATH**/ ?>