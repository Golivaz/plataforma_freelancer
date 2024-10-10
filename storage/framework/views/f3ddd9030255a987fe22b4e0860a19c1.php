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
<?php if (isset($component)) { $__componentOriginaldf4c1b0d3847f892834227a30b79c7f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf4c1b0d3847f892834227a30b79c7f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.vite','data' => ['class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.vite'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf4c1b0d3847f892834227a30b79c7f3)): ?>
<?php $attributes = $__attributesOriginaldf4c1b0d3847f892834227a30b79c7f3; ?>
<?php unset($__attributesOriginaldf4c1b0d3847f892834227a30b79c7f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf4c1b0d3847f892834227a30b79c7f3)): ?>
<?php $component = $__componentOriginaldf4c1b0d3847f892834227a30b79c7f3; ?>
<?php unset($__componentOriginaldf4c1b0d3847f892834227a30b79c7f3); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\storage\framework\views/8ef042d1998a74361a9f7423fa0cadb0.blade.php ENDPATH**/ ?>