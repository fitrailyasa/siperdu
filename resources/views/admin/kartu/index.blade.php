@extends('layouts.admin.app')

@section('title', 'Kartu Perpustakaan')

@section('kartu', 'active')

@section('content')

    <style>
        /* Add your custom styles here */
        .image-container {
            position: relative;
            text-align: center;
        }

        .text-on-image2 {
            position: absolute;
            top: 50%;
            left: 29%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 20px;
            font-size: 15px;
        }

        .text-on-image {
            position: absolute;
            top: 60%;
            left: 48%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 15px;
        }
    </style>

    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kartu</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kartus as $kartu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="image-container">
                                        <img class="img-fluid" width="400" src="{{ asset('assets/images/kartu.png') }}"
                                            alt="">
                                        <div class="text-on-image2">
                                            <img class="img img-fluid rounded mx-auto d-block" width="70px"
                                                src="{{ asset('assets/profile/' . $kartu->gambar_user) }}" alt="">
                                        </div>
                                        <div class="text-on-image text-left">
                                            <h5 class="small font-weight-bold">Nama
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                                {{ $kartu->nama ?? '-' }}
                                            </h5>
                                            <h5 class="small font-weight-bold">NIS/NISN &nbsp;: {{ $kartu->nisn ?? '-' }}
                                            </h5>
                                            <h5 class="small font-weight-bold">Status
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                                {{ $kartu->roles->nama_roles ?? '-' }}
                                                Perpustakaan</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="manage-row">
                                    @if (auth()->user()->roles_id == 1)
                                        <a href="{{ route('admin.cetak-kartu', $kartu->id) }}"
                                            class="btn-sm btn-success">Detail</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kartu</th>
                            <th>More</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

@endsection

@section('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
