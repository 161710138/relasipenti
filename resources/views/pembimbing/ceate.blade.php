@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Pembimbing
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pembimbings.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('Nama_pembimbing') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pembimbing</label>	
			  			<input type="text" name="Nama_pembimbing" class="form-control"  required>
			  			@if ($errors->has('Nama_pembimbing'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama_pembimbing') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{$errors->has('Jenis_kelamin') ? 'has error' : '' }}">
							<label class="control-label">Jenis Kelamin</label><br>
							<input type="radio" class="radio-control" name="Jenis_kelamin" value="laki-laki">laki-laki

							<input type="radio" class="radio-control" name="Jenis_kelamin" value="perempuan">perempuan

								@if ($errors->has('Jenis_kelamin'))
									<span class="help-blocks">
										<strong>{{$errors->first('Jenis_kelamin')}}</strong>
									</span>
								@endif
							</div>

			  		<div class="form-group {{ $errors->has('Tempat_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="Tempat_lahir" class="form-control"  required>
			  			@if ($errors->has('Tempat_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Tempat_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('Tanggal_lahir') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" name="Tanggal_lahir" class="form-control"  required>
			  			@if ($errors->has('Tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Tanggal_lahir') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('Alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="Alamat" class="form-control"  required>
			  			@if ($errors->has('Alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Alamat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection