 

<?php $__env->startSection('content'); ?>

             <a href="<?php echo e(url('/Penggajian/create')); ?>" class="btn btn-primary">Create Penggajian</a>


                <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Jabatan</CENTER></h3></CENTER>
                </div>
                <div class="panel-primary">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Total Gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petugas Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Action</center></p></th>
                        </tr>
                      </thead>
                            <?php 
                            $no = 1;
                             ?>
                            <?php $__currentLoopData = $Penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($data->Tunjangan_Pegawai->Pegawai->User->name); ?></td>
                                    <td><?php echo e($data->Jumlah_jam_lembur); ?> </td>
                                    <td><?php echo e($data->Jumlah_uang_lembur); ?> </td>
                                    <td><?php echo e($data->Gaji_pokok); ?> </td>
                                    <td><?php echo e($data->Total_gaji); ?> </td>
                                    <td><?php echo e($data->updated_at); ?> </td>
                                    
                                    <?php if($data->Status_pengambilan == 0): ?>
                                    
                                        <td>Belum Diambil </td>
                                    
                                    <?php endif; ?>
                                    <?php if($data->Status_pengambilan == 1): ?>
                                    
                                        <td>Sudah Diambil</td>
                                    
                                    <?php endif; ?>
                                  <td><?php echo e($data->Petugas_penerima); ?> </td>
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