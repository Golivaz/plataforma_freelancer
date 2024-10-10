<?php if (isset($component)) { $__componentOriginaleadc632ec34ea4431915d1b6d5761baa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleadc632ec34ea4431915d1b6d5761baa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.proposals.index','data' => ['proposals' =>  $project->proposals]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('proposals'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['proposals' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $project->proposals)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleadc632ec34ea4431915d1b6d5761baa)): ?>
<?php $attributes = $__attributesOriginaleadc632ec34ea4431915d1b6d5761baa; ?>
<?php unset($__attributesOriginaleadc632ec34ea4431915d1b6d5761baa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleadc632ec34ea4431915d1b6d5761baa)): ?>
<?php $component = $__componentOriginaleadc632ec34ea4431915d1b6d5761baa; ?>
<?php unset($__componentOriginaleadc632ec34ea4431915d1b6d5761baa); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/livewire/projects/proposals.blade.php ENDPATH**/ ?>