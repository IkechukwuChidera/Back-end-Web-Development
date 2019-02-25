
<table>

    <tbody> 
        
    
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexcar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr> <?php echo e($loop->index+1); ?>  </tr>
            <tr> <?php echo e($indexcar); ?> <br> </tr>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </tbody>

     
</table>






