@extends('backend.layouts.content')

@section('content')
<div class="row">
		<div class="col-md-10">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3 class="text-primary">Welcome to Sukasukalo.com Admin Console !</h3><br><br>
					</div>
					<h4 class="card-title">Transaksi terjadi</h4>
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
						<h4 class="card-title m-b-0">Users</h4>
						<h2 class="font-light">{{count($users)}}</h2>
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
				<h5 class="card-title m-b-5">Total Barang</h5>
				<h3 class="font-light text-center">{{count($items)}}</h3>
				<div class="m-t-20 text-center">
					<a href="" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title m-b-5">Barang masuk bulan ini</h5>
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
						<h4 class="card-title m-b-0">Transaksi</h4>
						<h2 class="font-light">0</h2>
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