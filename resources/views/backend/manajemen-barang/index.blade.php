@extends('backend.layouts.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-body">
				<div class="card-title">
					<h3 class="text-lighten">Jumlah Kategori Barang: <span class="text-primary">{{ $itemCategoryCount }}</span></h3>
				</div>
				<a href="{{ route('category') }}" class="text-primary"><i class="mdi mdi-eye"></i> Lihat / Tambah Kategori Barang</a>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<a href="{{ route('item-management.create') }}" class="btn btn-primary btn-sm float-right">Tambah Barang</a>
					<h4>Daftar Barang</h4>
				</div> <hr>
				<div class="table-responsive">
                    <table class="table table-hover" id="item">
                        <thead>
                            <tr>
                            	<th class="border-top-0">#</th>
                                <th class="border-top-0">Kategori</th>
                                <th class="border-top-0">Nama Barang</th>
                                <th class="border-top-0">Lebar</th>
                                <th class="border-top-0">Panjang</th>
                                <th class="border-top-0">Tinggi</th>
                                <th class="border-top-0">Berat</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Harga</th>
                                <th class="border-top-0">Deskripsi</th>
                                <th class="border-top-0" style="min-width: 100px;">Action</th>
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

		var tableItem = $("#item").DataTable({
			processing: true,
	        serverSide: true,
	        ajax: "{{ route('item-management.item') }}",
	        columns: [
	            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
	            {data: 'category', name: 'category'},
	            {data: 'name', name: 'name'},
	            {data: 'width', name: 'width'},
	            {data: 'length', name: 'length'},
	            {data: 'height', name: 'height'},
	            {data: 'weight', name: 'weight'},
	            {
	            	data: 'status',
	            	name: 'status',
	            	searchable: false,
			        orderable:false,
	            	render: function(data, type, row) {
	            		if (data == true) {
	            			return "<span class='badge badge-info'>Tersedia</span>";
	            		} else {
	            			return "<span class='badge badge-danger'>Tidak Tersedia</span>";
	            		}
	            	}
	            },
	            {
	            	data: 'price', 
	            	name: 'price',
	            	render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' )
	            },
	            {
	            	data: 'description',
	            	name: 'description',
	            	searchable: false,
			        orderable:false,
	            	render: function(data, type, row) {
	            		return data.length > 10 ? data.substr( 0, 10 ) +'…' : data;
	            	}
	            },
	            {data: 'action', name: 'action', orderable: false, searchable: false},
	        ],
		});

		$('#item').on('click', '.delete', function(e) {
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
		    			url: "{{ route('item-management.delete') }}",
		    			data: {
		    				_token: CSRF_TOKEN,
		    				id: id,
		    			},
		    			dataType: "JSON",
		    			success: function(response) {
		    				if (response.status === true) {
		    					swal("Success !", response.message, "success");
		    					tableItem.draw();
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