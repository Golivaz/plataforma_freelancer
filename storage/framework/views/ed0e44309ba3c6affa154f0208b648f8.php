<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['class']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['class']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginala49a7db8f338a7cd425c4e6cf11050c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala49a7db8f338a7cd425c4e6cf11050c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.nextjs','data' => ['class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.nextjs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala49a7db8f338a7cd425c4e6cf11050c5)): ?>
<?php $attributes = $__attributesOriginala49a7db8f338a7cd425c4e6cf11050c5; ?>
<?php unset($__attributesOriginala49a7db8f338a7cd425c4e6cf11050c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala49a7db8f338a7cd425c4e6cf11050c5)): ?>
<?php $component = $__componentOriginala49a7db8f338a7cd425c4e6cf11050c5; ?>
<?php unset($__componentOriginala49a7db8f338a7cd425c4e6cf11050c5); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\storage\framework\views/044d6d1309e81ec39e43ea37b75c2e52.blade.php ENDPATH**/ ?>