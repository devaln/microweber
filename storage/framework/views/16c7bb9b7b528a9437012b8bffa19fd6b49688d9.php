<?php echo $products->scripts(); ?>


<?php
$filtersSort = json_decode(get_option('filters-sort', $moduleId), true);
?>

<section class="section container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="card border-0 text-dark bg-white">

                <?php echo $products->filtersActive(); ?>


                <?php if(!empty($filtersSort)): ?>
                    <?php $__currentLoopData = $filtersSort; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filterSort): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($filterSort == 'search'): ?>
                            <?php echo $products->search(); ?>

                        <?php endif; ?>

                        <?php if($filterSort == 'categories'): ?>
                            <?php echo $products->categories(); ?>

                        <?php endif; ?>

                        <?php if($filterSort == 'tags'): ?>
                            <?php echo $products->tags(); ?>

                        <?php endif; ?>

                        <?php if($filterSort == 'filters'): ?>
                            <?php echo $products->filters(); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php echo $products->search(); ?>

                    <?php echo $products->categories(); ?>

                    <?php echo $products->tags(); ?>

                    <?php echo $products->filters(); ?>

                <?php endif; ?>

            </div>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-lg-7 col-lg-2 col-lg-5 py-lg-0 py-4">
                    <p> <?php _e("Displaying"); ?> <?php echo e($products->count()); ?> <?php _e("of"); ?> <?php echo e($products->total()); ?>  <?php _e("result(s)"); ?>.</p>
                </div>
                <div class="col-xl-6 col-lg-7 col-lg-5 d-block d-sm-flex justify-content-end ms-auto">
                    <div class="col-md-6 col-sm px-1 ms-auto"><?php echo $products->limit(); ?></div>
                    <div class="col-md-6 col-sm px-1 ms-auto"><?php echo $products->sort(); ?></div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $products->results(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php
                        /* @var $product \MicroweberPackages\Product\Models\Product */

                        ?>
                    <div class="col-xl-4 col-lg-6 col-sm-12 mb-5">
                        <a href="<?php echo e(content_link($product->id)); ?>">
                            <div class="img-as-background square-75 h-350 position-relative">

                                <div <?php if($product->getContentDataByFieldName('label-color')): ?>
                                         style="background-color: <?php echo e($product->getContentDataByFieldName('label-color')); ?> "
                                    <?php endif; ?> >
                                    <?php if($product->getContentDataByFieldName('label-type') == 'percent'): ?>
                                        <div class="discount-label">
                                                <span class="discount-percentage">
                                                      <?php echo e($product->getDiscountPercentage()); ?> %
                                                </span>
                                            <span class="discount-label-text"><?php _lang("Discount"); ?></span>
                                        </div>

                                    <?php endif; ?>
                                    <?php if($product->getContentDataByFieldName('label-type') == 'text' and $product->getContentDataByFieldName('label')): ?>

                                            <div class="position-absolute  top-0 left-0 m-2" style="z-index: 3;">
                                                <div class="badge text-white px-3 pb-1 pt-2 rounded-0" style="background-color: <?php echo e($product->getContentDataByFieldName('label-color')); ?>;"><?php echo e($product->getContentDataByFieldName('label')); ?></div>
                                            </div>
                                    <?php endif; ?>
                                </div>

                                <img src="<?php echo e($product->thumbnail(1000,1000)); ?>" />

                            </div>
                            <h6 class="mt-3"><?php echo e($product->title); ?></h6>
                        </a>


                        <p><?php echo e($product->content_text); ?></p>




                        <div class="d-flex">
                            <p class="col-6 mb-0">
                                <?php if($product->hasSpecialPrice()): ?>
                                    <span class="price-old"><?php print currency_format($product->price); ?></span>
                                    <span class="money"><?php print currency_format($product->specialPrice); ?></span>
                                <?php else: ?>
                                    <span class="money"><?php print currency_format($product->price); ?></span>
                                <?php endif; ?>
                            </p>

                            <a class="col-6 text-end text-right align-self-center" href="<?php echo e(content_link($product->id)); ?>"> View</a>
                        </div>

                        
                            
                        
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo $products->pagination(); ?>

        </div>
    </div>
</section>








<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Shop\resources\views\/index.blade.php ENDPATH**/ ?>