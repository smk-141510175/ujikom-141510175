 

<?php $__env->startSection('content'); ?>

           <a href="<?php echo e(url('/Kategori_Lembur/create')); ?>" class="btn btn-primary">Create Kategori</a>

           <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Kategori Lembur</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Lembur</th>
                    <th>Jabatan</th>
                    <th>Golongan</th>
                    <th>Besaran Uang</th>
                    <th colspan="2"><center>Section</center></th>

                </tr>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $Kategori_Lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><?php echo e($data->Kode_Lembur); ?></td>
                    <td><?php echo e($data->Jabatan->Nama_Jabatan); ?></td>
                    <td><?php echo e($data->Golongan->Nama_Golongan); ?></td>
                     <td><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </td>
                    
             
                    <td><a href="<?php echo e(route('Kategori_Lembur.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
             <td>
               <?php echo Form::open(['method' => 'DELETE', 'route'=>['Kategori_Lembur.destroy', $data->id]]); ?>

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