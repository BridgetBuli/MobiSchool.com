<link rel="stylesheet" href="https://classless.de/classless.css">
<h1>SIGN IN</h1>
<form method="POST" action="/session">
    <?php echo csrf_field(); ?>
    <div>
 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    Email<br>
                    <input 
                        name="email"
                        required
                        type="email"
                        id="email"
                        value="<?php echo e(old('email')); ?>"
                        > 

                </div> <!-- form-group// -->

                       
                        
                <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                       Password<br>
                        <input 
                            name="password"  
                            type="text"
                            required
                            id="password"
                            value="<?php echo e(old('password')); ?>"
                            >

                </div><!-- form-group// -->

                <div>
                   
                   <button type="submit">
                   Login
                   </button>
               </div>

               <?php if($errors->any()): ?>
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="text-danger p-1 m-1 text-left" style="font-size: small;"> <?php echo e($error); ?> </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>

                <?php endif; ?>

              <p class="mt-3 mb-0 text-muted">© 2021–2022</p>

</form>
<?php /**PATH D:\projects\MobiSchool.com\resources\views/login.blade.php ENDPATH**/ ?>