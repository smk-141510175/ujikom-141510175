<?php $__env->startSection('content'); ?>

           <a href="<?php echo e(url('/Tunjangan_Pegawai/create')); ?>" class="btn btn-primary">Create Tunjangan Pegawai</a>

            <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Tunjangan Pegawai</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Jumlah Anak</center></th>
					<th><center>Besaran Uang</center></th>
					
					<th colspan="3"><center>Action </center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				<?php $__currentLoopData = $Tunjangan_Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
               
                <tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><center><?php echo e($data->Tunjangan->Kode_Tunjangan); ?></center></td>
						<td><center><?php echo e($data->Pegawai->User->name); ?></center></td>
						<td><center><?php echo e($data->Pegawai->Jabatan->Nama_Jabatan); ?></center></td>
						<td><center><?php echo e($data->Pegawai->Golongan->Nama_Golongan); ?></center></td>
						<td><center><?php echo e($data->Tunjangan->Jumlah_Anak); ?></center></td>
			
						 <td><center>
                                       <?php
                                       if ( $data->Tunjangan->Jumlah_Anak <= '1' )
                                       {      
                                           echo 'Rp '.number_format($data->Tunjangan->Besaran_Uang,2,",",".");
                                       }      

                                       elseif ( $data->Tunjangan->Jumlah_Anak == '1' || $data->Tunjangan->Jumlah_Anak == '2')
                                       {      
                                           
                                           echo 'Rp '.number_format($data->Tunjangan->Besaran_Uang * $data->Tunjangan->Jumlah_Anak,2,",",".");
                                       }

                                       elseif ( $data->Tunjangan->Jumlah_Anak >= '2')
                                       {
                                           echo 'Rp '.number_format($data->Tunjangan->Besaran_Uang * $data->Tunjangan->Jumlah_Anak,2,",",".");
                                       } 
                                       
                                       ?>
                                   </center></td>
						<td><center><a href="<?php echo e(route('Tunjangan_Pegawai.edit', $data->id)); ?>" class="btn btn-warning">Update</a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['Tunjangan_Pegawai.destroy', $data->id]]); ?>

							<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

							<?php echo Form::close(); ?>

						</center></td>
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