<?php $__env->startSection('body'); ?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               <?php $__env->startSection('login_panel_title','Please Sign In'); ?>
               <?php $__env->startSection('login_panel_body'); ?>
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="<?php echo e(url ('')); ?>" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    
                <?php $__env->stopSection(); ?>
                <?php echo $__env->make('widgets.panel', array('as'=>'login', 'header'=>true), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\admin-kit\resources\views/login.blade.php ENDPATH**/ ?>