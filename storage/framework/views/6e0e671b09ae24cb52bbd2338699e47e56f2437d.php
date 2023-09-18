<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available Quiz</title>
    <link rel="stylesheet" href="https://unpkg.com/awsm.css/dist/awsm.min.css">
</head>
<body>
    <?php if(count($exam) > 0): ?>
        <?php $__currentLoopData = $exam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article>
                <h3><?php echo e($item->Lesson->name." ".$item->name); ?></h3>
                <a href="<?php echo e('quizshow/'.$item->id); ?>"><button>Take</button></a>
                <hr>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    <?php else: ?>
        
    <?php endif; ?>
</body>
</html><?php /**PATH D:\projects\MobiSchool.com\resources\views/assesment/student/index.blade.php ENDPATH**/ ?>