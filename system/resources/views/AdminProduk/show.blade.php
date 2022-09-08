@extends('template.Adminbase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{url('AdminProduk')}}" class="btn btn-light float-right"><i class="mdi mdi-exit-to-app"></i></a>
                       Detail Data Produk
                    </div>
                        <div class="col-md-2 float-left">
                            <img src="{{url("public",$produk->foto)}}" alt="" class="img-fluid">
                        </div>
                    <div class="card-body">
                        
                        <br>
                        <p> Seller : {{$produk->seller->nama}}<br>
                            Nama Produk : {{$produk->nama}} <br> 
                            Harga : Rp. {{$produk->harga}} <br> 
                            Stok : {{$produk->stok}} <br> 
                            Berat : {{$produk->berat}} gr <br>
                            Waktu Upload : {{$produk->created_at->diffForHumans()}} 
                        </p>
                        <hr>
                            Deskripsi
                        <p>
                            {!!nl2br ($produk->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection