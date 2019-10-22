@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('admin.create') }}" class="btn btn-primary btn-sm float-right">Tambah Admin</a>
					<h4>Daftar Admin</h4>
				</div> <hr>
				<div class="table-responsive">
                    <table class="table table-hover" id="admin">
                        <thead>
                            <tr>
                            	<th class="border-top-0">#</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Super Admin</th>
                                <th class="border-top-0">Status</th>
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

	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h4>Daftar Pelanggan</h4>
				</div> <hr>
				<div class="table-responsive">
                    <table class="table table-hover" id="customer">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Nama</th>
                                <th class="border-top-0">Email</th>
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
		$('[data-toggle="tooltip"]').tooltip();

		var tableAdmin = $('#admin').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ route('user-management.admin') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'name', name: 'name'},
	            {data: 'email', name: 'email'},
	            {
	            	data: 'is_super', 
	            	name: 'is_super',
	            	searchable: false,
			        orderable:false,
	            	render: function(data, type, row) {
	            		if (data == true) {
	            			return "<span class='badge badge-success'>Yes</span>";
	            		} else {
	            			return "<span class='badge badge-danger'>No</span>";
	            		}
	            	}

	            },
	            {
	            	data: 'is_active', 
	            	name: 'is_active',
				    searchable: false,
			        orderable:false,
	            	render: function(data, type, row) {
	            		if (data == true) {
	            			return "<span class='badge badge-success'>Active</span>";
	            		} else {
	            			return "<span class='badge badge-danger'>Inactive</span>";
	            		}
	            	}

	            },
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ],
	    });

	    var tableCustomer = $('#customer').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: "{{ route('user-management.customer') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'name', name: 'name'},
	            {data: 'email', name: 'email'},
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ],
	    });

	    $('#admin').on('click', '.delete', function(e) {
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
		    			url: "{{ route('admin.delete') }}",
		    			data: {
		    				_token: CSRF_TOKEN,
		    				id: id,
		    			},
		    			dataType: "JSON",
		    			success: function(response) {
		    				if (response.status === true) {
		    					swal("Success !", response.message, "success");
		    					tableAdmin.draw();
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