<?php $__env->startSection('content'); ?>

<div class="container">
        
        <profil :user="<?php echo e($user); ?>"/>
</div>
   


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>