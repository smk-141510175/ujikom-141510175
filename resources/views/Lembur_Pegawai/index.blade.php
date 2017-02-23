 @extends('layouts.app')

@section('content')

            <a href="{{url('/Lembur_Pegawai/create')}}" class="btn btn-primary">Create Lembur</a>

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
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Lembur_Pegawai as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td><center>{{ $data->Kategori_Lembur->Kode_Lembur}}</center></td>
                    <td><center>{{ $data->Pegawai->User->name}}</center></td>
                    <td><center>{{ $data->Jumlah_Jam}}</center></td>
                    <th><center><?php echo 'Rp.'.number_format($data->Kategori_Lembur->Besaran_Uang*$data->Jumlah_Jam, 2,",",".");?></center></th>
                    <td><center><a href="{{route('Lembur_Pegawai.edit',$data->id)}}" class="btn btn-warning">Update</a></center></td>
             <td><center>
               {!! Form::open(['method' => 'DELETE', 'route'=>['Lembur_Pegawai.destroy', $data->id]]) !!}
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