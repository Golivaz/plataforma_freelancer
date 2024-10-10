<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($title ?? 'Page Title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-[#070715] flex flex-col min-h-full text-[#C3C3D1]">
    <?php if (isset($component)) { $__componentOriginala02bf2c07d7e78a7e7f116823e74edbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd)): ?>
<?php $attributes = $__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd; ?>
<?php unset($__attributesOriginala02bf2c07d7e78a7e7f116823e74edbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala02bf2c07d7e78a7e7f116823e74edbd)): ?>
<?php $component = $__componentOriginala02bf2c07d7e78a7e7f116823e74edbd; ?>
<?php unset($__componentOriginala02bf2c07d7e78a7e7f116823e74edbd); ?>
<?php endif; ?>
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full py-[40px]">
        <?php echo e($slot); ?>

    </main>
</body>

</html><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>