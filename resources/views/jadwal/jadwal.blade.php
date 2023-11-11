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
                                <li class="breadcrumb-item active">Jadwal Kelas</li>
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
                                    <h3 class="card-title">Jadwal Kelas</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <td>
                                        <button type="button" class="btn btn-success mb-2"
                                            onclick="location.href='{{ route('jadwal.create') }}'">
                                            Tambah Data
                                        </button>
                                    </td>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kelas</th>
                                                <th>Mata Kuliah</th>
                                                <th>Dosen</th>
                                                <th>Hari</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Ruangan</th>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal as $jad)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $jad->kelas }}</td>
                                                    <td>{{ $jad->matakuliah }}</td>
                                                    <td>{{ $jad->dosen }}</td>
                                                    <td>{{ $jad->hari }}</td>
                                                    <td>{{ $jad->jam_mulai }}</td>
                                                    <td>{{ $jad->jam_selesai }}</td>
                                                    <td>{{ $jad->ruangan }}</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="px-2">
                                                                <button type="submit" class="btn btn-primary"
                                                                    onclick="location.href='{{ route('jadwal-mengajar.edit', $jad->id) }}">Edit</button>
                                                            </div>
                                                            <div>
                                                                <form
                                                                    action="{{ route('jadwal-mengajar.destroy', $jad->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" id="delete"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
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
