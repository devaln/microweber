<div class="card style-1 mb-3">

    <?php echo $__env->make('content::admin.content.livewire.card-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card-body pt-3">

        <div class="no-items-found">

            <div class="row">
                <div class="col-12">
                    <div class="no-items-box" style="background-image: url('<?php print modules_url(); ?>microweber/api/libs/mw-ui/assets/img/no_products.svg'); ">


                        <?php if(isset($inPage) and $inPage): ?>
                            <?php if($contentType == 'content'): ?>
                                <h4><?php _e('You don’t have any content in this page'); ?></h4>
                                <p><?php _e('Create your first content right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'post'): ?>
                                <h4><?php _e('You don’t have any post in this page'); ?></h4>
                                <p><?php _e('Create your first post right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'product'): ?>
                                <h4><?php _e('You don’t have any product in this page'); ?></h4>
                                <p><?php _e('Create your first product right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'page'): ?>
                                <h4><?php _e('You don’t have any sub pages in this page'); ?></h4>
                                <p><?php _e('Create your first page right now.');?></p>
                            <?php endif; ?>
                        <?php elseif(isset($inCategory) and $currentCategory): ?>
                            <?php if($contentType == 'content'): ?>
                                <h4><?php _e('You don’t have any content in'); ?>  <?php echo e($currentCategory['title']); ?></h4>
                                <p><?php _e('Create your first content right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'post'): ?>
                                <h4><?php _e('You don’t have any posts in'); ?>  <?php echo e($currentCategory['title']); ?></h4>
                                <p><?php _e('Create your first post right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'product'): ?>
                                <h4><?php _e('You don’t have any products in'); ?>  <?php echo e($currentCategory['title']); ?></h4>
                                <p><?php _e('Create your first product right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'page'): ?>
                                <h4><?php _e('You don’t have any pages in'); ?>  <?php echo e($currentCategory['title']); ?></h4>
                                <p><?php _e('Create your first page right now.');?></p>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if($contentType == 'content'): ?>
                                <h4><?php _e('You don’t have any content'); ?></h4>
                                <p><?php _e('Create your first content right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'post'): ?>
                                <h4><?php _e('You don’t have any post'); ?></h4>
                                <p><?php _e('Create your first post right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'product'): ?>
                                <h4><?php _e('You don’t have any product'); ?></h4>
                                <p><?php _e('Create your first product right now.');?></p>
                            <?php endif; ?>

                            <?php if($contentType == 'page'): ?>
                                <h4><?php _e('You don’t have any page'); ?></h4>
                                <p><?php _e('Create your first page right now.');?></p>
                            <?php endif; ?>
                        <?php endif; ?>


                        <p><?php _e( 'You are able to do that in very easy way!'); ?></p>

                        <br/>

                        <?php echo $__env->make('content::admin.content.livewire.create-content-buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Content\resources\views/admin/content/livewire/no-active-content.blade.php ENDPATH**/ ?>