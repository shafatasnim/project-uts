<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Akan Menghapus Data Ini ?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger col-md-2" style="display: flex; align-items: center;"> <i class="fa fa-trash"></i></button>
</form>