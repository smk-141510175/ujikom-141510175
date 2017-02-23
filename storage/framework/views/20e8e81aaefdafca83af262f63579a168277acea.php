 

<?php $__env->startSection('content'); ?>

            <a href="<?php echo e(url('/Lembur_Pegawai/create')); ?>" class="btn btn-primary">Create Lembur</a>

            <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Lembur Pegawai</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Lembur</center></th>
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Jumlah Jam</center></th>
                    <th><center>Besaran Uang</center></th>
                    <th colspan="2"><center>Action</center></th>

                </tr>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $Lembur_Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><center><?php echo e($data->Kategori_Lembur->Kode_Lembur); ?></center></td>
                    <td><center><?php echo e($data->Pegawai->User->name); ?></center></td>
                    <td><center><?php echo e($data->Jumlah_Jam); ?></center></td>
                    <th><center><?php echo 'Rp.'.number_format($data->Kategori_Lembur->Besaran_Uang*$data->Jumlah_Jam, 2,",",".");?></center></th>
                    <td><center><a href="<?php echo e(route('Lembur_Pegawai.edit',$data->id)); ?>" class="btn btn-warning">Update</a></center></td>
             <td><center>
               <?php echo Form::open(['method' => 'DELETE', 'route'=>['Lembur_Pegawai.destroy', $data->id]]); ?>

             <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

             <?php echo Form::close(); ?></center>
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