<div class="container mydiv">
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-unit', ['product'=> $product])->html();
} elseif ($_instance->childHasBeenRendered('jrErYbi')) {
    $componentId = $_instance->getRenderedChildComponentId('jrErYbi');
    $componentTag = $_instance->getRenderedChildComponentTagName('jrErYbi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jrErYbi');
} else {
    $response = \Livewire\Livewire::mount('product-unit', ['product'=> $product]);
    $html = $response->html();
    $_instance->logRenderedChild('jrErYbi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /Users/mac/Codes/training/Laravel/cartTraining/resources/views/livewire/product-container.blade.php ENDPATH**/ ?>