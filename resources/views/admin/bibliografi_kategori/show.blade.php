@extends('admin.master')

@section('title')
    Bibliografi Kategori
@stop

@section('css')

@stop

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$bk->deskripsi}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('bibliografikat.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Bibliografi Kategori</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline col-sm-5">
                    <div class="card-body">
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Deskripsi</b> <a class="float-right">{{$bk->deskripsi}}</a>
                            </li>
                        </ul>

                        <form action="{{ route('bibliografikat.destroy',$bk->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('bibliografikat.show',$bk->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('bibliografikat.edit',$bk->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')

@endsection
