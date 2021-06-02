@extends('layouts.app')

@section('content')


        <div class="container">
            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                        
                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Database List</h2>
                                <!--<ol class="breadcrumb p-0 m-0">-->
                                    <li class="breadcrumb-item"><a href="/"><<< Back to Home</a></li>
                                <!--</ol>-->
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    
    <hr>
      
    <div class="table-container">
        <div class="border-bottom-2 py-32pt position-relative z-1">
            <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-xsm-left">
                <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
                    <div class="card shadow mb-4">
                        <div class="card-header py-2">Tabel Anggota</div>
                            <div class="card-body">
                                <div class="table-responsive table-striped table-overflow-auto">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            
                                            <!--<table contents>-->
                                            
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="10px" class="text-center">No</th>
                                                    <th>No.ID</th>
                                                    <th width="100px" class="text-center">Daerah</th>
                                                    <th width="50px" class="text-center">Status</th>
                                                    <th>No. SK</th>
                                                    <th>Tgl SK</th>
                                                    <th>Alamat</th>
                                                    <th width="100px" class="text-center">Email</th>
                                                    <th width="140px" class="text-center">QR.C</th>
                                                    <th width="150px" class="text-center">Action</th>
                                                </tr>
                                                @foreach ($posts as $post)
                                                <tr class="small">
                                                    <td class="text-center">{{ ++$i }}</td>

                                                    <td>{{ $post->no_id }}</td>

                                                    <td>{{ $post->province }}</td>

                                                    <td>{{ $post->status }}</td>

                                                    <td>{{ $post->no_sk }}</td>

                                                    <td>{{ $post->tgl_sk }}</td>
                                                    
                                                    <td>{{ $post->alamat }}</td>

                                                    <td>{{ $post->email }}</td>
                                                    
                                                    <!--<td>{{ $post->qr_c}}</td>-->
                                                    
                                                    <td>
                                                        <?php
                                                            $qr_code = "posts/".$post['no_id']."/".$post['province']."";
                                                            require_once('assets/phpqrcode/qrlib.php');
                                                            QRCode::png("$qr_code","kode".$i.".png","M", 1,1);
                                                        ?>
                                                        <img src="kode<?php $i ?>.png" alt="">
                                                    </td>



                                                    <td class="text-center">
                                                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                        
                                                            <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}"><i class="fa fa-eye"></i></a>
                                        
                                                            <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}"><i class="fa fa-pencil"></i></a></a>
                                        
                                                            @csrf
                                                            @method('DELETE')
                                        
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </table>
                                            <!--<end table contents>-->
                                            
                                            <!--<Tambah Anggota Button>-->
                                            <div class="float-right">
                                                <a class="btn btn-success" href="{{ route('posts.create') }}"> Tambah Anggota</a>
                                            </div>

                                            @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                            @endif
                                            <!--<End Tambah Anggota Button>-->

                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>  

    <div class="container">
        made with <i class="fa fa-heart"></i> by : <a href="https://digyta.net" target="_blank"> digyta.net
    </div>  
                                        
    {!! $posts->links() !!}
 
@endsection