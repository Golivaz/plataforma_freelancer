<div class="grid grid-cols-2 gap-4">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <a href="<?php echo e(route('projects.show', $project)); ?>">

            <?php if (isset($component)) { $__componentOriginalf87717ba46e38006f377897e6bfd3b10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf87717ba46e38006f377897e6bfd3b10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.simple-card','data' => ['project' => $project]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.simple-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['project' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf87717ba46e38006f377897e6bfd3b10)): ?>
<?php $attributes = $__attributesOriginalf87717ba46e38006f377897e6bfd3b10; ?>
<?php unset($__attributesOriginalf87717ba46e38006f377897e6bfd3b10); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf87717ba46e38006f377897e6bfd3b10)): ?>
<?php $component = $__componentOriginalf87717ba46e38006f377897e6bfd3b10; ?>
<?php unset($__componentOriginalf87717ba46e38006f377897e6bfd3b10); ?>
<?php endif; ?>

        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/livewire/projects/index.blade.php ENDPATH**/ ?>