@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Jadwal Mengajar</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Jadwal Mengajar</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <td>
                                        <button type="button" class="btn btn-success mb-2"
                                            onclick="location.href='{{ route('admin-tambah-jadwal-mengajar.create') }}'">
                                            Tambah Data
                                        </button>
                                    </td>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Dosen</th>
                                                <th>NIP</th>
                                                <th>Mata Kuliah</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mengajars as $mengajar)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $mengajar->nama_dosen }}</td>
                                                    <td>{{ $mengajar->nip }}</td>
                                                    <td>{{ $mengajar->matakuliah }}</td>
                                                    <td>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary"
                                                                onclick="location.href='{{ route('admin-edit-jadwal-mengajar.edit', $mengajar->id) }}">Edit</button>
                                                        </div>
                                                        <div>
                                                            <form
                                                                action="{{ route('admin-delete-jadwal-mengajar.destroy', $mengajar->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" id="delete"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                <tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection
