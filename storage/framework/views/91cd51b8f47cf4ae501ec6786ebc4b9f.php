<?php if(config('app.isMobile')): ?>
<style>
  #mobile-home-1{
    background:url('<?php echo e(asset('assets/images/mobile-background.png')); ?>') no-repeat;
    min-height: 550px;    
    width:360px;
  }

  #mobile-menu{
    position:fixed;
    top:0px;
    bottom:0px;
    width:100vh; 
    z-index:1001;
    display:none;
  }     

  .cursor-pointer{
    cursor: pointer;
  }

  .font-size-30{
    font-size: 30px;
  }

  .height-100{
    height: 100%;
  }

  .bg-default{
    background:#2358a1
  }
</style>

<span class="d-block d-md-none d-lg-none d-xl-none d-xs-block d-sm-block">
  <div id="mobile-home-1">
    <div class="clearfix">
      <div class="float-left p-4 text-white">
        <img src="<?php echo e(asset('assets/images/logo.png')); ?>"
          width="50px">             
      </div>

      <div class="float-right p-4 text-white" 
        onclick="toggleMenu()">
        <i class='fe fe-align-left font-size-30'></i>
      </div>
    </div>

    <div class="p-2 animated flipInX text-white">
      <div class="text-center mt-5 font-size-30">
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

  <div class="p-2">
    <div class="text-center font-size-30">
      Lokasi-Lokasi Kami
    </div>

    <div class="d-flex flex-row flex-wrap mt-3">                  
      <?php $__currentLoopData = [1,2,3,4,5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-12 mb-5 cursor-pointer"
        onclick="window.location=''">
        <img src="<?php echo e(asset('assets/images/locations/'.($item+1).'.png')); ?>"
          class="img-fluid">
      </div>              
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>  
  </div>

  <div class="p-2">
    <div class="text-center font-size-30">
      Galeri
    </div>   

    <div class="d-flex flex-row flex-wrap mt-3">                  
      <?php $__currentLoopData = [1,2,3,4,5]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-12 mb-5 cursor-pointer"
        onclick="window.location=''">
        <img src="<?php echo e(asset('assets/images/galeries/'.($item+1).'.png')); ?>"
          class="img-fluid">
      </div>                
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <div class="p-2">
    <div class="col-12"
      style="position:relative">
        <img src="<?php echo e(asset('assets/images/home-ilustrasion-2.png')); ?>" class="img-fluid">
        <div 
          style="position:absolute;top:40px;color:white;text-align:center;left:45px">
          <div class="d-flex flex-row p-2">
            <?php if(auth()->user()): ?>
              <button class="btn btn-success pl-3 pr-3 ml-3"
                onclick="window.location='<?php echo e(route('user.home')); ?>'">
                <i class='fe fe-inbox'></i>
                Dashboard
              </button>

              <button class="btn btn-danger pl-3 pr-3 ml-3"
                onclick="window.location='<?php echo e(route('logout')); ?>'">
                <i class='fe fe-log-out'></i>
                Keluar
              </button>                    
            <?php endif; ?>

            <?php if(!auth()->user()): ?>
              <button class="btn btn-success pl-3 pr-3 ml-5"
                onclick="window.location='<?php echo e(route('signup')); ?>'">
                <i class='fe fe-user-plus'></i> 
                Daftar
              </button>
              <br/>
              <button class="btn btn-success pl-3 pr-3 ml-4"
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

<div id="mobile-menu"
  class="container-fluid">
  <div class="row height-100"> 
    <div class="col-1 bg-light text-dark text-center pt-3">
      <i class='fe fe-x font-size-30' onclick="toggleMenu()"></i>
    </div>

    <div class="col-11 text-white bg-default">
      <?php if(!auth()->user()): ?>
      <div class="p-3 cursor-pointer"
        onclick="window.location='<?php echo e(route('signin')); ?>'">
        <i class='fe fe-log-in'></i> 
        Masuk
      </div>

      <div class="p-3 cursor-pointer"
        onclick="window.location='<?php echo e(route('signup')); ?>'">
        <i class='fe fe-user-plus'></i> 
        Daftar
      </div>
      <?php endif; ?>

      <?php if(auth()->user()): ?>
      <div class="p-3 cursor-pointer"
        onclick="window.location='<?php echo e(route('user.home')); ?>'">
        <i class='fe fe-inbox'></i> 
        Dashboard
      </div>

      <div class="p-3 cursor-pointer"
        onclick="window.location='<?php echo e(route('logout')); ?>'">
        <i class='fe fe-log-out'></i> 
        Keluar
      </div>
      <?php endif; ?>            
    </div>
  </div>
</div>
<?php endif; ?><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/home/mobile.blade.php ENDPATH**/ ?>