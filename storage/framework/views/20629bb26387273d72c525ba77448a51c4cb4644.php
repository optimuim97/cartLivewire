<div>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <i class="fas fa-shopping-cart"> <?php echo e(Cart::count()); ?> </i>
        </a>
    </nav>
    <div class="container">
        <ul class="list-group">
            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                <li class="list-group-item"> Titre: <?php echo e($item->name); ?> | Quantite : <?php echo e($item->qty); ?> | Prix : <?php echo e($item->price); ?> |  Prix : <?php echo e($item->price); ?></li>
                <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <h4> Prix Total : <?php echo e(Cart::PriceTotal()); ?> </h4>

        </ul>
    </div>

</div>






<?php /**PATH /Users/mac/Codes/training/Laravel/cartTraining/resources/views/livewire/navabar.blade.php ENDPATH**/ ?>