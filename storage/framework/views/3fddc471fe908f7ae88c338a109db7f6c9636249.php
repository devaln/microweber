<div>
    <table class="table table-responsive" id="content-results-table">
        <thead>
        <tr>
            <th style="width:10px" scope="col">
                <?php echo $__env->make('content::admin.content.livewire.table-includes.select-all-checkbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </th>
            <?php if($showColumns['id']): ?>
                <?php echo $__env->make('content::admin.content.livewire.table-includes.table-th',['name'=>'ID', 'key'=>'id', 'filters'=>$filters], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php if($showColumns['image']): ?>
                <th style="width: 130px" scope="col">Image</th>
            <?php endif; ?>
            <?php if($showColumns['title']): ?>
                <th scope="col">Title</th>
            <?php endif; ?>
            <?php if($showColumns['author']): ?>
                <th scope="col">Author</th>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php if(count($contents)==0): ?>
            <tr>
                <td colspan="<?php echo e(count($showColumns)); ?>">
                    <?php echo e(_e('No items found')); ?>

                </td>
            </tr>
        <?php endif; ?>
        <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="manage-post-item manage-post-item-<?php echo e($content->id); ?>">
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="<?php echo e($content->id); ?>" id="js-content-checkbox-<?php echo e($content->id); ?>"  class="js-select-posts-for-action custom-control-input"  wire:model="checked">
                        <label for="js-content-checkbox-<?php echo e($content->id); ?>" class="custom-control-label"></label>
                    </div>

                    <span class="btn btn-link text-muted px-0 js-move mw_admin_posts_sortable_handle" onmousedown="mw.manage_content_sort()">
                    <i class="mdi mdi-cursor-move"></i>
                </span>
                </td>
                <?php if($showColumns['id']): ?>
                    <td>
                        <?php echo e($content->id); ?>

                    </td>
                <?php endif; ?>
                <?php if($showColumns['image']): ?>
                    <td>
                        <?php echo $__env->make('content::admin.content.livewire.components.picture', ['content'=>$content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                <?php endif; ?>
                <?php if($showColumns['title']): ?>
                    <td>

                        <?php echo $__env->make('content::admin.content.livewire.components.title-and-categories', ['content'=>$content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('content::admin.content.livewire.components.manage-links', ['content'=>$content], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </td>
                <?php endif; ?>

                <?php if($showColumns['author']): ?>
                    <td>
                        <?php echo e($content->authorName()); ?>

                    </td>
                <?php endif; ?>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Content\resources\views/admin/content/livewire/display-types/table.blade.php ENDPATH**/ ?>