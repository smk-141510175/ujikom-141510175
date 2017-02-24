 

<?php $__env->startSection('content'); ?>
                    <a href="<?php echo e(url('/Jabatan/create')); ?>" class="btn btn-primary">Create Jabatan</a>


                <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Jabatan</CENTER></h3></CENTER>
                </div>
                <div class="panel-primary">
                    <table class="table table-border " >

            <thead>
            <center>
                <tr>
                    <td>No</td>
                    <td>Kode Jabatan</td>
                    <td>Nama Jabatan</td>
                    <td>Besaran Uang</td>
                    <td colspan="2"><center>Action</center></td>

                </tr>
                </center>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $Jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><?php echo e($data->Kode_Jabatan); ?></td>
                    <td><?php echo e($data->Nama_Jabatan); ?></td>
                     <td><?php echo 'Rp.'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </td>
                    
             
                    <td><a href="<?php echo e(route('Jabatan.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
             <td>
             <?php echo Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?>

             </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

            </tbody>
        </table>
        
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>