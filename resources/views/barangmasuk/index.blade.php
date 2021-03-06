@extends('layouts.barangmasuk')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-right">
                @include('barangmasuk.add')
            </div>

            <h6 class="m-0 font-weight-bold text-primary mt-2">Tabel Data Barang Masuk</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kategori Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tanggal Masuk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($barangmasuk as $barangmasuk)
                        <tr>
                            <td class="text-left">{{$no++}}</td>
                            <td class="text-left">{{$barangmasuk->kategoribarang->keteranganbarang}}</td>
                            <td class="text-left">{{$barangmasuk->nama_brg}}</td>
                            <td class="text-left">{{$barangmasuk->jumlah_brg}}</td>
                            <td class="text-left">{{$barangmasuk->tgl_masuk}}</td>
                            <td>
                                @include('barangmasuk.edit')
                                @include('barangmasuk.delete')
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
