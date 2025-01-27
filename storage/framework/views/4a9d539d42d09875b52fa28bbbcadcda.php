

<?php $__env->startSection("title"); ?>
	Notifikasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection("sc_header"); ?>
<style>
.font-size-50{
	font-size: 50px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div class="container">
	<div class="clearfix mb-4">
		<div class="float-left">
			<h3>Riwayat Notifikasi</h3>
		</div>

		<div class="float-right">
			<form>
				<input type="text" class="form-control" placeholder="Search . . ." value="<?php echo e($search); ?>"
					name="search"
					onkeyup="event.key == 13 ? this.form.submit() : ''">
			</form>
		</div>
	</div>

	<?php if(!count($notification)): ?>
	<div class="card">
		<div class="card-body">
			<div class="col-md-5 m-auto text-center">
				<img src="<?php echo e(asset('assets/images/404.png')); ?>"
					class="img-fluid">
				<h5>Data notifikasi tidak ditemukan</h5>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<?php $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class='col-md-1'>
					<div class="clearfix">
						<div class="float-left">
							<i class='fe fe-bell font-size-50'></i>
						</div>
						<div class="float-right d-block d-md-none">
							<?php echo e($item->get_human_created_at); ?>

						</div>
					</div>
				</div>

				<div class="col-md-11 pl-0">
					<div class="row">
						<div class="col-12">
							<div class="clearfix">
								<div class="float-left">
									<b><?php echo e($item->title); ?></b>
								</div>
								<div class="float-right d-none d-md-block">
									<?php echo e($item->get_human_created_at); ?>

								</div>
							</div>
						</div>
						<div class="col-12">
							<?php echo e($item->content); ?>

						</div>												
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<div class="col-12">
       <?php echo e($notification->links()); ?>

   	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.layout.default", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/user/notification.blade.php ENDPATH**/ ?>