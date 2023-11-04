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
    <h1 style="margin-top:20px" class="font-weight-bold">Update Aset Lainnya</h1>
  </center>

  <div class="container" style="width:75%; margin:auto; margin-top:50px">
    <table class="table table-striped table">
      <form action="{{ url('/form/alain') }}/{{ $asetLains->id }}" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div class="form-row">
          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Jenis Barang/Nama Barang</label></th>
              <td colspan="5"><input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" id="NamaBarang" name="NamaBarang" placeholder="Jenis Barang/Nama Barang" value="{{ $asetLains->NamaBarang }}" autocomplete="NamaBarang" autofocus>
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
              <th><label for="">No. Reg</label></th>
              <td colspan="5"><input type="number" class="form-control @error('NoReg') is-invalid @enderror" id="NoReg" name="NoReg" placeholder="No.Reg" value="{{ $asetLains->NoReg }}" autocomplete="NoReg" autofocus>
                @error('NoReg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Merk/Type</label></th>
              <td colspan="5"><input type="text" class="form-control  @error('Merk') is-invalid @enderror" id="Merk" name="Merk" placeholder="Merk/Type" value="{{ $asetLains->Merk }}" autocomplete="Merk" autofocus>
                @error('Merk')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Ukuran/cc</label></th>
              <td colspan="5"><input type="text" class="form-control @error('Ukuran') is-invalid @enderror" id="Ukuran" name="Ukuran" placeholder="Ukuran/cc" value="{{ $asetLains->Ukuran }}" autocomplete="Ukuran" autofocus>
                @error('Ukuran')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Bahan</label></th>
              <td colspan="5"><input type="text" class="form-control @error('Bahan') is-invalid @enderror" id="Bahan" name="Bahan" placeholder="Bahan" value="{{ $asetLains->Bahan }}" autocomplete="Bahan" autofocus>
                @error('Bahan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Tahun Pembuatan</label></th>
              <td colspan="5"><input type="date" class="form-control @error('TahunPembuatan') is-invalid @enderror" id="TahunPembuatan" name="TahunPembuatan" placeholder="Tahun Pembuatan" value="{{ $asetLains->TahunPembuatan }}" autocomplete="TahunPembuatan" autofocus>
                @error('TahunPembuatan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-5" style="margin-left: 100px;">
              <th><label for="">NOMOR</label></th>
              <td><input type="text" class="form-control @error('NomorPabrik') is-invalid @enderror" id="NomorPabrik" name="NomorPabrik" placeholder="Pabrik" value="{{ $asetLains->NomorPabrik }}" autocomplete="NomorPabrik" autofocus>
                @error('NomorPabrik')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('NomorRangka') is-invalid @enderror" id="NomorRangka" name="NomorRangka" placeholder="Rangka" value="{{ $asetLains->NomorRangka }}" autocomplete="NomorRangka" autofocus>
                @error('NomorRangka')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('NomorMesin') is-invalid @enderror" id="NomorMesin" name="NomorMesin" placeholder="Mesin" value="{{ $asetLains->NomorMesin }}" autocomplete="NomorMesin" autofocus>
                @error('NomorMesin')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('NomorPolisi') is-invalid @enderror" id="NomorPolisi" name="NomorPolisi" placeholder="Polisi" value="{{ $asetLains->NomorPolisi }}" autocomplete="NomorPolisi" autofocus>
                @error('NomorPolisi')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('NomorBPKB') is-invalid @enderror" id="NomorBPKB" name="NomorBPKB" placeholder="BPKB" value="{{ $asetLains->NomorBPKB }}" autocomplete="NomorBPKB" autofocus>
                @error('NomorBPKB')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Asal Usul Cara Perolehan</label></th>
              <td colspan="5"><input type="text" class="form-control @error('CaraPerolehan') is-invalid @enderror" id="CaraPerolehan" name="CaraPerolehan" placeholder="Asal Usul Cara Perolehan" value="{{ $asetLains->CaraPerolehan }}" autocomplete="CaraPerolehan" autofocus>
                @error('CaraPerolehan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Jumlah Barang</label></th>
              <td colspan="5"><input type="number" class="form-control @error('JmlBrg') is-invalid @enderror" id="JmlBrg" name="JmlBrg" placeholder="Jumlah Barang" value="{{ $asetLains->JmlBrg }}" autocomplete="JmlBrg" autofocus>
                @error('JmlBrg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-6" style="margin-left: -100px;">
              <th><label for="">Harga Satuan(Rp)</label></th>
              <td colspan="5"><input type="number" class="form-control @error('HargaSatuan') is-invalid @enderror" id="HargaSatuan" name="HargaSatuan" placeholder="Harga Satuan" value="{{ $asetLains->HargaSatuan }}" autocomplete="HargaSatuan" autofocus>
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
              <td colspan="5"><input type="text" class="form-control @error('HargaPerolehan') is-invalid @enderror" id="HargaPerolehan" name="HargaPerolehan" placeholder="Nilai/Harga Perolehan(Rp)" value="{{ $asetLains->HargaPerolehan }}" autocomplete="HargaPerolehan" autofocus>
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
                <td colspan="5"><select id="KodeSubAkun" name="KodeSubAkun" class="form-control @error('KodeSubAkun') is-invalid @enderror" value="{{ $asetLains->KodeSubAkun }}" autocomplete="KodeSubAkun" autofocus>
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

              <tr><div class="form-input col-md-2">
                <th><label for="">Kode Tambah Barang</label></th>
                <td colspan="5"><select id="KodeTmbh" name="KodeTmbh" class="form-control @error('KodeTmbh') is-invalid @enderror" value="{{ $asetLains->KodeTmbh }}" autocomplete="KodeTmbh" autofocus>
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
                <td colspan="5"><select id="KodeKurang" name="KodeKurang" class="form-control @error('KodeKurang') is-invalid @enderror" value="{{ $asetLains->KodeKurang }}" autocomplete="KodeKurang" autofocus>
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
              <td colspan="4"><input type="number" class="form-control @error('SpNo') is-invalid @enderror" id="SpNo" name="SpNo" placeholder="Nomor" value="{{ $asetLains->SpNo }}" autocomplete="SpNo" autofocus>
                @error('SpNo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="date" class="form-control @error('SpTgl') is-invalid @enderror" id="SpTgl" name="SpTgl" placeholder="Tanggal" value="{{ $asetLains->SpTgl }}" autocomplete="SpTgl" autofocus>
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
            <td colspan="4"><input type="number" class="form-control @error('KwNo') is-invalid @enderror" id="KwNo" name="KwNo" placeholder="Nomor" value="{{ $asetLains->KwNo }}" autocomplete="KwNo" autofocus>
              @error('KwNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('KwTgl') is-invalid @enderror" id="KwTgl" name="KwTgl" placeholder="Tanggal" value="{{ $asetLains->KwTgl }}" autocomplete="KwTgl" autofocus>
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
            <td colspan="4"><input type="number" class="form-control @error('BaNo') is-invalid @enderror" id="BaNo" name="BaNo" placeholder="Nomor" value="{{ $asetLains->BaNo }}" autocomplete="BaNo" autofocus>
              @error('BaNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('BaTgl') is-invalid @enderror" id="BaTgl" name="BaTgl" placeholder="Tanggal" value="{{ $asetLains->BaTgl }}" autocomplete="BaTgl" autofocus>
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
            <td colspan="5"><input type="text" class="form-control @error('SkpdPemberi') is-invalid @enderror" id="SkpdPemberi" name="SkpdPemberi" placeholder="SKPD" value="{{ $asetLains->SkpdPemberi }}" autocomplete="SkpdPemberi" autofocus>
              @error('SkpdPemberi')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr>
          <div class="form-input">
            <th><label for="">Kode Kategori Lama</label></th>
            <td colspan="5"><input type="text" class="form-control @error('KodeLama') is-invalid @enderror" id="KodeLama" name="KodeLama" placeholder="Input Kode Kategori Lama" value="{{ $asetLains->KodeLama }}" autocomplete="KodeLama" autofocus>
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
            <th><label for="">Uraian</label></th>
            <td colspan="5"><input type="text" class="form-control @error('Uraian') is-invalid @enderror" id="Uraian" name="Uraian" placeholder="Uraian" value="{{ $asetLains->Uraian }}" autocomplete="Uraian" autofocus>
              @error('Uraian')
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
            <td colspan="5"><input type="file" class="form-control @error('FotoBrg') is-invalid @enderror" id="FotoBrg" name="FotoBrg" value="{{ $asetLains->FotoBrg }}" autocomplete="FotoBrg" autofocus>
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
            <td colspan="5"><img src="{{ url('FotoBrg') }}/{{ $asetLains->FotoBrg }}" class="" width="70%" alt=""></td>
          </div>
        </tr>
  </div>
  <tr>
    <div class="form-group">
      <td><a href="/form/alain" class="btn btn-danger">Batal</a>
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