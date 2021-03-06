@extends('backend.layouts.content')
@section('content')
    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Generate laporan</h4>
                        </div> <hr>
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="category">Kategori laporan</label>
                                <select name="categoryReport" id="categoryReport" class="form-control">
                                    <option value="none" selected>Pilih</option>
                                    <option value="items">Barang</option>
                                    <option value="users">User</option>
                                    <option value="transactions">Transaksi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subCategory">Sub Kategori</label>
                                <select name="subCategory" id="subCategory" class="form-control">
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="all" class="subes" id="all">Semua</option>
                                    <option value="stocks" class="subes" id="subitems2">Stok</option>
                                    <option value="itemCategory" class="subes" id="subitems3">Kategori</option>
                                    <option value="active" class="subes" id="subusers2">Aktif</option>
                                    <option value="joinThisMonth" class="subes" id="subusers3">Baru bergabung</option>
                                    <option value="tranSuccess" class="subes" id="subtrans2">Transaksi berhasil</option>
                                    <option value="tranPending" class="subes" id="subtrans3">Transaksi Tertunda</option>
                                    <option value="thisMonthValue" class="subes" id="subtrans1">Pendapatan bulan ini</option>
                                </select>
                            </div>
                            <div class="row" id="dates">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dFrom">Tanggal Awal</label>
                                        <input type="date" name="dFrom" id="subes" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dtill">Tanggal Akhir</label>
                                        <input type="date" name="dTill" id="subes" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .subes{ 
                display: none;
        }
    </style>
   
@endsection
@section('js')
<script>
        $("#categoryReport").on('change', function() {
            if ($(this).val() == 'items'){
                $("#subitems2").show();
                $("#subitems3").show();
                $("#all").show();
                $("#subusers2").hide();
                $("#subusers3").hide();
                $("#subtrans2").hide();
                $("#subtrans2").hide();
                $("#subtrans3").hide();
            } else if ($(this).val() == 'users') {
                $("#subusers2").show();
                $("#subusers3").show();
                $("#all").show();
                $("#subitems2").hide();
                $("#subitems3").hide();
                $("#subtrans2").hide();
                $("#subtrans2").hide();
                $("#subtrans3").hide();
            }else if ($(this).val() == 'transactions'){
                $("#subtrans2").show();
                $("#subtrans2").show();
                $("#subtrans3").show();
                $("#all").show();
                $("#subitems2").hide();
                $("#subitems3").hide();
                $("#subusers2").hide();
                $("#subusers3").hide();
            }else{

                $('.subes').hide();
            }
            
        });
</script>    
@endsection