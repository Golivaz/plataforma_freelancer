<?php if (isset($component)) { $__componentOriginal09709a60206fbfd7afc18166a423fed7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal09709a60206fbfd7afc18166a423fed7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.card','data' => ['project' => $project]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['project' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal09709a60206fbfd7afc18166a423fed7)): ?>
<?php $attributes = $__attributesOriginal09709a60206fbfd7afc18166a423fed7; ?>
<?php unset($__attributesOriginal09709a60206fbfd7afc18166a423fed7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal09709a60206fbfd7afc18166a423fed7)): ?>
<?php $component = $__componentOriginal09709a60206fbfd7afc18166a423fed7; ?>
<?php unset($__componentOriginal09709a60206fbfd7afc18166a423fed7); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\plataforma_freelancer\resources\views/livewire/projects/show.blade.php ENDPATH**/ ?>