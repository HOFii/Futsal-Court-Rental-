

<?php $__env->startSection("title"); ?>
Riwayat Invoice
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container">
	<div class="clearfix mb-4">
		<div class="float-left">
			<h3>Riwayat Invoice</h3>
		</div>

		<div class="float-right">
			<form>
				<input type="text" class="form-control" placeholder="Search . . ." value="<?php echo e($search); ?>"
					name="search"
					onkeyup="event.key == 13 ? this.form.submit() : ''">
			</form>
		</div>
	</div>

	<?php if(!count($invoice)): ?>
	<div class="card">
		<div class="card-body">
			<div class="col-md-5 m-auto text-center">
				<img src="<?php echo e(asset('assets/images/404.png')); ?>"
					class="img-fluid">
				<h5>Data invoice tidak ditemukan</h5>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class='col-3'>
					<img src="<?php echo e(asset('assets/images/products/'.$item->product->get_images[0])); ?>"
						class="img-fluid">
				</div>

				<div class="col-9">
					<div class="row">
						<div class="col-12">
							<div class="clearfix">
								<div class="float-left">
									<a href="<?php echo e(url('user/product/'.$item->product->id)); ?>">
										<h4>
											<?php echo e(ucwords($item->product->address)); ?>

										</h4>
									</a>
								</div>

								<div class="float-right">
									<?php if($item->status == "pending"): ?>	
									 <span class="badge badge-warning">
									 	Pending
									 </span>
									<?php elseif($item->status == "waiting"): ?>
									 <span class="badge badge-warning">
									 	Menunggu
									 </span>
									<?php elseif($item->status == "payment"): ?>
									 <span class="badge badge-success">
									 	Pembayaran
									 </span>
									<?php elseif($item->status == "running"): ?>
									 <span class="badge badge-warning">
									 	Berjalan
									 </span>
									<?php elseif($item->status == "canceled"): ?>
									 <span class="badge badge-danger">
									 	Dibatalkan
									 </span>
									<?php elseif($item->status == "failed"): ?>
									 <span class="badge badge-danger">
									 	Digagalkan
									 </span>
									<?php elseif($item->status == "rejected"): ?>
									 <span class="badge badge-danger">
									 	Ditolak
									 </span>
									<?php elseif($item->status == "compeleted"): ?>
									 <span class="badge badge-success">
									 	Selesai
									 </span>
									<?php endif; ?>
								</div>
							</div>
						</div>

						<div class="col-12">
							<h5 class='text-success'>
								Rp.<?php echo e(number_format($item->product->price,2)); ?> Perjam
							</h5>
						</div>
					
						<div class="col-12 mt-2">
							<b>
								Total : Rp.<?php echo e(number_format($item->total,2)); ?> - (<?php echo e($item->hour); ?> Jam)
							</b>
						</div>

						<div class="col-12 mt-5">
							<div class="clearfix">									
								<div class="float-left">
									<b>
										Tanggal Mulai : <?php echo e($item->start_rent); ?>

									</b>
								</div>
								<div class="float-right">
									<b>
										Dibuat Pada : <?php echo e($item->created_at); ?>

									</b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<div class="col-12">
       <?php echo e($invoice->links()); ?>

   	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout.default", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/user/invoice-history.blade.php ENDPATH**/ ?>