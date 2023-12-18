<?php $__env->startSection('title'); ?>
Create User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageTitle'); ?>
Create New User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-8">

    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('users.store')); ?>" method="POST" enctype="multipart/form-data" class="bg-white shadow-sm p-3">
        <?php echo csrf_field(); ?>

        <label for="name">Name</label>
        <input value="<?php echo e(old('name')); ?>" type="text" class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?>" placeholder="Full Name" name="name" id="name">
        <div class="invalid-feedback">
            <?php echo e($errors->first('name')); ?>

        </div>
        <br>

        <label for="username">Username</label>
        <input value="<?php echo e(old('username')); ?>" class="form-control <?php echo e($errors->first('username') ? "is-invalid" : ""); ?>" type="text" placeholder="username" name="username" id="username">
        <div class="invalid-feedback">
            <?php echo e($errors->first('username')); ?>

        </div>
        <br>

        <label for="roles">Roles</label>
        <br>
        <input class="form-control <?php echo e($errors->first('roles') ? "is-invalid" : ""); ?>" type="checkbox" name="roles[]" id="ADMIN" value="ADMIN">
        <label for="ADMIN">Administrator</label>

        <input class="form-control <?php echo e($errors->first('roles') ? "is-invalid" : ""); ?>" type="checkbox" name="roles[]" id="STAFF" value="STAFF">
        <label for="STAFF">Staff</label>

        <input class="form-control <?php echo e($errors->first('roles') ? "is-invalid" : ""); ?>" type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER">
        <label for="CUSTOMER">Customer</label>

        <div class="invalid-feedback">
            <?php echo e($errors->first('roles')); ?>

        </div>

        <br><br>
        <label for="phone">Phone Number</label>
        <br>
        <input value="<?php echo e(old('phone')); ?>" type="text" name="phone"
            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" maxlength="15" class="form-control <?php echo e($errors->first('phone') ? "is-invalid" : ""); ?>">
        <div class="invalid-feedback">
            <?php echo e($errors->first('phone')); ?>

        </div>
        <br>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control <?php echo e($errors->first('address') ? "is-invalid" : ""); ?>"><?php echo e(old('address')); ?></textarea>
        <div class="invalid-feedback">
            <?php echo e($errors->first('address')); ?>

        </div>

        <br>
        <label for="avatar">Avatar image</label>
        <br>
        <input type="file" id="avatar" name="avatar" class="form-control <?php echo e($errors->first('avatar') ? "is-invalid" : ""); ?>">
        <div class="invalid-feedback">
            <?php echo e($errors->first('avatar')); ?>

        </div>

        <hr class="my-4">

        <label for="email">Email</label>
        <input value="<?php echo e(old('email')); ?>" class="form-control <?php echo e($errors->first('email') ? "is-invalid" : ""); ?>" placeholder="user@mail.com" type="text" name="email" id="email">
        <div class="invalid-feedback">
            <?php echo e($errors->first('email')); ?>

        </div>
        <br>

        <label for="password">Password</label>
        <input class="form-control <?php echo e($errors->first('password') ? "is-invalid" : ""); ?>" placeholder="Password" type="password" name="password" id="password">
        <div class="invalid-feedback">
            <?php echo e($errors->first('password')); ?>

        </div>
        <br>

        <label for="password_confirmation">Password Confirmation</label>
        <input class="form-control <?php echo e($errors->first('password_confirmation') ? "is-invalid" : ""); ?>" placeholder="password confirmation" type="password" name="password_confirmation"
            id="password_confirmation">
        <div class="invalid-feedback">
            <?php echo e($errors->first('password_confirmation')); ?>

        </div>

        <br>
        <input class="btn btn-primary" type="submit" value="Save">
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\toko-buku\resources\views/users/create.blade.php ENDPATH**/ ?>