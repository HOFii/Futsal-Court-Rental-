<?php if(!config('app.isMobile')): ?>
<style>
  #dekstop-home-1{        
    height:657px;
    max-width: 1349px;
    margin:auto;
    background:url('<?php echo e(asset('assets/images/home-background-1.png')); ?>') no-repeat;
    position:relative;
    margin-bottom: 10px;
  }

  #dekstop-home-1-position-1{
    position: absolute;
    top:20px;
    left:20px;
  }

  #dekstop-home-1-position-2{
    position: absolute;
    right:20px;
    top:20px;
  }

  #dekstop-home-1-position-3{
    position: absolute;
    color:white;
    left:50px;
    top:180px;
  }

  #dekstop-home-1-position-4{
    position: absolute;
    right:150px;
    top:100px;
    width:250px;
  }

  #dekstop-home-2{
    margin-bottom: 10px;
    background:url('<?php echo e(asset('assets/images/home-background-2.png')); ?>') no-repeat;     
    margin:auto;
    height:800px;
    max-width:1349px;
    padding:50px;
  }

  #dekstop-home-3{
    margin-bottom: 10px;
    background:url('<?php echo e(asset('assets/images/home-background-3.png')); ?>') no-repeat;     
    margin:auto;
    height:800px;
    max-width:1349px;
    padding:50px;
  }

  #dekstop-home-4{
    margin-bottom: 10px;
    background:url('<?php echo e(asset('assets/images/home-background-4.png')); ?>') no-repeat;     
    margin:auto;
    height:800px;
    max-width:1349px;
    padding:50px;
  }

  .cursor-pointer{
    cursor: pointer;
  }

  .font-size-30{
    font-size: 30px;
  }
</style>

<span class="d-none d-md-block d-lg-block d-xl-block d-xs-none d-sm-none">
  <div id="dekstop-home-1">
    <div id="dekstop-home-1-position-1" class='text-white'>
      <img src="<?php echo e(asset('assets/images/logo.png')); ?>">
    </div>

    <div id="dekstop-home-1-position-2">
      <div class="d-flex flex-row p-3 animated flipInX">
        <?php if(auth()->user()): ?>
        <button class="btn btn-success pl-5 pr-5 ml-2"
          onclick="window.location='<?php echo e(route('user.home')); ?>'">
          <i class='fe fe-inbox'></i> 
          Dashboard
        </button>

        <button class="btn btn-danger pl-5 pr-5 ml-2"
          onclick="window.location='<?php echo e(route('logout')); ?>'">
          <i class='fe fe-log-out'></i> 
          Keluar
        </button>
        <?php endif; ?>

        <?php if(!auth()->user()): ?>
        <button class="btn btn-success pl-5 pr-5 ml-2"
          onclick="window.location='<?php echo e(route('signup')); ?>'">
          <i class='fe fe-user-plus'></i> 
          Daftar
        </button>
        <button class="btn btn-success pl-5 pr-5 ml-2"
          onclick="window.location='<?php echo e(route('signin')); ?>'">
          <i class='fe fe-log-in'></i> 
          Masuk
        </button>
        <?php endif; ?>
      </div>
    </div>

    <div id="dekstop-home-1-position-3" class="animated flipInX">
      <div class="text-center font-size-30">
        Persewaan Lapangan Futsal
      </div>
      <div class="mt-3 text-center">
        Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum <br/>
        Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum <br/>
        Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum <br/>
        Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Lorem
      </div>
    </div>
  </div>

  <div id="dekstop-home-2">
    <div class="ml-3 font-size-30">
      Lokasi-Lokasi Kami
    </div>

    <div class="mt-3 ml-3">
      Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum <br/>
      Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum <br/>
      Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum Loremipsum <br/>        
    </div>

    <div class="d-flex flex-row flex-wrap mt-3"> 
      <?php $__currentLoopData = [1,2,3,4,5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                  
        <div class="col-3 mb-5 cursor-pointer"
          onclick="window.location=''">
          <img src="<?php echo e(asset('assets/images/locations/'.($item+1).'.png')); ?>"
            class="img-fluid">
        </div>      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    </div>       
  </div>

  <div id="dekstop-home-3">
    <div class="ml-3 font-size-30">
      Galeri
    </div>        

    <div class="d-flex flex-row flex-wrap mt-3">                  
      <?php $__currentLoopData = [1,2,3,4,5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-3 mb-5 cursor-pointer"
          onclick="window.location=''">
          <img src="<?php echo e(asset('assets/images/galeries/'.($item+1).'.png')); ?>"
            class="img-fluid">
        </div>              
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>       
  </div>

  <div id="dekstop-home-4">
    <div class="col-9" 
      style="margin:auto;position:relative">
      <img src="<?php echo e(asset('assets/images/home-ilustrasion-1.png')); ?>"
        class="img-fluid">
        
      <div 
        style="position: absolute;top:100px;left:350px;color:white;text-align:center">
        <?php if(!auth()->user()): ?>
         Daftar dan masuk sekarang juga
        <?php endif; ?>

        <?php if(auth()->user()): ?>
         Masuk ke dashboard user
        <?php endif; ?>

        <div class="d-flex flex-row p-3 mt-4">
          <?php if(auth()->user()): ?>
          <button class="btn btn-success pl-5 pr-5 ml-2"
            onclick="window.location='{route('user.home')}}'">
            <i class='fe fe-inbox'></i> 
            Dashboard
          </button>
          <button class="btn btn-danger pl-5 pr-5 ml-2"
            onclick="window.location='<?php echo e(route('logout')); ?>'">
            <i class='fe fe-log-out'></i> 
            Keluar
          </button>
          <?php endif; ?>

          <?php if(!auth()->user()): ?>
          <button class="btn btn-success pl-5 pr-5 ml-2"
            onclick="window.location='<?php echo e(route('signup')); ?>'">
            <i class='fe fe-user-plus'></i> 
            Daftar
          </button>
          <button class="btn btn-success pl-5 pr-5 ml-2"
            onclick="window.location='<?php echo e(route('signin')); ?>'">
            <i class='fe fe-log-in'></i> 
            Masuk
          </button>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</span>
<?php endif; ?><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/home/dekstop.blade.php ENDPATH**/ ?>