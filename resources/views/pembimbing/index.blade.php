@extends('layouts.app')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Data Pembimbing
                <div class="panel-title pull-right"><a href="{{ route('pembimbings.create') }}">Tambah</a>
                </div>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pembimbing</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                       <th>Alamat</th>
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->Nama_pembimbing }}</td>
                        <td>{{ $data->Jenis_kelamin }}</td>
                        <td>{{ $data->Tempat_lahir }}</td>
                        <td>{{ $data->Tanggal_lahir }}</td>
                        <td>{{ $data->Alamat }}</td>
                       <td>@foreach($data->kloter as $klt)<li>{{ $klt->nama }}@endforeach</li></td>
<td>
    <a class="btn btn-warning" href="{{ route('pembimbings.edit',$data->id) }}">Edit</a>
</td>
<td>
    <a href="{{ route('pembimbings.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
    <form method="post" action="{{ route('pembimbings.destroy',$data->id) }}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
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