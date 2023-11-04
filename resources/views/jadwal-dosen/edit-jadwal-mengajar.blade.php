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
                                <li class="breadcrumb-item active">Tambah Jadwal Mengajar</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="{{ route('admin-edit-jadwal-mengajar.update', $jadwalMengajar->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Jadwal Mengajar</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Dosen</th>
                                                    <th>NIP</th>
                                                    <th>Mata Kuliah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                id="dosen" name="nama_dosen">
                                                                <option selected disabled>Pilih Dosen</option>
                                                                @foreach ($dosen as $dos)
                                                                    <option value="{{ $dos->nama }}"
                                                                        id="{{ $dos->id }}">{{ $dos->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                id="nip" name="nip">
                                                                <option selected disabled>NIP</option>
                                                                @foreach ($dosen as $dos)
                                                                    <option value="{{ $dos->nip }}"
                                                                        id="{{ $dos->id }}">{{ $dos->nip }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;"
                                                                name="matakuliah">
                                                                <option selected disabled>Pilih Mata Kuliah</option>
                                                                @foreach ($matkul as $mat)
                                                                    <option value="{{ $mat->nama_matkul }}"
                                                                        id="{{ $mat->id }}">{{ $mat->nama_matkul }}
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

    {{-- <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('#dosen').on('change', function() {
                    let id = $(this).children(":selected").attr("id");

                    $.ajax({
                        url: "{{ url('getNip') }}",
                        method: 'POST',
                        data: {
                            id: id
                        },
                        cache: false,

                        success: function(data) {
                            $('#nip').html(data.html);
                        }
                        error: function(data) {
                            console.log("error:", data);
                        }
                    })
                })
            })
        })
    </script> --}}
@endsection
