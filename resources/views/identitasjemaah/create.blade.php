@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Identitas Jemaah
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('identitasjemaahs.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('Jemaah') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jemaah</label>	
			  			<input type="text" name="Jemaah" class="form-control"  required>
			  			@if ($errors->has('Jemaah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Jemaah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{$errors->has('asal_jemaah') ? 'has error' : '' }}">
							<label class="control-label">Asal Jemaah</label><br>
							<input type="text" class="form-control" name="asal_jemaah" required>
								@if ($errors->has('asal_jemaah'))
									<span class="help-blocks">
										<strong>{{$errors->first('asal_jemaah')}}</strong>
									</span>
								@endif
							</div>


			  		<div class="form-group {{ $errors->has('id_kloter') ? ' has-error' : '' }}">
			  			<label class="control-label">No Kloter</label>	
			  			<select name="id_kloter" class="form-control">
			  				@foreach($a as $data)
			  				<option value="{{ $data->id }}">{{ $data->No_kloter }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kloter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kloter') }}</strong>
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