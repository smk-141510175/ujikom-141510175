 @extends('layouts.app')

@section('content')
                    <a href="{{url('/Jabatan/create')}}" class="btn btn-primary">Create Jabatan</a>


                <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Jabatan</CENTER></h3></CENTER>
                </div>
                <div class="panel-primary">
                    <table class="table table-border " >

            <thead>
            <center>
                <tr>
                    <td>No</td>
                    <td>Kode Jabatan</td>
                    <td>Nama Jabatan</td>
                    <td>Besaran Uang</td>
                    <td colspan="2"><center>Action</center></td>

                </tr>
                </center>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Jabatan as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Kode_Jabatan }}</td>
                    <td>{{ $data->Nama_Jabatan }}</td>
                     <td><?php echo 'Rp.'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </td>
                    
             
                    <td><a href="{{route('Jabatan.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]) !!}
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