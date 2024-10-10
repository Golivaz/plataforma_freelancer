<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status']));

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

foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<span <?php echo e($attributes->class([

    'rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide',

    'bg-[#C0F7B4] text-[#1D8338] ' => $status == App\ProjectStatus::Open,
    'bg-[#FECDD3] text-[#881337] ' => $status == App\ProjectStatus::Closed,

])); ?>>

    <?php echo e($status->label()); ?>

</span><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/components/projects/status.blade.php ENDPATH**/ ?>