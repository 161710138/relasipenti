@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pembimbing
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Pembimbing</label>	
			  			<input type="text" name="Nama_pembimbing" class="form-control" value="{{ $a->Nama_pembimbing }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<input type="text" name="Jenis_kelamin" class="form-control" value="{{ $a->Jenis_kelamin }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="Tempat_lahir" class="form-control" value="{{ $a->Tempat_lahir }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="text" name="Tanggal_lahir" class="form-control" value="{{ $a->Tanggal_lahir }}"  readonly>
			  		</div>
			  		
			  		<div class="form-group">
			  			<label class="control-label">Kloter</label>	
			  			<textarea rows="10" class="form-control" readonly>@foreach($a->kloter as $data)
			  				-{{ $data->nama }}
			  				@endforeach
			  			</textarea> 
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection