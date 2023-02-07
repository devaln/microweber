<div class="pt-0">

    <?php echo $__env->make('content::admin.content.index-page-category-tree', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="module-content">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-list', [])->html();
} elseif ($_instance->childHasBeenRendered('NKufTSC')) {
    $componentId = $_instance->getRenderedChildComponentId('NKufTSC');
    $componentTag = $_instance->getRenderedChildComponentTagName('NKufTSC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NKufTSC');
} else {
    $response = \Livewire\Livewire::mount('admin-content-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('NKufTSC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-content-bulk-options', [])->html();
} elseif ($_instance->childHasBeenRendered('jYJnBsl')) {
    $componentId = $_instance->getRenderedChildComponentId('jYJnBsl');
    $componentTag = $_instance->getRenderedChildComponentTagName('jYJnBsl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jYJnBsl');
} else {
    $response = \Livewire\Livewire::mount('admin-content-bulk-options', []);
    $html = $response->html();
    $_instance->logRenderedChild('jYJnBsl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>
</div>

<?php echo $__env->make('content::admin.content.index-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\workspace\microweber\src\MicroweberPackages\Content\resources\views/admin/content/index.blade.php ENDPATH**/ ?>