@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Kloter 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kloters.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('No_kloter') ? ' has-error' : '' }}">
			  			<label class="control-label">No Kloter</label>	
			  			<input type="number" name="No_kloter" class="form-control"  required>
			  			@if ($errors->has('No_kloter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('No_kloter') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group {{ $errors->has('id_pembimbing') ? ' has-error' : '' }}">
			  			<label class="control-label">Pembimbing</label>	
			  			<select name="id_pembimbing" class="form-control">
			  				@foreach($pembimbing as $data)
			  				<option value="{{ $data->id }}">{{ $data->Nama_pembimbing }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_pembimbing'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_pembimbing') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection