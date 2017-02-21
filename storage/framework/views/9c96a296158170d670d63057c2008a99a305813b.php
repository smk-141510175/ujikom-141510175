<?php $__env->startSection('content'); ?>
 
             <a href="<?php echo e(url('/Tunjangan/create')); ?>" class="btn btn-primary">Create Tunjangan</a>

            <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Tunjangan</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Status</center></th>
					<th><center>Jumlah Anak</center></th>
					<th><center>Besaran Uang</center></th>
					<th colspan="3"><center>Pilihan</center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				<?php $__currentLoopData = $Tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
               
                <tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><center><?php echo e($data->Kode_Tunjangan); ?></center></td>
						<td><center><?php echo e($data->Jabatan->Nama_Jabatan); ?></center></td>
						<td><center><?php echo e($data->Golongan->Nama_Golongan); ?></center></td>
						<td><center><?php echo e($data->Status); ?></center></td>
						<td><center><?php echo e($data->Jumlah_Anak); ?></center></td>
					<td><center><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </center></td>
						<td><center><a href="<?php echo e(route('Tunjangan.edit', $data->id)); ?>" class="btn btn-warning">Ubah</a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['Tunjangan.destroy', $data->id]]); ?>

							<?php echo Form::submit('Hapus', ['class' => 'btn btn-danger']); ?>

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