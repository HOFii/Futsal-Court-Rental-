

<?php $__env->startSection("title"); ?>
Lapangan
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sc_header"); ?>
<style>
.cursor-pointer{
	cursor:pointer;
}

.img-product{
	height:150px;
	object-fit:cover;
}

.pagination-wareper{
	max-width:350px;
	overflow-x:auto
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
	<div class="container">
		<div class="row">	
        	<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top cursor-pointer img-product" 
							src="<?php echo e(asset('assets/images/products/'.json_decode($item->images)[0])); ?>"
							onclick="window.location='<?php echo e(url('user/product/'.$item->id)); ?>'">

						<div class="card-body">
							<div class="clearfix mb-1">
								<div class="float-left cursor-pointer" 
									onclick="window.location='<?php echo e(url('user/product/'.$item->id)); ?>'">
									<?php echo e(ucwords($item->address)); ?>

								</div>
								<div class="float-right">
									<?php echo $item->get_star; ?>

								</div>
							</div>

							<div class="mb-1">
								Rp.<?php echo e(number_format($item->price,2)); ?>

							</div>

							<div class="text-danger mb-3">
								<?php if($item->rent): ?>
								 <span class="text-danger">Tersewa</span>
								<?php else: ?>
								 <span class="text-success">Tidak Tersewa</span>
								<?php endif; ?>
							</div>

							<div class="text-center">
								<button class="btn btn-success"
									onclick="window.location='<?php echo e(url('user/order/'.$item->id)); ?>'">
									Masukan ke invoice
								</button>
							</div>
						</div>
					</div>
				</div>
        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        	<div class="pagination-wareper">
        		<?php echo e($product->links()); ?>

        	</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout.default", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/user/product.blade.php ENDPATH**/ ?>