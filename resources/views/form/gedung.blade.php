@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formGedung"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exportgedung') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Gedung dan Bangunan</h3>
        <thead>
            <tr>
                <th>NO</th>
                <th>Jenis Barang/ Nama Barang</th>
                <th>Nomor Kode Barang</th>
                <th>No. Reg</th>
                <th>Kondisi Bangunan (B,KB,RB)</th>
                <th>Konstruksi Bangunan Tingkat</th>
                <th>Konstruksi Bangunan Pondasi</th>
                <th>Luas Lantai (M2)</th>
                <th>Letak/ Lokasi Alamat</th>
                <th>Dokumen Gedung Tgl</th>
                <th>Dokumen Gedung Nomor</th>
                <th>Luas (M2)</th>
                <th>Status Tanah</th>
                <th>No. Kode Tanah</th>
                <th>Asal Usul</th>
                <th>Jumlah Gedung</th>
                <th>Nilai / Harga Perolehan (Rp)</th>
                <!-- <th>Kode Sub Akun</th>
                <th>SUB SUB</th>
                <th>Kode Tmbh Brg</th>
                <th>Kode Kurang Brg</th> -->
                <th>SP2D No</th>
                <th>SP2D Tgl</th>
                <th>SPK/SP/KW No</th>
                <th>SPK/SP/KW Tgl</th>
                <th>No. BA/SK No</th>
                <th>No. BA/SK Tgl</th>
                <th>SKPD Pemberi/ SKPD Penerima (Khusus Mutasi Barang)</th>
                <!-- <th>KODE SUB SUB AKUN</th> -->
                <th>KODE KATEGORI LAMA</th>
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
          @foreach($gedungBgns as $gedungBgn)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $gedungBgn->NamaBarang }}</td>
              <td>{{ $gedungBgn->NoKodeBrg }}</td>
              <td>{{ $gedungBgn->NoReg }}</td>
              <td>{{ $gedungBgn->KondisiBgn }}</td>
              <td>{{ $gedungBgn->KBTingkat }}</td>
              <td>{{ $gedungBgn->KBPondasi }}</td>
              <td>{{ $gedungBgn->LuasLt}}</td>
              <td>{{ $gedungBgn->Alamat }}</td>
              <td>{{ $gedungBgn->DokTgl }}</td>
              <td>{{ $gedungBgn->DokNo }}</td>
              <td>{{ $gedungBgn->Luas }}</td>
              <td>{{ $gedungBgn->StatusTanah }}</td>
              <td>{{ $gedungBgn->KodeTanah }}</td>
              <td>{{ $gedungBgn->AsalUsul }}</td>
              <td>{{ $gedungBgn->JumlahGd }}</td>
              <td>{{ $gedungBgn->HargaPerolehan }}</td>
              
              <td>{{ $gedungBgn->SpNo }}</td>
              <td>{{ $gedungBgn->SpTgl }}</td>
              <td>{{ $gedungBgn->KwNo }}</td>
              <td>{{ $gedungBgn->KwTgl }}</td>
              <td>{{ $gedungBgn->BaNo }}</td>
              <td>{{ $gedungBgn->BaTgl }}</td>
              <td>{{ $gedungBgn->SkpdPemberi }}</td>
              
              <td>{{ $gedungBgn->KodeLama }}</td>
              <td>{{ $gedungBgn->KodeBaru }}</td>
              <td>{{ $gedungBgn->Level1 }}</td>
              <td>{{ $gedungBgn->Level2 }}</td>
              <td>{{ $gedungBgn->Level3 }}</td>
              <td>{{ $gedungBgn->Level4 }}</td>
              <td>{{ $gedungBgn->Level5 }}</td>
              <td><a href="{{ url('FotoBrg') }}/{{ $gedungBgn->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $gedungBgn->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
              <td>
                <a href="{{ url('/update/editGedung') }}/{{ $gedungBgn->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ url('gedungBgn') }}/{{ $gedungBgn->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
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
