@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<a href="{{ route('item-management') }}" class="btn btn-primary btn-sm mb-2">Kembali ke Daftar Barang</a>
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('category.create') }}" class="btn btn-primary btn-sm float-right">Tambah Kategori Barang</a>
					<h4>Daftar Kategori Barang</h4>
				</div> <hr>
				<div class="table-responsive">
                    <table class="table table-hover" id="category">
                        <thead>
                            <tr>
                            	<th class="border-top-0">#</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Deskripsi</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$(document).ready(function() {
	    var table = $('#category').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ route('category.list') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'name', name: 'name'},
	            {data: 'description', name: 'description'},
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ],
	    });

	    $('#category').on('click', '.delete', function(e) {
	    	e.preventDefault();
	    	var id = $(this).data('id');
	    	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	    	swal({
	    		title: "Apakah Anda Yakin ?",
	            text: "Silahkan cek kembali lalu konfirmasi !",
	            type: "warning",
	            showCancelButton: !0,
	            confirmButtonText: "Yes, delete it!",
	            cancelButtonText: "No, cancel!",
	            reverseButtons: !0
	    	})
	    	.then(function(e) {
	    		if (e.value === true) {
	    			$.ajax({
		    			type: "POST",
		    			url: "{{ route('category.delete') }}",
		    			data: {
		    				_token: CSRF_TOKEN,
		    				id: id,
		    			},
		    			dataType: "JSON",
		    			success: function(response) {
		    				if (response.status === true) {
		    					swal("Success !", response.message, "success");
		    					table.draw();
		    				} else {
		    					swal("Failed !", response.message, "error");
		    				}
		    			},
		    			error: function() {
		    				swal("Failed !", "Something went wrong.", "error");
		    			},
		    		});
	    		} else {
	    			e.dismiss;
	    		}
	    	}, 
	    	function(dismiss) {
	    		return false;
	    	});
	    });
	});
</script>
@endsection