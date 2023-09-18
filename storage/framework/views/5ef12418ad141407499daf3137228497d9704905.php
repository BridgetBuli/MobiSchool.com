<!-- file upload form -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload E-books and Audiobooks</div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin_upload')); ?>" method="POST" role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">Select a file to upload</label>
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control <?php $__errorArgs = ['files'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="files[]" value="<?php echo e(old('files')); ?>" multiple>
                                    
                                    <?php $__errorArgs = ['files'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="form-group input-group">
                                    <label for="file" class="col-md-4 col-form-label text-md-right">Select Course for Resource</label>
                                    <div class="col-md-6">
                                        <select 
                                            name="course_id"
                                            require 
                                            class="form-control" >

                                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($loop->first): ?>
                                                    <option selected="" class="text-dark bg-muted bg-secondary"> Course</option>
                                                <?php endif; ?>
                                                    <option value="<?php echo e($course->id); ?>"> <?php echo e($course->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div> <!-- form-group end.// -->
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">Enter Resource Price</label>
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e(old('price')); ?>">                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">Audience for the Resource</label>
                                <div class="col-md-6">
                                    <select 
                                        name="audience"
                                        require 
                                        class="form-control" >
                                        <option selected="" class="text-dark bg-muted bg-secondary">Audience</option>
                                        <option value="primary"> Primary</option>
                                        <option value="secondary"> Secondary</option>
                                        <option value="tertiary"> Tertiary</option>
                                    </select>                                    
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Upload File</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH D:\projects\MobiSchool.com\resources\views/components/file-upload.blade.php ENDPATH**/ ?>