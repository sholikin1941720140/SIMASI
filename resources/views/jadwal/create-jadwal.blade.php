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
                                <li class="breadcrumb-item active">Tambah Jadwal</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="{{ route('jadwal.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Jadwal</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                name="kelas">
                                                                <option selected disabled>Pilih Kelas</option>
                                                                @foreach ($kelas as $kel)
                                                                    <option value="{{ $kel->nama_kelas }}"
                                                                        id="{{ $kel->id }}">{{ $kel->nama_kelas }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                id="nip" name="matakuliah">
                                                                <option selected disabled>Mata Kuliah</option>
                                                                @foreach ($mengajar as $meng)
                                                                    <option value="{{ $meng->matakuliah }}"
                                                                        id="{{ $meng->id }}">{{ $meng->matakuliah }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                name="dosen">
                                                                <option selected disabled>Pilih Dosen</option>
                                                                @foreach ($mengajar as $meng)
                                                                    <option value="{{ $meng->nama_dosen }}"
                                                                        id="{{ $meng->id }}">{{ $meng->nama_dosen }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                name="hari">
                                                                <option selected disabled>Pilih Hari</option>
                                                                <option value="Senin">Senin</option>
                                                                <option value="Selasa">Selasa</option>
                                                                <option value="Rabu">Rabu</option>
                                                                <option value="Kamis">Kamis</option>
                                                                <option value="Jumat">Jumat</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="time" id="appt" name="jam_mulai">
                                                    </td>
                                                    <td>
                                                        <input type="time" id="appt" name="jam_selesai">
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                name="ruangan">
                                                                <option selected disabled>Pilih Ruangan</option>
                                                                @foreach ($ruangan as $ruang)
                                                                    <option value="{{ $ruang->nama_ruangan }}"
                                                                        id="{{ $ruang->id }}">
                                                                        {{ $ruang->nama_ruangan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                <tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
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
