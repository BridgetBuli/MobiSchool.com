<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View all Questions</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <a href="<?php echo e(URL::to('asses')); ?>"><button type="submit">Back</button></a>
    <a href="<?php echo e(URL::to('quemake/')); ?>"><button type="submit">Add Question</button></a>
    
        <?php $__currentLoopData = $asses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article>
                <h3><?php echo e($item->question); ?></h3>
                <hr>
                <label for=""><input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_1); ?>"><?php echo e($item->Option_1); ?></label>
                <label for=""><input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_2); ?>"><?php echo e($item->Option_2); ?></label>
                <label for=""><input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_3); ?>"><?php echo e($item->Option_3); ?></label>
                <label for=""><input type="radio" name="option[<?php echo e($item->id); ?>]" id="" value="<?php echo e($item->Option_4); ?>"><?php echo e($item->Option_4); ?></label>
                <hr>
                <p>The correct answer is <?php echo e($item->answer); ?></p>
                <p>This question consist of <?php echo e($item->marks); ?></p>
                <hr>
                <a href="<?php echo e(URL::to('queedit/'.$item->id)); ?>"><button>Edit</button></a>
                <a href="<?php echo e(URL::to('quedelete/'.$item->id)); ?>"><button>Delete</button></a>
                <hr>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

</body>
</html><?php /**PATH D:\projects\MobiSchool.com\resources\views/Assesment/Teacher/Question/index.blade.php ENDPATH**/ ?>