@extends('layouts.master')

@section('content')

<style>
  th {
    background-color: rgb(51, 109, 197);
    color: white;
  }

  td :hover {
    background-color: rgb(197, 194, 194);
  }
</style>

<body>
  <center>
    <h1 style="margin-top:20px" class="font-weight-bold">Update Aset Tetap Lainnya</h1>
  </center>

  <div class="container" style="width:75%; margin:auto; margin-top:50px">
    <table class="table table-striped table">
      <form action="{{ url('/form/atetap') }}/{{ $asetTtpLains->id }}" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div class="form-row">
          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Jenis Barang/Nama Barang</label></th>
              <td colspan="4"><input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" id="NamaBarang" name="NamaBarang" placeholder="Jenis Barang/Nama Barang" value="{{ $asetTtpLains->NamaBarang }}" autocomplete="NamaBarang" autofocus>
                @error('NamaBarang')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-4" style="margin-left: -100px;">
              <th><label for="">Nomor</label></th>
              <td colspan="3"><input type="text" class="form-control @error('NoKodeBrg') is-invalid @enderror" id="NoKodeBrg" name="NoKodeBrg" placeholder="Kode Barang" value="{{ $asetTtpLains->NoKodeBrg }}" autocomplete="NoKodeBrg" autofocus>
                @error('NoKodeBrg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="number" class="form-control @error('NoReg') is-invalid @enderror" id="NoReg" name="NoReg" placeholder="No.Reg" value="{{ $asetTtpLains->NoReg }}" autocomplete="NoReg" autofocus>
                @error('NoReg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-4" style="margin-left: -100px;">
              <th><label for="">Buku/Perpustakaan</label></th>
              <td colspan="3"><input type="text" class="form-control @error('JudulBuku') is-invalid @enderror" id="JudulBuku" name="JudulBuku" placeholder="Judul/Pencipta" value="{{ $asetTtpLains->JudulBuku }}" autocomplete="JudulBuku" autofocus>
                @error('JudulBuku')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('Spesifikasi') is-invalid @enderror" id="Spesifikasi" name="Spesifikasi" placeholder="Spesifikasi" value="{{ $asetTtpLains->Spesifikasi }}" autocomplete="Spesifikasi" autofocus>
                @error('Spesifikasi')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-4" style="margin-left: -100px;">
              <th><label for="">Barang Bercorak Kesenian / Kebudayaan</label></th>
              <td colspan="2"><input type="text" class="form-control @error('SeniAsalDaerah') is-invalid @enderror" id="SeniAsalDaerah" name="SeniAsalDaerah" placeholder="Asal Daerah" value="{{ $asetTtpLains->SeniAsalDaerah }}" autocomplete="SeniAsalDaerah" autofocus>
                @error('SeniAsalDaerah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('SeniPencipta') is-invalid @enderror" id="SeniPencipta" name="SeniPencipta" placeholder="Pencipta" value="{{ $asetTtpLains->SeniPencipta }}" autocomplete="SeniPencipta" autofocus>
                @error('SeniPencipta')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('SeniBahan') is-invalid @enderror" id="SeniBahan" name="SeniBahan" placeholder="Bahan" value="{{ $asetTtpLains->SeniBahan }}" autocomplete="SeniBahan" autofocus>
                @error('SeniBahan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-4" style="margin-left: -100px;">
              <th><label for="">Hewan / Ternak Dan Tumbuhan</label></th>
              <td colspan="3"><input type="text" class="form-control @error('JenisHT') is-invalid @enderror" id="JenisHT" name="JenisHT" placeholder="Jenis" value="{{ $asetTtpLains->JenisHT }}" autocomplete="JenisHT" autofocus>
                @error('JenisHT')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('UkuranHT') is-invalid @enderror" id="UkuranHT" name="UkuranHT" placeholder="ukuran" value="{{ $asetTtpLains->UkuranHT }}" autocomplete="UkuranHT" autofocus>
                @error('UkuranHT')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Jumlah</label></th>
              <td colspan="4"><input type="text" class="form-control @error('Jumlah') is-invalid @enderror" id="Jumlah" name="Jumlah" placeholder="Jumlah" value="{{ $asetTtpLains->Jumlah }}" autocomplete="Jumlah" autofocus>
                @error('Jumlah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Tahun Cetak/ Pembelian</label></th>
              <td colspan="4"><input type="number" class="form-control @error('TahunCetak') is-invalid @enderror" id="TahunCetak" name="TahunCetak" placeholder="Tahun Cetak/ Pembelian" value="{{ $asetTtpLains->TahunCetak }}" autocomplete="TahunCetak" autofocus>
                @error('TahunCetak')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td></td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Harga Satuan</label></th>
              <td colspan="4"><input type="number" class="form-control @error('HargaSatuan') is-invalid @enderror" id="HargaSatuan" name="HargaSatuan" placeholder="Harga Satuan" value="{{ $asetTtpLains->HargaSatuan }}" autocomplete="HargaSatuan" autofocus>
                @error('HargaSatuan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Nilai/Harga Perolehan(Rp)</label></th>
              <td colspan="4"><input type="text" class="form-control @error('HargaPerolehan') is-invalid @enderror" id="HargaPerolehan" name="HargaPerolehan" placeholder="Nilai/Harga Perolehan(Rp)" value="{{ $asetTtpLains->HargaPerolehan }}" autocomplete="HargaPerolehan" autofocus>
                @error('HargaPerolehan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <!-- <tr><div class="form-input col-md-2" style="margin-left: -100px;">
                <th><label for="">Kode Sub Akun</label></th>
                <td colspan="4"><select id="KodeSubAkun" name="KodeSubAkun" class="form-control @error('KodeSubAkun') is-invalid @enderror" value="{{ $asetTtpLains->KodeSubAkun }}" autocomplete="KodeSubAkun" autofocus>
                @error('KodeSubAkun')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>A1</option>
                    <option>B1</option>
                    <option>B2</option>
                    <option>B3</option>
                    <option>B4</option>
                    <option>B5</option>
                    <option>B6</option>
                    <option>B7</option>
                    <option>B8</option>
                    <option>B9</option>
                    <option>C1</option>
                    <option>C2</option>
                    <option>D1</option>
                    <option>D2</option>
                    <option>D3</option>
                    <option>D4</option>
                    <option>E1</option>
                    <option>E2</option>
                    <option>E3</option>
                    <option>E4</option>
                    <option>F1</option>
                    <option>G1</option>
                    <option>G2</option>
                    <option>G3</option>
                    <option>G4</option>
                    <option>G5</option>
                    <option>G6</option>
                    <option>G7</option>
                </select></td>
              </div></tr>
              <tr><div class="form-input">
                <th><label for="">SUB SUB</label></th>
                <td colspan="4"><select id="SubSub" name="SubSub" class="form-control @error('SubSub') is-invalid @enderror" value="{{ $asetTtpLains->SubSub }}" autocomplete="SubSub" autofocus>
                @error('SubSub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select></td>
              </div></tr>
              <tr><div class="form-input col-md-2">
                <th><label for="">Kode Tambah Barang</label></th>
                <td colspan="4"><select id="KodeTmbh" name="KodeTmbh" class="form-control @error('KodeTmbh') is-invalid @enderror" value="{{ $asetTtpLains->KodeTmbh }}" autocomplete="KodeTmbh" autofocus>
                @error('KodeTmbh')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>5</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select></td>
              </div></tr>
              <tr><div class="form-input col-md-2">
                <th><label for="">Kode Kurang Barang</label></th>
                <td colspan="4"><select id="KodeKurang" name="KodeKurang" class="form-control @error('KodeKurang') is-invalid @enderror" value="{{ $asetTtpLains->KodeKurang }}" autocomplete="KodeKurang" autofocus>
                @error('KodeKurang')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select></td>
              </div></tr> -->
          <tr>
            <div class="form-input col-md-3" style="margin-left: 100px;">
              <th><label for="">SP2D</label></th>
              <td colspan="3"><input type="number" class="form-control @error('SpNo') is-invalid @enderror" id="SpNo" name="SpNo" placeholder="Nomor" value="{{ $asetTtpLains->SpNo }}" autocomplete="SpNo" autofocus>
                @error('SpNo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="date" class="form-control @error('SpTgl') is-invalid @enderror" id="SpTgl" name="SpTgl" placeholder="Tanggal" value="{{ $asetTtpLains->SpTgl }}" autocomplete="SpTgl" autofocus>
                @error('SpTgl')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>
          <tr<div class="form-input col-md-3" style="margin-left: 100px;">
            <th><label for="">SPK/SP/KW</label></th>
            <td colspan="3"><input type="number" class="form-control @error('KwNo') is-invalid @enderror" id="KwNo" name="KwNo" placeholder="Nomor" value="{{ $asetTtpLains->KwNo }}" autocomplete="KwNo" autofocus>
              @error('KwNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('KwTgl') is-invalid @enderror" id="KwTgl" name="KwTgl" placeholder="Tanggal" value="{{ $asetTtpLains->KwTgl }}" autocomplete="KwTgl" autofocus>
              @error('KwTgl')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
        </div>
        </tr>
        <tr>
          <div class="form-input col-md-3" style="margin-left: 100px;">
            <th><label for="">No.BA/SK</label></th>
            <td colspan="3"><input type="number" class="form-control @error('BaNo') is-invalid @enderror" id="BaNo" name="BaNo" placeholder="Nomor" value="{{ $asetTtpLains->BaNo }}" autocomplete="BaNo" autofocus>
              @error('BaNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('BaTgl') is-invalid @enderror" id="BaTgl" name="BaTgl" placeholder="Tanggal" value="{{ $asetTtpLains->BaTgl }}" autocomplete="BaTgl" autofocus>
              @error('BaTgl')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input col-md-6" style="margin-left: 100px;">
            <th><label for="">SKPD Pemberi/Penerima(Mutasi Barang)</label></th>
            <td colspan="4"><input type="text" class="form-control @error('SkpdPemberi') is-invalid @enderror" id="SkpdPemberi" name="SkpdPemberi" placeholder="SKPD" value="{{ $asetTtpLains->SkpdPemberi }}" autocomplete="SkpdPemberi" autofocus>
              @error('SkpdPemberi')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <!-- <tr><div class="form-input">
                <th><label for="">Kode Sub Sub Akun</label></th>
                <td colspan="4"><select id="KodeSubSubAkun" name="KodeSubSubAkun" class="form-control @error('KodeSubSubAkun') is-invalid @enderror" value="{{ $asetTtpLains->KodeSubSubAkun }}" autocomplete="KodeSubSubAkun" autofocus>
                @error('KodeSubSubAkun')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select></td>
              </div></tr>

              <tr><div class="form-input">
                <th><label for="">KAPITALISASI</label></th>
                <td colspan="3"><input type="radio" id="Kapitalis" name="Kapitalis" value="YES">
                    <label for="YES">YES</label><br>
                    <input type="radio" id="Kapitalis" name="Kapitalis" value="NO">
                    <label for="NO">NO</label><br></td>
              </div></tr> -->

        <tr>
          <div class="form-input">
            <th><label for="">Kode Kategori Lama</label></th>
            <td colspan="4"><input type="text" class="form-control @error('KodeLama') is-invalid @enderror" id="KodeLama" name="KodeLama" placeholder="Input Kode Kategori Lama" value="{{ $asetTtpLains->KodeLama }}" autocomplete="KodeLama" autofocus>
              @error('KodeLama')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">Input Kode Kategori Baru</label></th>
            <td colspan="4"><input type="text" class="form-control @error('KodeBaru') is-invalid @enderror" id="KodeBaru" name="KodeBaru" placeholder="Input Kode Kategori Baru" value="{{ $asetTtpLains->KodeBaru }}" autocomplete="KodeBaru" autofocus>
              @error('KodeBaru')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">CEK KECOCOKAN KODE LAMA DAN KODE TERBARU</label></th>
            <td colspan="4"><input type="text" class="form-control @error('CekKecocokan') is-invalid @enderror" id="CekKecocokan" name="CekKecocokan" placeholder="CEK KECOCOKAN KODE LAMA DAN KODE TERBARU" value="{{ $asetTtpLains->CekKecocokan }}" autocomplete="CekKecocokan" autofocus>
              @error('CekKecocokan')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input col-md-6" style="margin-left: 100px;">
            <th><label for="">Level 1</label></th>
            <td colspan="4"><input type="text" class="form-control @error('Level1') is-invalid @enderror" id="Level1" name="Level1" placeholder="Level 1" value="{{ $asetTtpLains->Level1 }}" autocomplete="Level1" autofocus>
              @error('Level1')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input col-md-6" style="margin-left: 100px;">
            <th><label for="">Level 2</label></th>
            <td colspan="4"><input type="text" class="form-control @error('Level2') is-invalid @enderror" id="Level2" name="Level2" placeholder="Level 2" value="{{ $asetTtpLains->Level2 }}" autocomplete="Level2" autofocus>
              @error('Level2')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input col-md-6" style="margin-left: 100px;">
            <th><label for="">Level 3</label></th>
            <td colspan="4"><input type="text" class="form-control @error('Level3') is-invalid @enderror" id="Level3" name="Level3" placeholder="Level 3" value="{{ $asetTtpLains->Level3 }}" autocomplete="Level3" autofocus>
              @error('Level3')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input col-md-6" style="margin-left: 100px;">
            <th><label for="">Level 4</label></th>
            <td colspan="4"><input type="text" class="form-control @error('Level4') is-invalid @enderror" id="Level4" name="Level4" placeholder="Level 4" value="{{ $asetTtpLains->Level4 }}" autocomplete="Level4" autofocus>
              @error('Level4')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input col-md-6" style="margin-left: 100px;">
            <th><label for="">Level 5</label></th>
            <td colspan="4"><input type="text" class="form-control @error('Level5') is-invalid @enderror" id="Level5" name="Level5" placeholder="Level 5" value="{{ $asetTtpLains->Level5 }}" autocomplete="Level5" autofocus>
              @error('Level5')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">Foto Barang</label></th>
            <td colspan="4"><input type="file" class="form-control @error('FotoBrg') is-invalid @enderror" id="FotoBrg" name="FotoBrg" value="{{ $asetTtpLains->FotoBrg }}" autocomplete="FotoBrg" autofocus>
              @error('FotoBrg')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-group">
            <td colspan="5"><img src="{{ url('FotoBrg') }}/{{ $asetTtpLains->FotoBrg }}" class="" width="70%" alt=""></td>
          </div>
        </tr>
  </div>
  <tr>
    <div class="form-group">
      <td><a href="/form/atetap" class="btn btn-danger">Batal</a>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </td>
    </div>
  </tr>
  </form>
  </table>
  <!-- <tr>
        <div>
           <td><button type="submit" class="btn btn-primary" style="margin-left: 900px;">Submit</button></td>
        </div>
     </tr> -->
  </div>
</body>

@endsection