@extends('backend.layouts.content')

@section('content')
<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3 class="text-primary">Welcome to Sukasukalo.com Admin Console !</h3><br><br>
					</div>
					<h4 class="card-title text-center">Transaksi terjadi</h4>
					<canvas id="canvas"></canvas>
				</div>
			</div>
		</div>
	</div>
		
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card">  
					<div class="card-body">
						<h4 class="card-title m-b-0 text-center">Users</h4>
						<hr>
						<h2 class="font-light text-center">{{count($users)}}</h2>
						<div class="m-t-30">
							<div class="row text-center">
								<div class="col-6 border-right">
									<h4 class="m-b-0">{{count($usersMonth)}}</h4>
									<span class="font-14 text-muted">Bergabung bulan ini</span>
								</div>
								<div class="col-6">
									<h4 class="m-b-0">{{count($usersYear)}}</h4>
									<span class="font-14 text-muted">bergabung tahun ini</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title m-b-5 text-center">Total Barang</h5>
				<hr>
				<h3 class="font-light text-center">{{count($items)}}</h3>
				<div class="m-t-20 text-center">
					<a href="{{route('item-management')}}" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title m-b-5 text-center">Barang masuk bulan ini</h5>
				<hr>
				<h3 class="font-light text-center">{{count($itemsMonth)}}</h3>
				<div class="m-t-20 text-center">
					<a href="" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title m-b-5 text-center">Stok masuk bulan ini</h5>
				<hr>
				<h3 class="font-light text-center">{{$stocksMonth}}</h3>
				<div class="m-t-20 text-center">
					<a href="" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="card">  
					<div class="card-body">
						<h4 class="card-title m-b-0 text-center">Transaksi</h4>
						<hr>
						<h2 class="font-light text-center">0</h2>
						<div class="m-t-30">
							<div class="row text-center">
								<div class="col-6 border-right">
									<h4 class="m-b-0">0</h4>
									<span class="font-14 text-muted">Transkasi bulan ini</span>
									<br><br>
									<a href="" class="btn btn-primary">Detail</a>
								</div>
								<div class="col-6">
									<h4 class="m-b-0">0</h4>
									<span class="font-14 text-muted">Transaksi tertunda</span>
									<br><br>
									<a href="" class="btn btn-danger">Proses</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div>
<div class="row">
		<!-- column -->
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Recent Review</h4>
				</div>
				<div class="comment-widgets" style="height:430px;">
					<!-- Comment Row -->
					<div class="d-flex flex-row comment-row m-t-0">
						<div class="p-2">
							{{-- Ava User --}}
						</div>
						<div class="comment-text w-100">
							<h6 class="font-medium">James Anderson</h6>
							<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
							<div class="comment-footer">
								<span class="text-muted float-right">April 14, 2016</span>
								<span class="label label-rounded label-primary">Pending</span>
								<span class="action-icons">
									<a href="javascript:void(0)">
										<i class="ti-pencil-alt"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-check"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-heart"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- Comment Row -->
					<div class="d-flex flex-row comment-row">
						<div class="p-2">
							
						</div>
						<div class="comment-text active w-100">
							<h6 class="font-medium">Michael Jorden</h6>
							<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
							<div class="comment-footer ">
								<span class="text-muted float-right">April 14, 2016</span>
								<span class="label label-success label-rounded">Approved</span>
								<span class="action-icons active">
									<a href="javascript:void(0)">  	
										<i class="ti-pencil-alt"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="icon-close"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-heart text-danger"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- Comment Row -->
					<div class="d-flex flex-row comment-row">
						<div class="p-2">
							
						</div>
						<div class="comment-text w-100">
							<h6 class="font-medium">Johnathan Doeting</h6>
							<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
							<div class="comment-footer">
								<span class="text-muted float-right">April 14, 2016</span>
								<span class="label label-rounded label-danger">Rejected</span>
								<span class="action-icons">
									<a href="javascript:void(0)">
										<i class="ti-pencil-alt"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-check"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-heart"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- Comment Row -->
					<div class="d-flex flex-row comment-row m-t-0">
						<div class="p-2">
							
						</div>
						<div class="comment-text w-100">
							<h6 class="font-medium">Steve Jobs</h6>
							<span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
							<div class="comment-footer">
								<span class="text-muted float-right">April 14, 2016</span>
								<span class="label label-rounded label-primary">Pending</span>
								<span class="action-icons">
									<a href="javascript:void(0)">
										<i class="ti-pencil-alt"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-check"></i>
									</a>
									<a href="javascript:void(0)">
										<i class="ti-heart"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script>
		var chartdata = {
			type: 'bar',
			data: {
			labels: <?php echo json_encode($Months); ?>,
		// labels: month,
				datasets: [
					{
					label: 'this year',
					backgroundColor: '#26B99A',
					borderWidth: 1,
					data: <?php echo json_encode($Data); ?>
					}
				]
			},
				options: {
					scales: {
					yAxes: [{
					ticks: {
					beginAtZero:true
						}
					}]
				}
			}
		}
			var ctx = document.getElementById('canvas').getContext('2d');
			new Chart(ctx, chartdata);
</script>
@endsection


