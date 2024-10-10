<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'proposal',
    'position'
]));

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

foreach (array_filter(([
    'proposal',
    'position'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="flex justify-between items-center">
    <div class="flex items-center space-x-2">
        <div>
            <?php if (isset($component)) { $__componentOriginal1db99b78e062a9c5249b8f0a8d79ba5e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1db99b78e062a9c5249b8f0a8d79ba5e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.proposals.position','data' => ['position' => $position]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('proposals.position'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($position)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1db99b78e062a9c5249b8f0a8d79ba5e)): ?>
<?php $attributes = $__attributesOriginal1db99b78e062a9c5249b8f0a8d79ba5e; ?>
<?php unset($__attributesOriginal1db99b78e062a9c5249b8f0a8d79ba5e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1db99b78e062a9c5249b8f0a8d79ba5e)): ?>
<?php $component = $__componentOriginal1db99b78e062a9c5249b8f0a8d79ba5e; ?>
<?php unset($__componentOriginal1db99b78e062a9c5249b8f0a8d79ba5e); ?>
<?php endif; ?>
        </div>
        <div>
            <div class="text-white text-[14px] font-bold tracking-wide truncate w-[140px]">
                <?php echo e($proposal->email); ?>

            </div>
            <div class="text-[#8C8C9A] text-[12px]">
                Enviado <?php echo e($proposal->created_at->diffForHumans()); ?>

            </div>
        </div>
    </div>
    <div
        class="whitespace-nowrap uppercase font-bold text-[#C3C3D1] flex items-center space-x-2 px-[8px] py-[4px] rounded-full bg-[#181826] border border-[#1E1E2C] text-[12px]">
        <?php if (isset($component)) { $__componentOriginal5b2f27b455fa13363f56b03bf76fb4a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b2f27b455fa13363f56b03bf76fb4a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.clock','data' => ['class' => 'w-[18px] h-[18px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.clock'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[18px] h-[18px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b2f27b455fa13363f56b03bf76fb4a1)): ?>
<?php $attributes = $__attributesOriginal5b2f27b455fa13363f56b03bf76fb4a1; ?>
<?php unset($__attributesOriginal5b2f27b455fa13363f56b03bf76fb4a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b2f27b455fa13363f56b03bf76fb4a1)): ?>
<?php $component = $__componentOriginal5b2f27b455fa13363f56b03bf76fb4a1; ?>
<?php unset($__componentOriginal5b2f27b455fa13363f56b03bf76fb4a1); ?>
<?php endif; ?>
        <span><?php echo e(str_pad($proposal->time, 2, "0", STR_PAD_LEFT)); ?> horas</span>
    </div>
</div><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/components/proposals/item.blade.php ENDPATH**/ ?>