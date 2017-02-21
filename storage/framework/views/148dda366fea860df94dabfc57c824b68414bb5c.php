<?php $__env->startSection('content'); ?>

            <a href="<?php echo e(url('/Pegawai/create')); ?>" class="btn btn-primary">Create Pegawai</a>

            <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Pegawai</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>NIP</center></th>
					<th><center>NAMA PEGAWAI</center></th>
					<th><center>JABATAN</center></th>
					<th><center>GOLONGAN</center></th>
					<th><center>PHOTO</center></th>
					<th colspan="3"><center>PILIHAN </center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				<?php $__currentLoopData = $Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
               
                <tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><center><?php echo e($data->Nip); ?></center></td>
						<td><center><?php echo e($data->User->name); ?></center></td>
						<td><center><?php echo e($data->Jabatan->Nama_Jabatan); ?></center></td>
						<td><center><?php echo e($data->Golongan->Nama_Golongan); ?></center></td>
						<td>
							<center>
								<img src="<?php echo e(asset('/image/'.$data->Photo)); ?>" height="100px" width="100px">
							</center>
						</td>
						<!-- <td><center><a href="<?php echo e(url('Pegawai', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
					 -->	<td><center><a href="<?php echo e(route('Pegawai.edit', $data->id)); ?>" class="btn btn-warning">Ubah</a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]); ?>

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