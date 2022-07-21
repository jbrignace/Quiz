

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
</head>
<body>
    <form action="<?php echo e(url('check_answer')); ?>" method="post">
    <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
        <h3><?php echo e($question); ?></h3>
        <?php $letter = 'a';?>
        <input type="text" value="<?php echo e($count); ?>" name="question_number" style="display:none">
        <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h5 id="<?php echo e($letter); ?>"><input type="radio" name="answer" value="<?php echo e($answer->answer); ?>"> <?php echo e($answer->answer); ?></h5>

            <?php $letter++;?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($wrong == 'y'): ?>
            <div class="well" >Incorrect Answer.  The Answer is not <?php echo e($incorrect_answer); ?></div>
        <?php endif; ?>
        <input type="submit" value="Next Question">
    </form>

</body>
</html>


<?php /**PATH C:\Users\Jareds Laptop\Sites\quiz\resources\views/quiz.blade.php ENDPATH**/ ?>