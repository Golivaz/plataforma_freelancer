<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['position']));

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

foreach (array_filter((['position']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<div
    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        "flex items-center justify-center rounded-full w-[40px] h-[40px]",
        "bg-[#FEF3C7] text-[#F59E0B]" => $position == 0,
        "bg-[#F1F5F9] text-[#94A3B8]" => $position == 1,
        "bg-[#FFEDD5] text-[#B45309]" => $position == 2,
        "bg-[#C0F7B4]" => $position == 3,
        "bg-[#FECDD3]" => $position == 4,
        "bg-[#F1F5F9]" => $position > 4,

    ]); ?>">
    <!--[if BLOCK]><![endif]--><?php if($position < 3): ?>
        <?php if (isset($component)) { $__componentOriginal4f32bfaf2176a21cce47457a9f18d512 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f32bfaf2176a21cce47457a9f18d512 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.trophy','data' => ['class' => 'w-[24px] h-[24px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.trophy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[24px] h-[24px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4f32bfaf2176a21cce47457a9f18d512)): ?>
<?php $attributes = $__attributesOriginal4f32bfaf2176a21cce47457a9f18d512; ?>
<?php unset($__attributesOriginal4f32bfaf2176a21cce47457a9f18d512); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f32bfaf2176a21cce47457a9f18d512)): ?>
<?php $component = $__componentOriginal4f32bfaf2176a21cce47457a9f18d512; ?>
<?php unset($__componentOriginal4f32bfaf2176a21cce47457a9f18d512); ?>
<?php endif; ?>
    <?php elseif($position == 3): ?>
        <?php if (isset($component)) { $__componentOriginalc692d327ec5463718515834144339931 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc692d327ec5463718515834144339931 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.arrow-up','data' => ['class' => 'w-[24px] h-[24px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.arrow-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[24px] h-[24px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc692d327ec5463718515834144339931)): ?>
<?php $attributes = $__attributesOriginalc692d327ec5463718515834144339931; ?>
<?php unset($__attributesOriginalc692d327ec5463718515834144339931); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc692d327ec5463718515834144339931)): ?>
<?php $component = $__componentOriginalc692d327ec5463718515834144339931; ?>
<?php unset($__componentOriginalc692d327ec5463718515834144339931); ?>
<?php endif; ?>
    <?php elseif($position == 4): ?>
        <?php if (isset($component)) { $__componentOriginale3a33c7a0ef59139124466e0aec1316f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3a33c7a0ef59139124466e0aec1316f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.arrow-down','data' => ['class' => 'w-[24px] h-[24px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.arrow-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[24px] h-[24px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3a33c7a0ef59139124466e0aec1316f)): ?>
<?php $attributes = $__attributesOriginale3a33c7a0ef59139124466e0aec1316f; ?>
<?php unset($__attributesOriginale3a33c7a0ef59139124466e0aec1316f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3a33c7a0ef59139124466e0aec1316f)): ?>
<?php $component = $__componentOriginale3a33c7a0ef59139124466e0aec1316f; ?>
<?php unset($__componentOriginale3a33c7a0ef59139124466e0aec1316f); ?>
<?php endif; ?>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal42a1bb90cd4debe3e64a098292cabbe4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42a1bb90cd4debe3e64a098292cabbe4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.minus','data' => ['class' => 'w-[24px] h-[24px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.minus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[24px] h-[24px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42a1bb90cd4debe3e64a098292cabbe4)): ?>
<?php $attributes = $__attributesOriginal42a1bb90cd4debe3e64a098292cabbe4; ?>
<?php unset($__attributesOriginal42a1bb90cd4debe3e64a098292cabbe4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42a1bb90cd4debe3e64a098292cabbe4)): ?>
<?php $component = $__componentOriginal42a1bb90cd4debe3e64a098292cabbe4; ?>
<?php unset($__componentOriginal42a1bb90cd4debe3e64a098292cabbe4); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/components/proposals/position.blade.php ENDPATH**/ ?>