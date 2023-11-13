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
                    <h1 class="m-0">Bibliografi Kategori</h1>
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
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($bks as $bk)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $bk->deskripsi }}</td>
                            <td>
                                <form action="{{ route('bibliografikat.destroy',$bk->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('bibliografikat.show',$bk->id) }}">Detil</a>

                                    <a class="btn btn-primary" href="{{ route('bibliografikat.edit',$bk->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('js')

@endsection
