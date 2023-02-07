<?php
$randomId = uniqid();
?>

<div class="card-header bg-white px-1">
    <div data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo e($randomId); ?>"  aria-expanded="true" class="d-flex">
        <h6><?php _e('Tags') ?></h6>
        <i class="mdi mdi-plus ms-auto align-self-center"></i>
    </div>
</div>

<div class="collapse show" id="collapse_<?php echo e($randomId); ?>">
    <div class="card-body px-1">
        <div class="filter-tags">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button class="btn btn-outline-primary btn-sm js-filter-tag m-1 <?php if($tag->active): ?> active <?php endif; ?>" data-slug="<?php echo e($tag->slug); ?>"><?php echo e($tag->name); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Blog\resources\views\/partials/tags.blade.php ENDPATH**/ ?>