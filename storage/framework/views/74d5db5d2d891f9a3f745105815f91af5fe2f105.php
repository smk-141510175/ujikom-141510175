 

<?php $__env->startSection('content'); ?>

           <a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-primary">Create Penggajian</a>

           <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Penggajian</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tunjangan</th>
                    <th>Jumlah Jam Lembur</th>
                    <th>Jumlah Uang Lembur</th>
                    <th>Gaji Pokok</th>
                    <th>Total Gaji</th>
                    <th>Tanggal Pengambilan</th>
                    <th>Status Pengambilan</th>
                    <th>Petugas Penerima</th>
                    <th colspan="2"><center>Section</center></th>

                </tr>
            </thead>
            <?php 
            $no = 1;
             ?>
            <tbody>
                <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><center><?php echo e($no++); ?></center></td>
                    <td><?php echo e($data->Tunjangan_pegawai->Kode_Tunjangan); ?></td>
                    <td><?php echo e($data->Jumlah_jam_lembur); ?></td>
                    <td><?php echo 'Rp'. number_format($data->Jumlah_uang_lembur, 2,",","."); ?>
                    <td><?php echo 'Rp'. number_format($data->Gaji_pokok, 2,",","."); ?>
                    <td><?php echo 'Rp'. number_format($data->Total_gaji, 2,",","."); ?>
                    <td><?php echo e($data->Tanggal_pengambilan); ?></td>
                    <td><?php echo e($data->Status_pengambilan); ?></td>
                    <td><?php echo e($data->Petugas_penerima); ?></td>
                     
             </td>
                    
             
                    <td><a href="<?php echo e(route('Penggajian.edit',$data->id)); ?>" class="btn btn-warning">Update</a></td>
             <td>
               <?php echo Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]); ?>

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