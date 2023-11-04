@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formAtetap"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exportatetap') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Aset Tetap Lainnya</h3>
        <thead>
            <tr>
                <th>NO</th>
                <th>Jenis Barang / Nama Barang</th>
                <th>Nomor Kode Barang</th>
                <th>No. Reg</th>
                <th>Buku / Perpustakaan Judul / Pencipta</th>
                <th>Buku / Perpustakaan Spesifikasi</th>
                <th>Barang Bercorak Kesenian / Kebudayaan Asal Daerah</th>
                <th>Barang Bercorak Kesenian / Kebudayaan Pencipta </th>
                <th>Barang Bercorak Kesenian / Kebudayaan Bahan</th>
                <th>Hewan / Ternak Dan Tumbuhan Jenis</th>
                <th>Hewan / Ternak Dan Tumbuhan Ukuran</th>
                <th>Jumlah</th>
                <th>Tahun Cetak/ Pembelian</th>
                <th>Harga Satuan</th>
                <th>Nilai / Harga Perolehan (Rp)</th>
                <!-- <th>Kode Sub Akun</th>
                <th>SUB SUB</th>
                <th>Kode Tmbh Brg</th>
                <th>Kode Kurang Brg</th> -->
                <th>SP2D NO</th>
                <th>SP2D Tgl</th>
                <th>SPK/SP/KW NO</th>
                <th>SPK/SP/KW Tgl</th>
                <th>No. BA/SK NO</th>
                <th>No. BA/SK Tgl</th>
                <th>SKPD Pemberi/ SKPD Penerima (Khusus Mutasi Barang)</th>
                <!-- <th>KODE SUB SUB AKUN</th>
                <th>KAPITALISASI</th> -->
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
          @foreach($asetTtpLains as $asetTtpLain)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $asetTtpLain->NamaBarang }}</td>
              <td>{{ $asetTtpLain->NoKodeBrg }}</td>
              <td>{{ $asetTtpLain->NoReg }}</td>
              <td>{{ $asetTtpLain->JudulBuku }}</td>
              <td>{{ $asetTtpLain->Spesifikasi }}</td>
              <td>{{ $asetTtpLain->SeniAsalDaerah }}</td>
              <td>{{ $asetTtpLain->SeniPencipta}}</td>
              <td>{{ $asetTtpLain->SeniBahan }}</td>
              <td>{{ $asetTtpLain->JenisHT }}</td>
              <td>{{ $asetTtpLain->UkuranHT }}</td>
              <td>{{ $asetTtpLain->Jumlah }}</td>
              <td>{{ $asetTtpLain->TahunCetak }}</td>
              <td>{{ $asetTtpLain->HargaSatuan }}</td>
              <td>{{ $asetTtpLain->HargaPerolehan }}</td>
              
              <td>{{ $asetTtpLain->SpNo }}</td>
              <td>{{ $asetTtpLain->SpTgl }}</td>
              <td>{{ $asetTtpLain->KwNo }}</td>
              <td>{{ $asetTtpLain->KwTgl }}</td>
              <td>{{ $asetTtpLain->BaNo }}</td>
              <td>{{ $asetTtpLain->BaTgl }}</td>
              <td>{{ $asetTtpLain->SkpdPemberi }}</td>
              
              <td>{{ $asetTtpLain->KodeLama }}</td>
              <td>{{ $asetTtpLain->KodeBaru }}</td>
              <td>{{ $asetTtpLain->CekKecocokan }}</td>
              <td>{{ $asetTtpLain->Level1 }}</td>
              <td>{{ $asetTtpLain->Level2 }}</td>
              <td>{{ $asetTtpLain->Level3 }}</td>
              <td>{{ $asetTtpLain->Level4 }}</td>
              <td>{{ $asetTtpLain->Level5 }}</td>
              <td><a href="{{ url('FotoBrg') }}/{{ $asetTtpLain->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $asetTtpLain->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
              <td>
                <a href="{{ url('/update/editAtetap') }}/{{ $asetTtpLain->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ url('asetTtpLain') }}/{{ $asetTtpLain->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
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
