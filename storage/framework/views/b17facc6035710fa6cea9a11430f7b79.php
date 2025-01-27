<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo e(asset('assets/images/logo-header.png')); ?>" type="image/x-icon"/>  
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/logo-header.png')); ?>" />
    <title>Masuk</title>  
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/toastr.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/sweetalert2.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.css')); ?>">   
    <style>
    .parsley-errors-list{
      color:red;
      list-style:none;
      padding-left:10px;
      padding-top:3px;
      margin:0px;
      opacity: 0.8;
      font-size: 13px;
      text-align: right;
    }
    </style> 
  </head>
  <body class="bg-white">   
    <div class="col-md-9 m-auto">
      <div class="row mt-5">
        <div class="col-md-7 mt-5">
          <img src="<?php echo e(asset('assets/images/welcome.png')); ?>" class="img-fluid animated flipInX">          
        </div>
        <div class="col-md-5 mt-5 animated flipInX">
          <div class="clearfix" 
            style="margin-top:40px">
            <div class="float-left">
              Masuk ke akun sekarang juga 
            </div>
            <div class="float-right">
              <a href="<?php echo e(route('home')); ?>">Kembali</a>
            </div>
          </div>
          <form class="mt-4" method="post" action="<?php echo e(route('signin')); ?>" id="form-signin">
            <?php echo e(csrf_field()); ?>

            
            <div class="form-group">
              <div class="mt-2">Email</div>
              <div class="mt-2">
                  <input type="email" class="form-control" placeholder="Email . . ." name="email"
                    value="<?php echo e(old('email','')); ?>"
                    data-parsley-required>
                  <small class="text-muted">Masukan Email</small>
              </div>              
            </div>

            <div class="form-group">
              <div class="mt-2">Password</div>
              <div class="mt-2">
                <input type="password" class="form-control" placeholder="Password . . ." name="password"
                  value="<?php echo e(old('password','')); ?>"
                  data-parsley-required>
                <small class="text-muted">Masukan Password</small>
              </div>
            </div>

            <div class="form-group">
              <button class="btn btn-success btn-block"><i class='fe fe-send'></i> Kirim</button>
            </div>

            <div class="form-group">
              <a href="<?php echo e(route('signup')); ?>">Belum punya akun</a>
            </div>
          </form>
        </div>
      </div>
    </div>  	
    
    <script src="<?php echo e(asset('assets/js/vendors/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/moment-with-locales.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendors/bootstrap.bundle.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/parsley.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('assets/js/i18n/id.js')); ?>"></script> 
    <script src="<?php echo e(asset('assets/js/sweetalert2.min.js')); ?>"></script>    

    <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register("<?php echo e(asset('service-worker.js')); ?>")
      .then(registration => {        
        console.log('SUCCESS REGISTER SW');
       }).catch(() => {    
        console.log('FAILED REGISTER SW');
      });
    } else {
        console.log('SW NOT FOUND');
    }
    </script>

    <script>
    $("#form-signin").parsley().on('form:validate',function(){
      if(this.isValid()){
        $(".btn-success").attr("disabled",true);
      }else{
        toastr.warning("Sepertinya ada data yang belum valid","");
      }  
    });
    </script>

    <?php if(Session::has("comeback")): ?>
      <?php if(Session::get("comeback")["message"] == "failed"): ?>
      <script>
        toastr.error("<?php echo e(Session::get("comeback")["failed"]); ?>","");
      </script>
      <?php endif; ?>

      <?php if(Session::get("comeback")["message"] == "success"): ?>
      <script>
        toastr.success("<?php echo e(Session::get("comeback")["success"]); ?>","");
      </script>
      <?php endif; ?>
    <?php endif; ?>
  </body>
</html><?php /**PATH C:\Users\HOFi Desuka\LARAVEL\zbola\resources\views/signin.blade.php ENDPATH**/ ?>