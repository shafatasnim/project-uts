@extends('admin.template.base')

	@section('content')

		
		<div class="row ">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Edit Kategori <hr>
				</div>
				<div class="card-body">
					<form action="{{url('kategori', $kategori->id)}}" method="post">
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama Kategori</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>	
		</div>
	</div>



	@endsection