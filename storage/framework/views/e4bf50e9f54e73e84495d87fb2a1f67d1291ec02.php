 

<?php $__env->startSection('content'); ?>

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Jabatan</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Besaran Uang</th>
                    <th colspan="2"><center>Selection</center></th>

                </tr>
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
                     <td><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?>
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
        <a href="<?php echo e(url('/Jabatan/create')); ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Jabatan</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>