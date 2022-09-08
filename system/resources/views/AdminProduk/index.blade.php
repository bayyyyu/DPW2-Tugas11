@extends('template.Adminbase')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{url('AdminProduk/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                            
                            <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}" placeholder="Nama..">
                        </div>
                         <div class="form-group">
                            
                            <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}" placeholder="Stok..">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}" placeholder="Harga Min.." >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}" placeholder="Harga Max.." >
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-light float-right"><i class=" mdi mdi-filter"></i>
                            Filter</button>
                        </form>
                        <a href="{{url('AdminProduk')}}" class="btn btn-dark float-right mr-3"><i class="mdi mdi-broom"></i>Clear</a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('AdminProduk/create')}}" class="btn btn-light float-right"><i class="mdi mdi-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach($list_produk as $produk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="{{url('AdminProduk', $produk->id)}}" class="btn btn-light"><i class="mdi mdi-information"></i></a>
                                            <a href="{{url('AdminProduk', $produk->id)}}/edit" class="btn btn-warning ml-1 mr-1"><i class="mdi mdi-pencil"></i></a>
                                            @include('template.utils.delete', ['url'=> url('AdminProduk', $produk->id)])
                                        </div>  
                                    </td>
                                    <td>{!! substr(nl2br ($produk->nama),0,40,) !!}.....</td>
                                    <td>Rp. {{number_format($produk->harga)}}</td>
                                    <td>{{$produk->stok}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection