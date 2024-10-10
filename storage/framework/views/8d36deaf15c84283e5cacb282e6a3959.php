<?php if (isset($component)) { $__componentOriginaldae4cd48acb67888a4631e1ba48f2f93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldae4cd48acb67888a4631e1ba48f2f93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex items-center justify-between pb-4">
        <div class="flex flex-col ">
            <h2 class="text-[20px] text-white leading-9">
                Propostas
            </h2>
            <div class="text-[#8C8C9A] text-[12px]">
                Publicado há 4 horas
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <?php if (isset($component)) { $__componentOriginalb439c557fdbce4bab4898721a51332cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb439c557fdbce4bab4898721a51332cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.icons.people-group','data' => ['class' => 'w-[18px] h-[18px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.icons.people-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[18px] h-[18px]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb439c557fdbce4bab4898721a51332cd)): ?>
<?php $attributes = $__attributesOriginalb439c557fdbce4bab4898721a51332cd; ?>
<?php unset($__attributesOriginalb439c557fdbce4bab4898721a51332cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb439c557fdbce4bab4898721a51332cd)): ?>
<?php $component = $__componentOriginalb439c557fdbce4bab4898721a51332cd; ?>
<?php unset($__componentOriginalb439c557fdbce4bab4898721a51332cd); ?>
<?php endif; ?>
            <span><?php echo e(sizeOf($proposals)); ?></span>
        </div>
    </div>

    <div class="py-4">
        <div class="flex flex-col gap-7">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $proposals->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proposal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal764176a08c4bb1b8abe72925c9b0490c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal764176a08c4bb1b8abe72925c9b0490c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.proposals.item','data' => ['proposal' => $proposal,'position' => $loop->index]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('proposals.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['proposal' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($proposal),'position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop->index)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal764176a08c4bb1b8abe72925c9b0490c)): ?>
<?php $attributes = $__attributesOriginal764176a08c4bb1b8abe72925c9b0490c; ?>
<?php unset($__attributesOriginal764176a08c4bb1b8abe72925c9b0490c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal764176a08c4bb1b8abe72925c9b0490c)): ?>
<?php $component = $__componentOriginal764176a08c4bb1b8abe72925c9b0490c; ?>
<?php unset($__componentOriginal764176a08c4bb1b8abe72925c9b0490c); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="mt-6">
            <button class="bg-[#181826] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-[#373751] transition duration-300 ease-in-out w-full">
                Carregar Mais
            </button>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/components/proposals/index.blade.php ENDPATH**/ ?>