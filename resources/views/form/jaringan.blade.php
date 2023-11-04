@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formJaringan"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exportjaringan') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Jaringan dan Irigasi</h3>
        <thead>
            <tr>
                <th>NO</th>
                <th>Jenis Barang/ Nama Barang</th>
                <th>Nomer Kode Barang</th>
                <th>No. Reg</th>
                <th>Kontruksi</th>
                <th>Panjang (Km)</th>
                <th>Lebar (M)</th>
                <th>Luas (M2)</th>
                <th>Dokumen Tanggal</th>
                <th>Dokumen Nomer</th>
                <th>No. Kode Tanah</th>
                <th>Asal-usul</th>
                <th>Jumlah</th>
                <th>Nilai / Harga Perolehan (Rp)</th>
                <th>Kondisi</th>
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
                <th>CEK KECOCOKAN KODE LAMA DAN KODE TERBARU</th>
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
          @foreach($jrgnIrigasis as $jrgnIrigasi)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $jrgnIrigasi->NamaBarang }}</td>
              <td>{{ $jrgnIrigasi->NoKodeBrg }}</td>
              <td>{{ $jrgnIrigasi->NoReg }}</td>
              <td>{{ $jrgnIrigasi->Kontruksi }}</td>
              <td>{{ $jrgnIrigasi->Panjang }}</td>
              <td>{{ $jrgnIrigasi->Lebar }}</td>
              <td>{{ $jrgnIrigasi->Luas }}</td>
              <td>{{ $jrgnIrigasi->DokTgl }}</td>
              <td>{{ $jrgnIrigasi->DokNo }}</td>
              <td>{{ $jrgnIrigasi->KodeTanah }}</td>
              <td>{{ $jrgnIrigasi->AsalUsul }}</td>
              <td>{{ $jrgnIrigasi->Jumlah }}</td>
              <td>{{ $jrgnIrigasi->HargaPerolehan }}</td>
              <td>{{ $jrgnIrigasi->Kondisi }}</td>
              
              <td>{{ $jrgnIrigasi->SpNo }}</td>
              <td>{{ $jrgnIrigasi->SpTgl }}</td>
              <td>{{ $jrgnIrigasi->KwNo }}</td>
              <td>{{ $jrgnIrigasi->KwTgl }}</td>
              <td>{{ $jrgnIrigasi->BaNo }}</td>
              <td>{{ $jrgnIrigasi->BaTgl }}</td>
              <td>{{ $jrgnIrigasi->SkpdPemberi }}</td>
              
              <td>{{ $jrgnIrigasi->KodeLama }}</td>
              <td>{{ $jrgnIrigasi->KodeBaru }}</td>
              <td>{{ $jrgnIrigasi->CekKecocokan }}</td>
              <td>{{ $jrgnIrigasi->Level1 }}</td>
              <td>{{ $jrgnIrigasi->Level2 }}</td>
              <td>{{ $jrgnIrigasi->Level3 }}</td>
              <td>{{ $jrgnIrigasi->Level4 }}</td>
              <td>{{ $jrgnIrigasi->Level5 }}</td>
              <td><a href="{{ url('FotoBrg') }}/{{ $jrgnIrigasi->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $jrgnIrigasi->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
              <td>
                <a href="{{ url('/update/editJaringan') }}/{{ $jrgnIrigasi->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ url('jrgnIrigasi') }}/{{ $jrgnIrigasi->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
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
