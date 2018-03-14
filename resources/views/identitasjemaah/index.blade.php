@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Identitas Jemaah
			  	<div class="panel-title pull-right"><a href="{{ route('identitasjemaahs.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Jemaah</th>
					  <th>Asal Jemaah</th>
					  <th>No Kloter</th>
					 
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->Jemaah }}</td>
				    	<td>{{ $data->asal_jemaah }}</td>
				    	<td><p>{{ $data->Kloter->No_kloter }}</p></td>
<td>
	<a class="btn btn-warning" href="{{ route('identitasjemaahs.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('identitasjemaahs.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('identitasjemaahs.destroy',$data->id) }}">
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