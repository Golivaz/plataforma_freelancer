<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['project']));

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

foreach (array_filter((['project']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginaldae4cd48acb67888a4631e1ba48f2f93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldae4cd48acb67888a4631e1ba48f2f93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.card','data' => ['class' => 'col-span-2 ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-span-2 ']); ?>
    <div class="flex items-start justify-between pb-4">
        <div class="flex flex-col gap-[16px]">
            <div>
                <span
                    class="bg-[#C0F7B4] text-[#1D8338] rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide ">
                    <?php echo e($project->status->label()); ?>

                </span>
            </div>
            <h1 class="text-[28px] text-white leading-9">
                <?php echo e($project->title); ?>

            </h1>
            <div class="text-[#8C8C9A] text-[14px] leading-6">
                Publicado <?php echo e($project->created_at->diffForHumans()); ?>

            </div>
        </div>
        <div>
            <button class="bg-[#5354FD] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-[#1f20a6] transition duration-300 ease-in-out"
                @click="$refs.modal.showModal(); showModal= true">
                Enviar uma proposta
            </button>
            <div class="flex items-center justify-between mt-4 text-[14px]">
                <div class="text-[#8C8C9A]  leading-6">Encerra em:</div>
                <div class="font-bold flex items-center space-x-1">
                    <span class="text-white ">01</span><span>:</span>
                    <span class="text-white ">12</span><span>:</span>
                    <span class="text-white ">26</span><span>:</span>
                    <span class="text-white ">64</span>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 description">

        <?php echo html_entity_decode($project->description); ?>

    </div>

    <div class="py-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Tecnologias</div>
        <div class="flex gap-[8px] items-center pb-2">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $project->tech_stack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if (isset($component)) { $__componentOriginal3b31dd22251f57e3431c081e53af70df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b31dd22251f57e3431c081e53af70df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.tech','data' => ['icon' => $tech,'text' => $tech]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.tech'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tech),'text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tech)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b31dd22251f57e3431c081e53af70df)): ?>
<?php $attributes = $__attributesOriginal3b31dd22251f57e3431c081e53af70df; ?>
<?php unset($__attributesOriginal3b31dd22251f57e3431c081e53af70df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b31dd22251f57e3431c081e53af70df)): ?>
<?php $component = $__componentOriginal3b31dd22251f57e3431c081e53af70df; ?>
<?php unset($__componentOriginal3b31dd22251f57e3431c081e53af70df); ?>
<?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

    <div class="pt-4 space-y-4">
        <div class="uppercase font-bold text-[#8C8C9A] text-[12px]">Publicado Por</div>
        <div class="flex gap-[8px] items-center">
            <div>
                <?php if (isset($component)) { $__componentOriginald04dd79f9e235eb8e58dee4526a2f3c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald04dd79f9e235eb8e58dee4526a2f3c2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.avatar','data' => ['src' => ''.e($project->author->avatar).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e($project->author->avatar).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald04dd79f9e235eb8e58dee4526a2f3c2)): ?>
<?php $attributes = $__attributesOriginald04dd79f9e235eb8e58dee4526a2f3c2; ?>
<?php unset($__attributesOriginald04dd79f9e235eb8e58dee4526a2f3c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald04dd79f9e235eb8e58dee4526a2f3c2)): ?>
<?php $component = $__componentOriginald04dd79f9e235eb8e58dee4526a2f3c2; ?>
<?php unset($__componentOriginald04dd79f9e235eb8e58dee4526a2f3c2); ?>
<?php endif; ?>
            </div>

            <div>
                <div class="text-white text-[14px] font-bold tracking-wide">
                    <?php echo e($project->author->name); ?>

                </div>
                <div class="flex items-center space-x-[4px]">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = range(1, $project->author->stars); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $star): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal66fab9d4f9d32e62ed9841fa8aabde83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66fab9d4f9d32e62ed9841fa8aabde83 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.star','data' => ['class' => 'h-[14px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[14px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66fab9d4f9d32e62ed9841fa8aabde83)): ?>
<?php $attributes = $__attributesOriginal66fab9d4f9d32e62ed9841fa8aabde83; ?>
<?php unset($__attributesOriginal66fab9d4f9d32e62ed9841fa8aabde83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66fab9d4f9d32e62ed9841fa8aabde83)): ?>
<?php $component = $__componentOriginal66fab9d4f9d32e62ed9841fa8aabde83; ?>
<?php unset($__componentOriginal66fab9d4f9d32e62ed9841fa8aabde83); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldae4cd48acb67888a4631e1ba48f2f93)): ?>
<?php $attributes = $__attributesOriginaldae4cd48acb67888a4631e1ba48f2f93; ?>
<?php unset($__attributesOriginaldae4cd48acb67888a4631e1ba48f2f93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldae4cd48acb67888a4631e1ba48f2f93)): ?>
<?php $component = $__componentOriginaldae4cd48acb67888a4631e1ba48f2f93; ?>
<?php unset($__componentOriginaldae4cd48acb67888a4631e1ba48f2f93); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/components/project-card.blade.php ENDPATH**/ ?>