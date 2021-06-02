@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Post</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. ID :</strong>
                    <input type="text" name="no_id" value="{{ $post->no_id }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <textarea class="form-control" style="height:40px" name="nama" placeholder="Nama lengkap Anda">{{ $post->nama}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Province:</strong>
                    <textarea class="form-control" style="height:40px" name="province" placeholder="Provinsi">{{ $post->province }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-check">
                    <strong>Status:</strong>
                        <br>
                        <input class="form-check-input" type="radio" name="status"></input>
                        <label class="form-check-label" for="exampleRadios1">Aktif</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="status"></input>
                        <label class="form-check-label" for="exampleRadios2">Non-Aktif</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. SK:</strong>
                    <textarea class="form-control" style="height:40px" name="no_sk" placeholder="No. SK">{{ $post->no_sk }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal SK:</strong>
                    <input type="date" name="tgl_sk"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat :</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat lengkap">{{ $post->alamat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email :</strong>
                    <textarea class="form-control" style="height:40px" name="email" placeholder="Email">{{ $post->email}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection
