
<link rel="stylesheet" href="https://classless.de/classless.css">

<main>
 
  <div class="regform">
    <H1>SIGN UP</H1> 
    <form method="POST" action="/registration">
    <?php echo csrf_field(); ?>
    <div>
            
                        
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        Full Name<br>
                        <input 
                            name="name" 
                            placeholder="Full-name" 
                            type="text"
                            required
                            id="name"
                            value="<?php echo e(old('name')); ?>"
                            >


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    Email<br>
                    <input 
                        name="email" 
                        placeholder="email address" 
                        required
                        type="email"
                        id="email"
                        value="<?php echo e(old('email')); ?>"
                        > 

                </div> <!-- form-group// -->

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        Phone <br>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+265</option>
                        </select>
                        
                        <input 
                            name="phone" 
                            require
                            maxlength="9"
                            placeholder="Phone" 
                            required
                            type="text"
                            id="phone"
                            value="<?php echo e(old('phone')); ?>"
                            >

                    </div> <!-- form-group// -->
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    Class<br>
                    <input 
                        name="classroom_id" 
                        class="form-control" 
                        placeholder="class" 
                        required
                        type="text"
                        id="class"
                        value=""
                        >

                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> </span>
                    </div>
                    password<br>
                    <input 
                        name="password" 
                        placeholder="password" 
                        required
                        type="password"
                        id="password"
                        value="<?php echo e(old('email')); ?>"
                        >

                </div> <!-- form-group// -->

                <div>
                   
                    <button type="submit">
                    Submit
                    </button>
                </div>
            
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
</div>  
</main>

<?php /**PATH D:\projects\MobiSchool.com\resources\views/registration.blade.php ENDPATH**/ ?>