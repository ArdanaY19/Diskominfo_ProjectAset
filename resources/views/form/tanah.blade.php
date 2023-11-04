@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formTanah"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exporttanah') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Tanah</h3>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Barang / Nama Barang</th>
                <th>Nomor Kode Barang</th>
                <th>No. Reg</th>
                <th>Luas (M2)</th>
                <th>Tahun Pengadaan</th>
                <th>Letak / Alamat</th>
                <th>Status Tanah Hak</th>
                <th>Status Tanah Sertifikat Tanggal</th>
                <th>Status Tanah Sertifikat Nomor</th>
                <th>Penggunaan</th>
                <th>Asal Usul</th>
                <th>Jumlah</th>
                <th>Nilai / Harga Perolehan (Rp)</th>
                <!-- <th>Kode Sub Akun</th>
                <th>Kode Tmbh Brg</th>
                <th>Kode Kurang Brg</th> -->
                <th>SP2D No</th>
                <th>SP2D Tgl</th>
                <th>SPK/SP/KW No</th>
                <th>SPK/SP/KW Tgl</th>
                <th>No. BA No</th>
                <th>No. BA Tgl</th>
                <th>SKPD Pemberi/ SKPD Penerima (Khusus Mutasi Barang)</th>
                <th>INPUT KODE KATEGORI BARU</th>
                <th>LEVEL 1</th>
                <th>LEVEL 2</th>
                <th>LEVEL 3</th>
                <th>LEVEL 4</th>
                <th>LEVEL 5</th>
                <th>Foto Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($tanahs as $tanah)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $tanah->NamaBarang }}</td>
                <td>{{ $tanah->NoKodeBrg }}</td>
                <td>{{ $tanah->NoReg }}</td>
                <td>{{ $tanah->Luas }}</td>
                <td>{{ $tanah->Tahun }}</td>
                <td>{{ $tanah->Alamat }}</td>
                <td>{{ $tanah->StatusHak }}</td>
                <td>{{ $tanah->SertifTgl }}</td>
                <td>{{ $tanah->SertifNo }}</td>
                <td>{{ $tanah->Penggunaan }}</td>
                <td>{{ $tanah->AsalUsul }}</td>
                <td>{{ $tanah->Jumlah }}</td>
                <td>{{ $tanah->HargaPerolehan }}</td>

                <td>{{ $tanah->SpNo }}</td>
                <td>{{ $tanah->SpTgl }}</td>
                <td>{{ $tanah->KwNo }}</td>
                <td>{{ $tanah->KwTgl }}</td>
                <td>{{ $tanah->BaNo }}</td>
                <td>{{ $tanah->BaTgl }}</td>
                <td>{{ $tanah->SkpdPemberi }}</td>
                <td>{{ $tanah->KodeBaru }}</td>
                <td>{{ $tanah->Level1 }}</td>
                <td>{{ $tanah->Level2 }}</td>
                <td>{{ $tanah->Level3 }}</td>
                <td>{{ $tanah->Level4 }}</td>
                <td>{{ $tanah->Level5 }}</td>
                <td><a href="{{ url('FotoBrg') }}/{{ $tanah->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $tanah->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
                <td>
                    <a href="{{ url('/update/editTanah') }}/{{ $tanah->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ url('tanah') }}/{{ $tanah->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection