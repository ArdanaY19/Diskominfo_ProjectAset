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
    <h1 style="margin-top:20px" class="font-weight-bold">Update Gedung dan Bangunan</h1>
  </center>

  <div class="container" style="width:75%; margin:auto; margin-top:50px">
    <table class="table table-striped table">
      <form action="{{ url('/form/gedung') }}/{{ $gedungBgns->id }}" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div class="form-row">
          <tr>
            <div class="form-input">
              <th><label for="">Jenis Barang/Nama Barang</label></th>
              <td colspan="3"><input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" id="NamaBarang" name="NamaBarang" placeholder="Jenis Barang/Nama Barang" value="{{ $gedungBgns->NamaBarang }}" autocomplete="NamaBarang" autofocus>
                @error('NamaBarang')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Nomor</label></th>
              <td colspan="2"><input type="text" class="form-control @error('NoKodeBrg') is-invalid @enderror" id="NoKodeBrg" name="NoKodeBrg" placeholder="Kode Barang" value="{{ $gedungBgns->NoKodeBrg }}" autocomplete="NoKodeBrg" autofocus>
                @error('NoKodeBrg')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="number" class="form-control @error('NoReg') is-invalid @enderror" id="NoReg" name="NoReg" placeholder="No.Reg" value="{{ $gedungBgns->NoReg }}" autocomplete="NoReg" autofocus>
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
              <th><label for="">Kondisi Bangunan (B,KB,RB)</label></th>
              <td colspan="3"><input type="text" class="form-control @error('KondisiBgn') is-invalid @enderror" id="KondisiBgn" name="KondisiBgn" placeholder="Kondis Bangunan (B,KB,RB)" value="{{ $gedungBgns->KondisiBgn }}" autocomplete="KondisiBgn" autofocus>
                @error('KondisiBgn')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Konstruksi Bangunan</label></th>
              <td colspan="2"><input type="text" class="form-control @error('KBTingkat') is-invalid @enderror" id="KBTingkat" name="KBTingkat" placeholder="Tingkat" value="{{ $gedungBgns->KBTingkat }}" autocomplete="KBTingkat" autofocus>
                @error('KBTingkat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="text" class="form-control @error('KBPondasi') is-invalid @enderror" id="KBPondasi" name="KBPondasi" placeholder="Pondasi" value="{{ $gedungBgns->KBPondasi }}" autocomplete="KBPondasi" autofocus>
                @error('KBPondasi')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Luas Lantai (M2)</label></th>
              <td colspan="3"><input type="number" class="form-control @error('LuasLt') is-invalid @enderror" id="LuasLt" name="LuasLt" placeholder="Luas Lantai (M2)" value="{{ $gedungBgns->LuasLt }}" autocomplete="LuasLt" autofocus>
                @error('LuasLt')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Letak/ Lokasi Alamat</label></th>
              <td colspan="3"><input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" placeholder="Letak / Lokasi Alamat" value="{{ $gedungBgns->Alamat }}" autocomplete="Alamat" autofocus>
                @error('Alamat')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Dokumen Gedung</label></th>
              <td><input type="number" class="form-control @error('DokNo') is-invalid @enderror" id="DokNo" name="DokNo" placeholder="Nomor" value="{{ $gedungBgns->DokNo }}" autocomplete="DokNo" autofocus>
                @error('DokNo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="date" class="form-control @error('DokTgl') is-invalid @enderror" id="DokTgl" name="DokTgl" placeholder="Tanggal" value="{{ $gedungBgns->DokTgl }}" autocomplete="DokTgl" autofocus>
                @error('DokTgl')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Luas (M2)</label></th>
              <td colspan="3"><input type="number" class="form-control @error('Luas') is-invalid @enderror" id="Luas" name="Luas" placeholder="Luas (M2)" value="{{ $gedungBgns->Luas }}" autocomplete="Luas" autofocus>
                @error('Luas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">Status Tanah</label></th>
              <td colspan="3"><input type="text" class="form-control @error('StatusTanah') is-invalid @enderror" id="StatusTanah" name="StatusTanah" placeholder="Status Tanah" value="{{ $gedungBgns->StatusTanah }}" autocomplete="StatusTanah" autofocus>
                @error('StatusTanah')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <tr>
            <div class="form-input">
              <th><label for="">No. Kode Tanah</label></th>
              <td colspan="3"><input type="number" class="form-control @error('KodeTanah') is-invalid @enderror" id="KodeTanah" name="KodeTanah" placeholder="No. Kode Tanah" value="{{ $gedungBgns->KodeTanah }}" autocomplete="KodeTanah" autofocus>
                @error('KodeTanah')
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
              <td colspan="3"><input type="text" class="form-control @error('AsalUsul') is-invalid @enderror" id="AsalUsul" name="AsalUsul" placeholder="Asal Usul" value="{{ $gedungBgns->AsalUsul }}" autocomplete="AsalUsul" autofocus>
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
              <th><label for="">Jumlah Gedung</label></th>
              <td colspan="3"><input type="text" class="form-control @error('JumlahGd') is-invalid @enderror" id="JumlahGd" name="JumlahGd" placeholder="Jumlah Gedung" value="{{ $gedungBgns->JumlahGd }}" autocomplete="JumlahGd" autofocus>
                @error('JumlahGd')
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
              <td colspan="3"><input type="text" class="form-control @error('HargaPerolehan') is-invalid @enderror" id="HargaPerolehan" name="HargaPerolehan" placeholder="Nilai/Harga Perolehan(Rp)" value="{{ $gedungBgns->HargaPerolehan }}" autocomplete="HargaPerolehan" autofocus>
                @error('HargaPerolehan')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
            </div>
          </tr>

          <!-- <tr><div class="form-input">
                <th><label for="">Kode Sub Akun</label></th>
                <td colspan="3"><select id="KodeSubAkun" name="KodeSubAkun" class="form-control @error('KodeSubAkun') is-invalid @enderror" value="{{ $gedungBgns->KodeSubAkun }}" autocomplete="KodeSubAkun" autofocus>
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
                <td colspan="3"><select id="SubSub" name="SubSub" class="form-control @error('SubSub') is-invalid @enderror" value="{{ $gedungBgns->SubSub }}" autocomplete="SubSub" autofocus>
                @error('SubSub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select></td>
              </div></tr>
              <tr><div class="form-input">
                <th><label for="">Kode Tambah Barang</label></th>
                <td colspan="3"><select id="KodeTmbh" name="KodeTmbh" class="form-control @error('KodeTmbh') is-invalid @enderror" value="{{ $gedungBgns->KodeTmbh }}" autocomplete="KodeTmbh" autofocus>
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
              <tr><div class="form-input">
                <th><label for="">Kode Kurang Barang</label></th>
                <td colspan="3"><select id="KodeKurang" name="KodeKurang" class="form-control @error('KodeKurang') is-invalid @enderror" value="{{ $gedungBgns->KodeKurang }}" autocomplete="KodeKurang" autofocus>
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
              <td colspan="2"><input type="number" class="form-control @error('SpNo') is-invalid @enderror" id="SpNo" name="SpNo" placeholder="Nomor" value="{{ $gedungBgns->SpNo }}" autocomplete="SpNo" autofocus>
                @error('SpNo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </td>
              <td><input type="date" class="form-control @error('SpTgl') is-invalid @enderror" id="SpTgl" name="SpTgl" placeholder="Tanggal" value="{{ $gedungBgns->SpTgl }}" autocomplete="SpTgl" autofocus>
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
            <td colspan="2"><input type="number" class="form-control @error('KwNo') is-invalid @enderror" id="KwNo" name="KwNo" placeholder="Nomor" value="{{ $gedungBgns->KwNo }}" autocomplete="KwNo" autofocus>
              @error('KwNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('KwTgl') is-invalid @enderror" id="KwTgl" name="KwTgl" placeholder="Tanggal" value="{{ $gedungBgns->KwTgl }}" autocomplete="KwTgl" autofocus>
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
            <td colspan="2"><input type="number" class="form-control @error('BaNo') is-invalid @enderror" id="BaNo" name="BaNo" placeholder="Nomor" value="{{ $gedungBgns->BaNo }}" autocomplete="BaNo" autofocus>
              @error('BaNo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
            <td><input type="date" class="form-control @error('BaTgl') is-invalid @enderror" id="BaTgl" name="BaTgl" placeholder="Tanggal" value="{{ $gedungBgns->BaTgl }}" autocomplete="BaTgl" autofocus>
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
            <td colspan="3"><input type="text" class="form-control @error('SkpdPemberi') is-invalid @enderror" id="SkpdPemberi" name="SkpdPemberi" placeholder="SKPD" value="{{ $gedungBgns->SkpdPemberi }}" autocomplete="SkpdPemberi" autofocus>
              @error('SkpdPemberi')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <!-- <tr><div class="form-input">
                <th><label for="">KODE SUB SUB AKUN</label></th>
                <td colspan="3"><select id="KodeSubSubAkun" name="KodeSubSubAkun" class="form-control @error('KodeSubSubAkun') is-invalid @enderror" value="{{ $gedungBgns->KodeSubSubAkun }}" autocomplete="KodeSubSubAkun" autofocus>
                @error('KodeSubSubAkun')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select></td>
              </div></tr> -->
        <tr>
          <div class="form-input">
            <th><label for="">Kode Kategori Lama</label></th>
            <td colspan="3"><input type="text" class="form-control @error('KodeLama') is-invalid @enderror" id="KodeLama" name="KodeLama" placeholder="Input Kode Kategori Lama" value="{{ $gedungBgns->KodeLama }}" autocomplete="KodeLama" autofocus>
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
            <td colspan="3"><input type="text" class="form-control @error('KodeBaru') is-invalid @enderror" id="KodeBaru" name="KodeBaru" placeholder="Input Kode Kategori Baru" value="{{ $gedungBgns->KodeBaru }}" autocomplete="KodeBaru" autofocus>
              @error('KodeBaru')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <!-- <tr><div class="form-input">
                <th><label for="">CEK KECOCOKAN KODE LAMA DAN KODE TERBARU</label></th>
                <td colspan="3"><input type="text" class="form-control @error('CekKecocokanKode') is-invalid @enderror" id="CekKecocokanKode" name="CekKecocokanKode" placeholder="CEK KECOCOKAN KODE LAMA DAN KODE TERBARU" value="{{ $gedungBgns->CekKecocokanKode }}" autocomplete="CekKecocokanKode" autofocus>
                @error('CekKecocokanKode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr> -->
        <tr>
          <div class="form-input">
            <th><label for="">Level 1</label></th>
            <td colspan="3"><input type="text" class="form-control @error('Level1') is-invalid @enderror" id="Level1" name="Level1" placeholder="Level 1" value="{{ $gedungBgns->Level1 }}" autocomplete="Level1" autofocus>
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
            <td colspan="3"><input type="text" class="form-control @error('Level2') is-invalid @enderror" id="Level2" name="Level2" placeholder="Level 2" value="{{ $gedungBgns->Level2 }}" autocomplete="Level2" autofocus>
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
            <td colspan="3"><input type="text" class="form-control @error('Level3') is-invalid @enderror" id="Level3" name="Level3" placeholder="Level 3" value="{{ $gedungBgns->Level3 }}" autocomplete="Level3" autofocus>
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
            <td colspan="3"><input type="text" class="form-control @error('Level4') is-invalid @enderror" id="Level4" name="Level4" placeholder="Level 4" value="{{ $gedungBgns->Level4 }}" autocomplete="Level4" autofocus>
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
            <td colspan="3"><input type="text" class="form-control @error('Level5') is-invalid @enderror" id="Level5" name="Level5" placeholder="Level 5" value="{{ $gedungBgns->Level5 }}" autocomplete="Level5" autofocus>
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
            <td colspan="3"><input type="file" class="form-control @error('FotoBrg') is-invalid @enderror" id="FotoBrg" name="FotoBrg" value="{{ $gedungBgns->FotoBrg }}" autocomplete="FotoBrg" autofocus>
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
            <td colspan="5"><img src="{{ url('FotoBrg') }}/{{ $gedungBgns->FotoBrg }}" class="" width="70%" alt=""></td>
          </div>
        </tr>
  </div>
  <tr>
    <div class="form-group">
      <td><a href="/form/gedung" class="btn btn-danger">Batal</a>
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