<?php $__env->startSection('content'); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Create Jabatan</font></div>
</center>
                <div class="panel-body">
    
                <div class="panel-body">
    <?php echo Form::open(['url' => 'Jabatan']); ?>

     <div class="form-group<?php echo e($errors->has('Kode_Jabatan') ? ' has-error' : ''); ?>">
                            <?php echo Form::label('Kode', 'Kode Golongan:'); ?>

                            <input type="text" name="Kode_Jabatan" class="form-control" required>

                            <?php if($errors->has('Kode_Jabatan')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Kode_Jabatan')); ?></strong>
                                </span>
                            <?php endif; ?> 
                        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('Nama Jabatan', 'Nama Jabatan'); ?>

        <?php echo Form::text('Nama_Jabatan',null,['class'=>'form-control','required']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('Besaran Uang', 'Besaran Uang'); ?>

        <?php echo Form::text('Besaran_Uang',null,['class'=>'form-control','required']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>