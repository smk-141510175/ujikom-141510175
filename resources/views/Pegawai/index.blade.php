@extends('layouts.app')

@section('content')

            <a href="{{url('/Pegawai/create')}}" class="btn btn-primary">Create Pegawai</a>

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
					<th><center>Nama Pegawai</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Photo</center></th>
					<th colspan="3"><center>Action</center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Pegawai as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Nip }}</center></td>
						<td><center>{{ $data->User->name }}</center></td>
						<td><center>{{ $data->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Golongan->Nama_Golongan }}</center></td>
						<td>
							<center>
								<img src="{{asset('/image/'.$data->Photo)}}" height="100px" width="100px">
							</center>
						</td>
						
                                <td><center><a href="{{route('Pegawai.edit',$data->id)}}" class="btn btn-warning">Update</a></center></td>
             <td><center>
               {!! Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}</center>
     </td>
                                
					</tr>
				@endforeach

            </tbody>
        </table>
      
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection