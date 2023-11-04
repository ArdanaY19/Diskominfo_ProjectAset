@extends('layouts.master')

@section('content')

<style>
      th {
          background-color: rgb(51, 109, 197);
          color:white;
      }
      td :hover{
          background-color: rgb(197, 194, 194);
      }
  </style>
  <body>
    <center>
       <h1 style="margin-top:20px" class="font-weight-bold">Form Konstruksi Dalam Pengerjaan</h1>
    </center>

    <div class="container" style="width:75%; margin:auto; margin-top:50px">
    <table class="table table-striped table">
      <form action="/form/kontruksi" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
        {{ csrf_field() }}
            <div class="form-row">
              <tr><div class="form-input col-md-6" style="margin-left: -100px;">
                <th><label for="">Jenis Barang/Nama Barang</label></th>
                <td colspan="4"><input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" id="NamaBarang" name="NamaBarang" placeholder="Jenis Barang/Nama Barang" value="{{ old('NamaBarang') }}" autocomplete="NamaBarang" autofocus>
                @error('NamaBarang')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-input col-md-4" style="margin-left: -100px;">
                <th><label for="">Kontruksi</label></th>
                <td colspan="3"><input type="text" class="form-control @error('Tingkat') is-invalid @enderror" id="Tingkat" name="Tingkat" placeholder="Tingkat" value="{{ old('Tingkat') }}" autocomplete="Tingkat" autofocus>
                @error('Tingkat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="text" class="form-control @error('Beton') is-invalid @enderror" id="Beton" name="Beton" placeholder="Beton" value="{{ old('Beton') }}" autocomplete="Beton" autofocus>
                @error('Beton')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td></td>
              </div></tr>

              <tr><div class="form-input col-md-4" style="margin-left: -100px;">
                <th><label for="">Luas (M2)</label></th>
                <td colspan="4"><input type="number" class="form-control @error('Luas') is-invalid @enderror" id="Luas" name="Luas" placeholder="Luas (M2)" value="{{ old('Luas') }}" autocomplete="Luas" autofocus>
                @error('Luas')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                </div></tr>

              <tr><div class="form-input col-md-4" style="margin-left: -100px;">
                <th><label for="">Letak / Lokasi Alamat</label></th>
                <td colspan="4"><input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" placeholder="Letak / Lokasi Alamat" value="{{ old('Alamat') }}" autocomplete="Alamat" autofocus>
                @error('Alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-input col-md-3" style="margin-left: 100px;">
                <th><label for="">Dokumen Bangunan</label></th>
                <td colspan="3"><input type="number" class="form-control @error('DokNo') is-invalid @enderror" id="DokNo" name="DokNo" placeholder="Nomor" value="{{ old('DokNo') }}" autocomplete="DokNo" autofocus>
                @error('DokNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('DokTgl') is-invalid @enderror" id="DokTgl" name="DokTgl" placeholder="Tanggal" value="{{ old('DokTgl') }}" autocomplete="DokTgl" autofocus>
                @error('DokTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-input col-md-6" style="margin-left: -100px;">
                <th><label for="">Tanggal Mulai</label></th>
                <td colspan="4"><input type="date" class="form-control @error('ThMulai') is-invalid @enderror" id="ThMulai" name="ThMulai" placeholder="Tanggal" value="{{ old('ThMulai') }}" autocomplete="ThMulai" autofocus>
                @error('ThMulai')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td></td>
              </div></tr>

             <tr><div class="form-input col-md-6" style="margin-left: -100px;">
                <th><label for="">Status Tanah</label></th>
                <td colspan="4"><input type="text" class="form-control @error('StatusTanah') is-invalid @enderror" id="StatusTanah" name="StatusTanah" placeholder="Status Tanah" value="{{ old('StatusTanah') }}" autocomplete="StatusTanah" autofocus>
                @error('StatusTanah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td></td>
                </div></tr>

             <tr><div class="form-input col-md-6" style="margin-left: -100px;">
                <th><label for="">No. Kode Tanah</label></th>
                <td colspan="4"><input type="number" class="form-control @error('KodeTanah') is-invalid @enderror" id="KodeTanah" name="KodeTanah" placeholder="No. Kode Tanah" value="{{ old('KodeTanah') }}" autocomplete="KodeTanah" autofocus>
                @error('KodeTanah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                </div></tr>

             <tr><div class="form-input col-md-6" style="margin-left: -100px;">
                    <th><label for="">Asal Usul</label></th>
                    <td colspan="4"><input type="text" class="form-control @error('AsalUsul') is-invalid @enderror" id="AsalUsul" name="AsalUsul" placeholder="Asal Usul" value="{{ old('AsalUsul') }}" autocomplete="AsalUsul" autofocus>
                @error('AsalUsul')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                </div></tr>

              <tr><div class="form-input">
                <th><label for="">Nilai Kontrak(Rp)</label></th>
                <td colspan="4"><input type="text" class="form-control @error('NilaiKontrak') is-invalid @enderror" id="NilaiKontrak" name="NilaiKontrak" placeholder="Nilai Kontrak(Rp)" value="{{ old('NilaiKontrak') }}" autocomplete="NilaiKontrak" autofocus>
                @error('NilaiKontrak')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <!-- <tr><div class="form-input col-md-2" style="margin-left: -100px;">
                <th><label for="">Kode Sub Akun</label></th>
                <td colspan="4"><select id="KodeSubAkun" name="KodeSubAkun" class="form-control @error('KodeSubAkun') is-invalid @enderror" value="{{ old('KodeSubAkun') }}" autocomplete="KodeSubAkun" autofocus>
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
                <td colspan="4"><select id="KodeTmbh" name="KodeTmbh" class="form-control @error('KodeTmbh') is-invalid @enderror" value="{{ old('KodeTmbh') }}" autocomplete="KodeTmbh" autofocus>
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
                <td colspan="4"><select id="KodeKurang" name="KodeKurang" class="form-control @error('KodeKurang') is-invalid @enderror" value="{{ old('KodeKurang') }}" autocomplete="KodeKurang" autofocus>
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
              <tr><div class="form-input col-md-3" style="margin-left: 100px;">
                <th><label for="">SP2D</label></th>
                <td colspan="3"><input type="number" class="form-control @error('SpNo') is-invalid @enderror" id="SpNo" name="SpNo" placeholder="Nomor" value="{{ old('SpNo') }}" autocomplete="SpNo" autofocus>
                @error('SpNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('SpTgl') is-invalid @enderror" id="SpTgl" name="SpTgl" placeholder="Tanggal" value="{{ old('SpTgl') }}" autocomplete="SpTgl" autofocus>
                @error('SpTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr<div class="form-input col-md-3" style="margin-left: 100px;">
                <th><label for="">SPK/SP/KW</label></th>
                <td colspan="3"><input type="number" class="form-control @error('KwNo') is-invalid @enderror" id="KwNo" name="KwNo" placeholder="Nomor" value="{{ old('KwNo') }}" autocomplete="KwNo" autofocus>
                @error('KwNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('KwTgl') is-invalid @enderror" id="KwTgl" name="KwTgl" placeholder="Tanggal" value="{{ old('KwTgl') }}" autocomplete="KwTgl" autofocus>
                @error('KwTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-input col-md-3" style="margin-left: 100px;">
                <th><label for="">No.BA/SK</label></th>
                <td colspan="3"><input type="number" class="form-control @error('BaNo') is-invalid @enderror" id="BaNo" name="BaNo" placeholder="Nomor" value="{{ old('BaNo') }}" autocomplete="BaNo" autofocus>
                @error('BaNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('BaTgl') is-invalid @enderror" id="BaTgl" name="BaTgl" placeholder="Tanggal" value="{{ old('BaTgl') }}" autocomplete="BaTgl" autofocus>
                @error('BaTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
             <tr><div class="form-input col-md-6" style="margin-left: 100px;">
                <th><label for="">SKPD Pemberi/Penerima(Mutasi Barang)</label></th>
                <td colspan="4"><input type="text" class="form-control @error('SkpdPemberi') is-invalid @enderror" id="SkpdPemberi" name="SkpdPemberi" placeholder="SKPD" value="{{ old('SkpdPemberi') }}" autocomplete="SkpdPemberi" autofocus>
                @error('SkpdPemberi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-input">
                <th><label for="">Foto Barang</label></th>
                <td colspan="4"><input type="file" class="form-control @error('FotoBrg') is-invalid @enderror" id="FotoBrg" name="FotoBrg" value="fotoBarang" value="{{ old('FotoBrg') }}" autocomplete="FotoBrg" autofocus>
                @error('FotoBrg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
            </div>
            <tr><div class="form-group">
                <td><a href="/form/kontruksi" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-primary">Tambah Data</button></td>
            </div></tr>
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
