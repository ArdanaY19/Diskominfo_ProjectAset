@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formKontruksi"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exportkontruksi') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Konstruksi Pengerjaan</h3>
        <thead>
            <tr>
                <th>NO</th>
                <th>Jenis Barang/ Nama Barang</th>
                <th>Kontruksi Tingkat</th>
                <th>Kontruksi Beton</th>
                <th>Luas (M2)</th>
                <th>Letak / Lokasi Alamat</th>
                <th>Dokumen Bangunan Tanggal</th>
                <th>Dokumen Bangunan Nomor</th>
                <th>Tanggal, Bulan, Th Mulai</th>
                <th>Status Tanah</th>
                <th>No. Kode Tanah</th>
                <th>Asal Usul</th>
                <th>Nilai Kontrak ( Rp )</th>
                <!-- <th>Kode Sub Akun</th>
                <th>Kode Tmbh Brg</th>
                <th>Kode Kurang Brg</th> -->
                <th>SP2D No</th>
                <th>SP2D Tgl</th>
                <th>SPK/SP/KW No</th>
                <th>SPK/SP/KW Tgl</th>
                <th>No. BA/SK No</th>
                <th>No. BA/SK Tgl</th>
                <th>SKPD Pemberi/ SKPD Penerima (Khusus Mutasi Barang)</th>
                <th>Foto Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          @foreach($kontruksis as $kontruksi)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $kontruksi->NamaBarang }}</td>
              <td>{{ $kontruksi->Tingkat }}</td>
              <td>{{ $kontruksi->Beton }}</td>
              <td>{{ $kontruksi->Luas }}</td>
              <td>{{ $kontruksi->Alamat }}</td>
              <td>{{ $kontruksi->DokTgl }}</td>
              <td>{{ $kontruksi->DokNo }}</td>
              <td>{{ $kontruksi->ThMulai }}</td>
              <td>{{ $kontruksi->StatusTanah }}</td>
              <td>{{ $kontruksi->KodeTanah }}</td>
              <td>{{ $kontruksi->AsalUsul }}</td>
              <td>{{ $kontruksi->NilaiKontrak }}</td>
              
              <td>{{ $kontruksi->SpNo }}</td>
              <td>{{ $kontruksi->SpTgl }}</td>
              <td>{{ $kontruksi->KwNo }}</td>
              <td>{{ $kontruksi->KwTgl }}</td>
              <td>{{ $kontruksi->BaNo }}</td>
              <td>{{ $kontruksi->BaTgl }}</td>
              <td>{{ $kontruksi->SkpdPemberi }}</td>
              <td><a href="{{ url('FotoBrg') }}/{{ $kontruksi->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $kontruksi->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
              <td>
                <a href="{{ url('/update/editKontruksi') }}/{{ $kontruksi->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ url('kontruksi') }}/{{ $kontruksi->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
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
