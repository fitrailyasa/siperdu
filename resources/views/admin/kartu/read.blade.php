@extends('layouts.admin.app')

@section('title', 'Cetak Kartu Perpustakaan')

@section('kartu', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.kartu.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <style>
        .print-button {
            display: block;
            /* Tampilkan tombol saat tampilan layar normal */
        }

        @media print {
            .print-button {
                display: none;
                /* Sembunyikan tombol saat halaman sedang dicetak */
            }
        }

        .image-container {
            position: relative;
            text-align: center;
        }

        .text-on-image2 {
            position: absolute;
            top: 50%;
            left: 35%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 20px;
            font-size: 15px;
        }

        .text-on-image {
            position: absolute;
            top: 60%;
            left: 49%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 15px;
        }
    </style>

    <div class="card">
        <div class="card-body">
            <div class="image-container">
                <img class="img-fluid" width="400" src="{{ asset('assets/images/kartu.png') }}" alt="">
                <div class="text-on-image2">
                    <img class="img img-fluid rounded mx-auto d-block" width="70px"
                        src="{{ asset('assets/profile/' . $kartu->gambar_user) }}" alt="">
                </div>
                <div class="text-on-image text-left">
                    <h5 class="small font-weight-bold">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        {{ $kartu->nama ?? '-' }}
                    </h5>
                    <h5 class="small font-weight-bold">NIS/NISN &nbsp;: {{ $kartu->nisn ?? '-' }}</h5>
                    <h5 class="small font-weight-bold">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        {{ $kartu->roles->nama_roles ?? '-' }}
                        Perpustakaan</h5>
                </div>
            </div>
        </div>
        <button class="btn btn-primary print-button" onclick="window.print()">Cetak</button>
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
