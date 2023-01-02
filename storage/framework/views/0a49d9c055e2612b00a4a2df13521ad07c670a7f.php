<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo e(asset('panel/assets/images/favicon.png')); ?>" >
        <!--Page title-->
        <title>Seller easy Learning</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="<?php echo e(asset('panel/assets/css/bootstrap.min.css')); ?> ">
        <!--font awesome-->
        <link rel="stylesheet" href="<?php echo e(asset('panel/assets/css/all.min.css')); ?> ">
        <!-- metis menu -->
        <link rel="stylesheet" href="<?php echo e(asset('panel/assets/plugins/metismenu/assets/css/metisMenu.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('panel/assets/plugins/metismenu/assets/css/mm-vertical-hover.css')); ?>">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="<?php echo e(asset('panel/assets/css/style.css')); ?> ">
    </head>
    <body id="page-top">
        <!-- preloader -->
        

        
        <!-- wrapper -->
          <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                    <!-- page content -->
                    <div class="login_page center_container">
                        <div class="center_content">
                            <div class="logo">
                                <img src="<?php echo e(asset('panel/assets/images/logo.png')); ?> " alt="" class="img-fluid">
                            </div>

                            <?php if(Session::has('error')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong><?php echo e(Session::get('error')); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <?php endif; ?>
                             


                            <form action=" <?php echo e(route('seller.login')); ?>" class="d-block" method="post">
                                <?php echo csrf_field(); ?>
                                
                                <div class="form-group icon_parent">
                                     <label for="password">Email</label>
         <input  type="email" class="form-control"  name="email" value=" " required autocomplete="email" autofocus placeholder="Email Address">
              <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                                 
                                </div>
                                <div class="form-group icon_parent">
                                    <label for="password">Password</label>
       <input   type="password" class="form-control"  name="password" required autocomplete="current-password" placeholder="Password">
                                        
                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group">
                                    <label class="chech_container">Remember me
                                        <input type="checkbox" name="remember" id="remember" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <a class="registration" href=" <?php echo e(route('seller.register')); ?> ">Create new account</a><br>
                                    <a href=" " class="text-white">I forgot my password</a>
                                    <button type="submit" class="btn btn-blue">Login</button>
                                </div>
                            </form>
                            <div class="footer">
                               <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                            </div>
                            
                        </div>
                    </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <script src="<?php echo e(asset(' panel/assets/js/jquery.min.js')); ?>"></script>
        <!-- popper Min Js -->
        <script src="<?php echo e(asset('panel/assets/js/popper.min.js')); ?>"></script>
        <!-- Bootstrap Min Js -->
        <script src="<?php echo e(asset('panel/assets/js/bootstrap.min.js')); ?>"></script>
        <!-- Fontawesome-->
        <script src="<?php echo e(asset('panel/assets/js/all.min.js')); ?>"></script>
        <!-- metis menu -->
        <script src="<?php echo e(asset('panel/assets/plugins/metismenu/assets/js/metismenu.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/assets/plugins/metismenu/assets/js/mm-vertical-hover.js')); ?>"></script>
        <!-- nice scroll bar -->
        <script src="<?php echo e(asset('panel/assets/plugins/scrollbar/jquery.nicescroll.min.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/assets/plugins/scrollbar/scroll.active.js')); ?>"></script>
        <!-- counter -->
        <script src="<?php echo e(asset('panel/assets/plugins/counter/js/counter.js')); ?>"></script>
        <!-- chart -->
   <script src="<?php echo e(asset('panel/assets/plugins/chartjs-bar-chart/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/assets/plugins/chartjs-bar-chart/chart.js')); ?>"></script>
        <!-- pie chart -->
        <script src="<?php echo e(asset('panel/assets/plugins/pie_chart/chart.loader.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/assets/plugins/pie_chart/pie.active.js')); ?>"></script>
 
 
        <!-- Main js -->
        <script src="<?php echo e(asset('panel/assets/js/main.js')); ?> "></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
     


    </body>
</html><?php /**PATH /Users/mac/Desktop/example-app/resources/views/seller/seller_login.blade.php ENDPATH**/ ?>