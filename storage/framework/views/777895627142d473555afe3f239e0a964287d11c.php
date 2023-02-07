<th scope="col">
    <div>
        <?php echo e($name); ?>

        <span style="font-size: 15px;cursor: pointer">
            <?php if(isset($filters['orderBy']) && !empty($filters['orderBy'])): ?>
                <?php if($filters['orderBy'] == $key . ',desc'): ?>
                    <i class="fa fa-arrow-down" wire:click="orderBy('<?php echo e($key); ?>,asc')"></i>
                <?php elseif($filters['orderBy'] == $key . ',asc'): ?>
                    <i class="fa fa-arrow-up" wire:click="orderBy('<?php echo e($key); ?>,desc')"></i>
                <?php else: ?>
                <i class="fa fa-sort" wire:click="orderBy('<?php echo e($key); ?>,desc')"></i>
                <?php endif; ?>
            <?php else: ?>
                <i class="fa fa-sort " wire:click="orderBy('<?php echo e($key); ?>,desc')"></i>
            <?php endif; ?>
        </span>
    </div>
</th>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Content\resources\views/admin/content/livewire/table-includes/table-th.blade.php ENDPATH**/ ?>