<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
             <div class="panel panel-primary">
                <div class="panel-heading">Tambah Data Pegawai</div>
                <div class="panel-body">
                <hr>
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/Pegawai')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Permission" class="col-md-4 control-label">Permission</label>

                            <div class="col-md-6">
                               <select class="form-control" name="permission">
                                    <option value="Admin">Admin</option>
                                    <option value="Pegawai">Pegawai</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>                        
                        <hr>
						<div class="form-group<?php echo e($errors->has('Nip') ? ' has-error' : ''); ?>">
                            <label for="Nip" class="col-md-4 control-label">NIP</label>
							<div class="col-md-6">
                                <input id="Nip" type="text" class="form-control" name="Nip"  required autofocus>
                            </div>
                        </div>
                    

						<div class="form-group<?php echo e($errors->has('Kode_Jabatan') ? ' has-error' : ''); ?>">
                            <label for="Kode_Jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <select name="Kode_Jabatan" class="form-control">
                                    <?php $__currentLoopData = $Jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_Jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('Kode_Golongan') ? ' has-error' : ''); ?>">
                            <label for="Kode_Golongan" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                                <select name="Kode_Golongan" class="form-control">
                                    <?php $__currentLoopData = $Golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_Golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Photo') ? ' has-error' : ''); ?>">
                            <label for="Photo" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="<?php echo e(old('Photo')); ?>" required autofocus>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </div>
					<?php echo Form::close(); ?>

	           </div>
	       </div>
	   </div>
    </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>