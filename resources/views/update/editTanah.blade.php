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
    <h1 style="margin-top:20px" class="font-weight-bold">Update Tanah</h1>
  </center>

  <div class="container" style="width:75%; margin:auto; margin-top:50px">
    <table class="table table-striped table">
      <form action="{{ url('/form/tanah') }}/{{ $tanahs->id }}" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div class="form-row">
          <tr>
            <div class="form-input">
              <th><label for="">Jenis Barang/Nama Barang</label></th>
              <td colspan="3"><input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" id="NamaBarang" name="NamaBarang" placeholder="Jenis Barang/Nama Barang" value="{{ $tanahs->NamaBarang }}" autocomplete="NamaBarang" autofocus>
                @error('NamaBarang')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-4">
              <th><label for="">Nomor</label></th>
              <td colspan="2"><input type="text" class="form-control @error('NoKodeBrg') is-invalid @enderror" id="NoKodeBrg" name="NoKodeBrg" placeholder="Kode Barang" value="{{ $tanahs->NoKodeBrg }}" autocomplete="NoKodeBrg" autofocus>
                @error('NoKodeBrg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="number" class="form-control @error('NoReg') is-invalid @enderror" id="NoReg" name="NoReg" placeholder="No.Reg" value="{{ $tanahs->NoReg }}" autocomplete="NoReg" autofocus>
                @error('NoReg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Luas(m2)</label></th>
              <td colspan="3"><input type="text" class="form-control @error('Luas') is-invalid @enderror" id="Luas" name="Luas" placeholder="Luas(m2)" value="{{ $tanahs->Luas }}" autocomplete="Luas" autofocus>
                @error('Luas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td></td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Tahun Pengadaan</label></th>
              <td colspan="3"><input type="text" class="form-control @error('Tahun') is-invalid @enderror" id="Tahun" name="Tahun" placeholder="Tahun Pengadaan" value="{{ $tanahs->Tahun }}" autocomplete="Tahun" autofocus>
                @error('Tahun')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Letak/Alamat</label></th>
              <td colspan="3"><input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" placeholder="Letak/Alamat" value="{{ $tanahs->Alamat }}" autocomplete="Alamat" autofocus>
                @error('Alamat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input col-md-2">
              <th><label for="">Status Tanah Hak</label></th>
              <td><input type="text" class="form-control @error('StatusHak') is-invalid @enderror" id="StatusHak" name="StatusHak" placeholder="Hak" value="{{ $tanahs->StatusHak }}" autocomplete="StatusHak" autofocus>
                @error('StatusHak')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="date" class="form-control @error('SertifTgl') is-invalid @enderror" id="SertifTgl" name="SertifTgl" placeholder="Tanggal" value="{{ $tanahs->SertifTgl }}" autocomplete="SertifTgl" autofocus>
                @error('SertifTgl')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="number" class="form-control @error('SertifNo') is-invalid @enderror" id="SertifNo" name="SertifNo" placeholder="Nomor" value="{{ $tanahs->SertifNo }}" autocomplete="SertifNo" autofocus>
                @error('SertifNo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Penggunaan</label></th>
              <td colspan="3"><input type="text" class="form-control @error('Penggunaan') is-invalid @enderror" id="Penggunaan" name="Penggunaan" placeholder="Penggunaan" value="{{ $tanahs->Penggunaan }}" autocomplete="Penggunaan" autofocus>
                @error('Penggunaan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Asal Usul</label></th>
              <td colspan="3"><input type="text" class="form-control @error('AsalUsul') is-invalid @enderror" id="AsalUsul" name="AsalUsul" placeholder="Asal Usul" value="{{ $tanahs->AsalUsul }}" autocomplete="AsalUsul" autofocus>
                @error('AsalUsul')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Jumlah</label></th>
              <td colspan="3"><input type="text" class="form-control @error('Jumlah') is-invalid @enderror" id="Jumlah" name="Jumlah" placeholder="Jumlah" value="{{ $tanahs->Jumlah }}" autocomplete="Jumlah" autofocus>
                @error('Jumlah')
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
              <td colspan="3"><input type="text" class="form-control @error('HargaPerolehan') is-invalid @enderror" id="HargaPerolehan" name="HargaPerolehan" placeholder="Nilai/Harga Perolehan(Rp)" value="{{ $tanahs->HargaPerolehan }}" autocomplete="HargaPerolehan" autofocus>
                @error('HargaPerolehan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <!-- <tr><div class="form-input col-md-2" >
                <th><label for="">Kode Sub Akun</label></th>
                <td colspan="3"><select id="KodeSubAkun" name="KodeSubAkun" class="form-control @error('KodeSubAkun') is-invalid @enderror" value="{{ $tanahs->KodeSubAkun }}" autocomplete="KodeSubAkun" autofocus>
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
                <td colspan="3"><select id="KodeTmbh" name="KodeTmbh" class="form-control @error('KodeTmbh') is-invalid @enderror" value="{{ $tanahs->KodeTmbh }}" autocomplete="KodeTmbh" autofocus>
                @error('KodeTmbh')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select></td>
              </div></tr>
              <tr><div class="form-input col-md-2">
                <th><label for="">Kode Kurang Barang</label></th>
                <td colspan="3"><select id="KodeKurang" name="KodeKurang" class="form-control @error('KodeKurang') is-invalid @enderror" value="{{ $tanahs->KodeKurang }}" autocomplete="KodeKurang" autofocus>
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
            <div class="form-input">
              <th><label for="">SP2D</label></th>
              <td colspan="2"><input type="number" class="form-control @error('SpNo') is-invalid @enderror" id="SpNo" name="SpNo" placeholder="Nomor" value="{{ $tanahs->SpNo }}" autocomplete="SpNo" autofocus>
                @error('SpNo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="date" class="form-control @error('SpTgl') is-invalid @enderror" id="SpTgl" name="SpTgl" placeholder="Tanggal" value="{{ $tanahs->SpTgl }}" autocomplete="SpTgl" autofocus>
                @error('SpTgl')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>
          <tr<div class="form-input">
            <th><label for="">SPK/SP/KW</label></th>
            <td colspan="2"><input type="number" class="form-control @error('KwNo') is-invalid @enderror" id="KwNo" name="KwNo" placeholder="Nomor" value="{{ $tanahs->KwNo }}" autocomplete="KwNo" autofocus>
              @error('KwNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('KwTgl') is-invalid @enderror" id="KwTgl" name="KwTgl" placeholder="Tanggal" value="{{ $tanahs->KwTgl }}" autocomplete="KwTgl" autofocus>
              @error('KwTgl')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
        </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">No.BA</label></th>
            <td colspan="2"><input type="number" class="form-control @error('BaNo') is-invalid @enderror" id="BaNo" name="BaNo" placeholder="Nomor" value="{{ $tanahs->BaNo }}" autocomplete="BaNo" autofocus>
              @error('BaNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('BaTgl') is-invalid @enderror" id="BaTgl" name="BaTgl" placeholder="Tanggal" value="{{ $tanahs->BaTgl }}" autocomplete="BaTgl" autofocus>
              @error('BaTgl')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">SKPD Pemberi/Penerima(Mutasi Barang)</label></th>
            <td colspan="3"><input type="text" class="form-control @error('SkpdPemberi') is-invalid @enderror" id="SkpdPemberi" name="SkpdPemberi" placeholder="SKPD" value="{{ $tanahs->SkpdPemberi }}" autocomplete="SkpdPemberi" autofocus>
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
            <th><label for="">Input Kode Kategori Baru</label></th>
            <td colspan="3"><input type="text" class="form-control @error('KodeBaru') is-invalid @enderror" id="KodeBaru" name="KodeBaru" placeholder="Input Kode Kategori Baru" value="{{ $tanahs->KodeBaru }}" autocomplete="KodeBaru" autofocus>
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
            <th><label for="">Level 1</label></th>
            <td colspan="3"><input type="text" class="form-control @error('Level1') is-invalid @enderror" id="Level1" name="Level1" placeholder="Level 1" value="{{ $tanahs->Level1 }}" autocomplete="Level1" autofocus>
              @error('Level1')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">Level 2</label></th>
            <td colspan="3"><input type="text" class="form-control @error('Level2') is-invalid @enderror" id="Level2" name="Level2" placeholder="Level 2" value="{{ $tanahs->Level2 }}" autocomplete="Level2" autofocus>
              @error('Level2')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">Level 3</label></th>
            <td colspan="3"><input type="text" class="form-control @error('Level3') is-invalid @enderror" id="Level3" name="Level3" placeholder="Level 3" value="{{ $tanahs->Level3 }}" autocomplete="Level3" autofocus>
              @error('Level3')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">Level 4</label></th>
            <td colspan="3"><input type="text" class="form-control @error('Level4') is-invalid @enderror" id="Level4" name="Level4" placeholder="Level 4" value="{{ $tanahs->Level4 }}" autocomplete="Level4" autofocus>
              @error('Level4')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-input">
            <th><label for="">Level 5</label></th>
            <td colspan="3"><input type="text" class="form-control @error('Level5') is-invalid @enderror" id="Level5" name="Level5" placeholder="Level 5" value="{{ $tanahs->Level5 }}" autocomplete="Level5" autofocus>
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
            <td colspan="3"><input type="file" class="form-control @error('FotoBrg') is-invalid @enderror" id="FotoBrg" name="FotoBrg" value="{{ $tanahs->FotoBrg }}" autocomplete="FotoBrg" autofocus>
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
            <td colspan="5"><img src="{{ url('FotoBrg') }}/{{ $tanahs->FotoBrg }}" class="" width="70%" alt=""></td>
          </div>
        </tr>
  </div>
  <tr>
    <div class="form-group">
      <td><a href="/form/tanah" class="btn btn-danger">Batal</a>
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