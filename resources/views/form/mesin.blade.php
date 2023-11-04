@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formMesin"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exportmesin') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Peralatan dan Mesin</h3>
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode Barang</th>
                <th>Jenis Barang/ Nama Barang</th>
                <!-- <th>No. Reg</th> -->
                <th>Merk/ Type</th>
                <th>Ukuran / cc</th>
                <th>Bahan</th>
                <th>Tahun Pembuatan</th>
                <th>Nomor Pabrik</th>
                <th>Nomor Rangka</th>
                <th>Nomor Mesin</th>
                <th>Nomor Polisi</th>
                <th>Nomor BPKB</th>
                <!-- <th>Asal-usul Cara Perolehan</th>
                <th>Jml. Brg</th>
                <th>Harga Satuan (Rp)</th>
                <th>Nilai / Harga Perolehan (Rp)</th>
                <th>Kode Sub Akun</th>
                <th>SUB SUB</th>
                <th>Kode Tmbh Brg</th>
                <th>Kode Kurang Brg</th>
                <th>SP2D NO</th>
                <th>SP2D Tgl</th>
                <th>SPK/SP/KW NO</th>
                <th>SPK/SP/KW Tgl</th>
                <th>No. BA/SK NO</th>
                <th>No. BA/SK Tgl</th>
                <th>SKPD Pemberi/ SKPD Penerima (Khusus Mutasi Barang)</th>
                <th>Kode Sub Sub Akun</th>
                <th>KAPITALISASI</th>
                <th>KODE KATEGORI LAMA</th>
                <th>INPUT KODE KATEGORI BARU</th>
                <th>CEK KECOCOKAN KODE LAMA DAN KODE TERBARU</th>
                <th>LEVEL 1</th>
                <th>LEVEL 2</th>
                <th>LEVEL 3</th>
                <th>LEVEL 4</th>
                <th>LEVEL 5</th> -->
                <th>Foto Barang</th>
                <th>Foto Barang 2</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          @foreach($mesins as $mesin)
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $mesin->KodeBarang }}</td>
              <td>{{ $mesin->NamaBarang }}</td>
              <!-- <td>{{ $mesin->NoReg }}</td> -->
              <td>{{ $mesin->Merk }}</td>
              <td>{{ $mesin->Ukuran }}</td>
              <td>{{ $mesin->Bahan }}</td>
              <td>{{ date("Y", strtotime($mesin->TahunPembuatan)) }}</td>
              <td>@if($mesin->NomorPabrik != "") {{ $mesin->NomorPabrik }} @else - @endif</td>
              <td>@if($mesin->NomorRangka != "") {{ $mesin->NomorRangka }} @else - @endif</td>
              <td>@if($mesin->NomorMesin != "") {{ $mesin->NomorMesin }} @else - @endif</td>
              <td>@if($mesin->NomorPolisi != "") {{ $mesin->NomorPolisi }} @else - @endif</td>
              <td>@if($mesin->NomorBPKB != "") {{ $mesin->NomorBPKB }} @else - @endif</td>
              <!-- <td>{{ $mesin->CaraPerolehan }}</td>
              <td>{{ $mesin->JmlBrg }}</td>
              <td>{{ $mesin->HargaSatuan }}</td>
              <td>{{ $mesin->HargaPerolehan }}</td>
              <td>{{ $mesin->KodeSubAkun }}</td>
              <td>{{ $mesin->SubSub }}</td>
              <td>{{ $mesin->KodeTmbh }}</td>
              <td>{{ $mesin->KodeKurang }}</td>
              <td>{{ $mesin->SpNo }}</td>
              <td>{{ $mesin->SpTgl }}</td>
              <td>{{ $mesin->KwNo }}</td>
              <td>{{ $mesin->KwTgl }}</td>
              <td>{{ $mesin->BaNo }}</td>
              <td>{{ $mesin->BaTgl }}</td>
              <td>{{ $mesin->SkpdPemberi }}</td>
              <td>{{ $mesin->KodeSubSubAkun }}</td>
              <td>{{ $mesin->KodeLama }}</td>
              <td>{{ $mesin->KodeBaru }}</td>
              <td>{{ $mesin->CekKecocokanKode }}</td>
              <td>{{ $mesin->Level1 }}</td>
              <td>{{ $mesin->Level2 }}</td>
              <td>{{ $mesin->Level3 }}</td>
              <td>{{ $mesin->Level4 }}</td>
              <td>{{ $mesin->Level5 }}</td> -->
              <td><a href="{{ url('FotoBrg') }}/{{ $mesin->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $mesin->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
              <td><a href="{{ url('FotoBrg2') }}/{{ $mesin->FotoBrg2 }}" target="_blank"><img src="{{ url('FotoBrg2') }}/{{ $mesin->FotoBrg2 }}" width="50" height="50" alt="Lights"></a></td>              
              <td>
                <a href="{{ url('/update/editMesin') }}/{{ $mesin->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ url('mesin') }}/{{ $mesin->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
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
