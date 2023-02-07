<?php
$randomId = uniqid();
?>

<div class="card-header bg-white px-1">
    <div data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo e($randomId); ?>"  aria-expanded="true" class="d-flex">
        <h6><?php _e('Categories') ?></h6>
        <i class="mdi mdi-plus ms-auto align-self-center"></i>
    </div>
</div>

<div class="collapse show" id="collapse_<?php echo e($randomId); ?>">
    <div class="card-body px-1">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <ul class="js-filter-category-tree list-unstyled">
                <li class="mw-shop-attributes-li title pb-1">
                    <a href="<?php echo e($category->link()); ?>" data-category-id="<?php echo e($category->id); ?>" class="js-filter-category-link <?php if($request->get('category', false) == $category->id): ?> active <?php endif; ?> "><?php echo e($category->title); ?></a>
                    <?php if(in_array($category->id, $categoriesActiveIds)): ?>
                        <button type="button" data-key="category" data-value="<?php echo e($category->id); ?>" class="btn btn-link js-filter-picked">
                            <i class="mdi mdi-close ml-2"></i>
                        </button>
                    <?php endif; ?>
                </li>
                <?php if($category->children()->count() > 0): ?>
                    <?php echo $__env->make('blog::partials.categories_children', ['categories' => $category->children], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Blog\resources\views\/partials/categories.blade.php ENDPATH**/ ?>