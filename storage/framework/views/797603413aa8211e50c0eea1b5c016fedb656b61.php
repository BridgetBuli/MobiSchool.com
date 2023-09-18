<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <form action="<?php echo e(URL('quizstore')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $exam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <h3><?php echo e($item->question); ?></h3>
            
            
            <hr>
            <label for="">
                <input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_1); ?>"><?php echo e($item->Option_1); ?>

            </label>
            <label for="">
                <input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_2); ?>"><?php echo e($item->Option_2); ?>

            </label>
            <label for="">
                <input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_3); ?>"><?php echo e($item->Option_3); ?>

            </label>
            <label for="">
                <input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_4); ?>"><?php echo e($item->Option_4); ?>

            </label>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html><?php /**PATH D:\projects\MobiSchool.com\resources\views/Assesment/Student/show.blade.php ENDPATH**/ ?>