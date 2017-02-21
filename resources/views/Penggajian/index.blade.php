 @extends('layouts.app')

@section('content')

           <a href="{{url('/Penggajian/create')}}" class="btn btn-primary">Create Penggajian</a>

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
                    <th colspan="2"><center>Action</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($penggajian as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Tunjangan_pegawai->Kode_Tunjangan}}</td>
                    <td>{{ $data->Jumlah_jam_lembur }}</td>
                    <td><?php echo 'Rp'. number_format($data->Jumlah_uang_lembur, 2,",","."); ?>
                    <td><?php echo 'Rp'. number_format($data->Gaji_pokok, 2,",","."); ?>
                    <td><?php echo 'Rp'. number_format($data->Total_gaji, 2,",","."); ?>
                    <td>{{ $data->Tanggal_pengambilan }}</td>
                    <td>{{ $data->Status_pengambilan }}</td>
                    <td>{{ $data->Petugas_penerima }}</td>
                     
             </td>
                    
             
                    <td><a href="{{route('Penggajian.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
               {!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
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