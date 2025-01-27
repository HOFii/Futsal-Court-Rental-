

<?php $__env->startSection("title"); ?>
Pembayaran Manual
<?php $__env->stopSection(); ?>
<style>
.main-image {
	cursor:pointer;
	height:200px;
	object-fit:cover;
}
.description {
	background:#eee
}
</style>
<?php $__env->startSection("sc_header"); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container">
	<div class="clearfix mb-4">
		<div class="float-left">
			<h3>Pembayaran Manual</h3>
		</div>

		<div class="float-right">
			<form>
				<input type="text" class="form-control" placeholder="Search . . ." value="<?php echo e($search); ?>"
					name="search"
					onkeyup="event.key == 13 ? this.form.submit() : ''">
			</form>
		</div>
	</div>

	<?php if(!count($manualPayment)): ?>
	<div class="card">
		<div class="card-body">
			<div class="col-md-5 m-auto text-center">
				<img src="<?php echo e(asset('assets/images/404.png')); ?>"
					class="img-fluid">
				<h5>Data pembayaran manual tidak ditemukan</h5>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row">
		<?php $__currentLoopData = $manualPayment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-3">
			<div class="card">
				<img class="card-img-top main-image" 
					src="<?php echo e(asset('assets/images/proofs/'.$item->proof)); ?>"
					onclick="window.location='<?php echo e(asset('assets/images/proofs/'.$item->proof)); ?>'">		

				<div class="card-body">
					<div class="p-1 mb-4">
						<a href="<?php echo e(url('user/product/'.$item->invoice->product->id)); ?>">
							<?php echo e(ucwords($item->invoice->product->address)); ?>

						</a>
					</div>

					<div class="p-3 mb-2 description">
						<?php echo e(ucwords($item->description)); ?>

					</div>					

					<div class="clearfix">
						<div class="float-left">
							<?php if($item->status == "validasi"): ?>
							 <span class="badge badge-primary">
							 	Validasi
							 </span>
							<?php elseif($item->status == "success"): ?>
							 <span class="badge badge-success">
							 	Berhasil
							 </span>
							<?php elseif($item->status == "failed"): ?>
							 <span class="badge badge-danger">
							 	Gagal
							 </span>
							<?php endif; ?>
						</div>

						<div class="float-right">
							<?php echo e($item->get_human_created_at); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>

	<div class="col-12">
       <?php echo e($manualPayment->links()); ?>

   	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout.default", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/user/manual-payment.blade.php ENDPATH**/ ?>