 @extends('layouts.app')

@section('content')

            <a href="{{url('/Golongan/create')}}" class="btn btn-primary">Create Golongan</a>

            <div class="panel panel-success">
                <div class="panel-heading">     
                <h3><CENTER>Table Golongan</CENTER></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-border " >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Golongan</th>
                    <th>Nama Golongan</th>
                    <th>Besaran Uang</th>
                    <th colspan="2"><center>Action</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Golongan as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td>{{ $data->Kode_Golongan }}</td>
                    <td>{{ $data->Nama_Golongan }}</td>
                     <td><?php echo 'Rp.'. number_format($data->Besaran_Uang, 2,",","."); ?>
             </td>
                    
             
                    <td><a href="{{route('Golongan.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Golongan.destroy', $data->id]]) !!}
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