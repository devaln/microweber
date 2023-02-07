<form class="js-filter-form" method="get">
<?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filterKey=>$filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if ($__env->exists('blog::partials.filters.' . $filter->controlType)) echo $__env->make('blog::partials.filters.' . $filter->controlType, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($showApplyFilterButton): ?>
    <div class="card-body px-1">
        <button type="button" class="btn btn-success js-filter-apply"><?php echo e(_e('Apply Filters')); ?></button>
    </div>
    <?php endif; ?>

</form>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Blog\resources\views\/partials/filters.blade.php ENDPATH**/ ?>