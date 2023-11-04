@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-12 mb-2 mt-2">
        <a class="btn btn-primary" href="/data/formAlain"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('exportalain') }}" class="btn btn-success"> Export</a>
    </div>
    <table id="example" class="display nowrap" style="width:100%">
        <h3 class="text-center font-weight-bold text-dark">Aset Lainnya</h3>
        <thead>
            <tr>
                <th>NO</th>
                <th>Jenis Barang/ Nama Barang</th>
                <th>No. Reg</th>
                <th>Merk/Type</th>
                <th>Ukuran / cc</th>
                <th>Bahan</th>
                <th>Tahun Pembuatan</th>
                <th>Nomor Pabrik</th>
                <th>Nomor Rangka</th>
                <th>Nomor Mesin</th>
                <th>Nomor Polisi</th>
                <th>Nomor BPKB</th>
                <th>Asal-usul Cara Perolehan</th>
                <th>Jml. Brg</th>
                <th>Harga Satuan (Rp)</th>
                <th>Nilai / Harga Perolehan (Rp)</th>
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
                <th>KODE KATEGORI LAMA</th>
                <th>Uraian</th>
                <th>Foto Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach($asetLains as $asetLain)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $asetLain->NamaBarang }}</td>
                <td>{{ $asetLain->NoReg }}</td>
                <td>{{ $asetLain->Merk }}</td>
                <td>{{ $asetLain->Ukuran }}</td>
                <td>{{ $asetLain->Bahan }}</td>
                <td>{{ $asetLain->TahunPembuatan}}</td>
                <td>{{ $asetLain->NomorPabrik }}</td>
                <td>{{ $asetLain->NomorRangka }}</td>
                <td>{{ $asetLain->NomorMesin }}</td>
                <td>{{ $asetLain->NomorPolisi }}</td>
                <td>{{ $asetLain->NomorBPKB }}</td>
                <td>{{ $asetLain->CaraPerolehan }}</td>
                <td>{{ $asetLain->JmlBrg }}</td>
                <td>{{ $asetLain->HargaSatuan }}</td>
                <td>{{ $asetLain->HargaPerolehan }}</td>

                <td>{{ $asetLain->SpNo }}</td>
                <td>{{ $asetLain->SpTgl }}</td>
                <td>{{ $asetLain->KwNo }}</td>
                <td>{{ $asetLain->KwTgl }}</td>
                <td>{{ $asetLain->BaNo }}</td>
                <td>{{ $asetLain->BaTgl }}</td>
                <td>{{ $asetLain->SkpdPemberi }}</td>
                <td>{{ $asetLain->KodeLama }}</td>
                <td>{{ $asetLain->Uraian }}</td>
                <td><a href="{{ url('FotoBrg') }}/{{ $asetLain->FotoBrg }}" target="_blank"><img src="{{ url('FotoBrg') }}/{{ $asetLain->FotoBrg }}" width="50" height="50" alt="Lights"></a></td>
                <td>
                    <a href="{{ url('/update/editAlain') }}/{{ $asetLain->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ url('asetLain') }}/{{ $asetLain->id }}" method="post" onsubmit="return confirm('Yakin Menghapus Data')">
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
