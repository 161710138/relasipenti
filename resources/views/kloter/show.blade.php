@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Post 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">No Kloter</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $a->No_kloter }}"  readonly>
			  		</div>

			  		
			  		<div class="form-group">
			  			<label class="control-label">Pembimbing</label>
						<input type="text" name="title" class="form-control" value="{{ $a->pembimbing->Nama_pembimbing }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection