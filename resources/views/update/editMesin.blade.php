@extends('layouts.master')

@section('content')

<center>
  <h1 style="margin-top:20px" class="font-weight-bold">Update Peralatan dan Mesin</h1>
</center>

<div class="container" style="width:75%; margin:auto; margin-top:50px">
  <table class="table table-striped table">
    <form action="{{ url('/form/mesin') }}/{{ $mesins->id }}" method="POST" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
      {{ csrf_field() }}
      <div class="form-row">
        <tr>
          <div class="form-group col-md-4" style="margin-left: -100px;">
            <th><label for="">Kode Barang</label></th>
            <td colspan="5"><input type="text" class="form-control @error('KodeBarang') is-invalid @enderror" id="KodeBarang" name="KodeBarang" placeholder="Kode Barang" value="{{ $mesins->KodeBarang }}" autocomplete="KodeBarang" autofocus>
              @error('KodeBarang')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr>
          <div class="form-group col-md-6" style="margin-left: -100px;">
            <th><label for="">Jenis Barang/Nama Barang</label></th>
            <td colspan="5"><input type="text" class="form-control @error('NamaBarang') is-invalid @enderror" id="NamaBarang" name="NamaBarang" placeholder="Jenis Barang/Nama Barang" value="{{ $mesins->NamaBarang }}" autocomplete="NamaBarang" autofocus>
              @error('NamaBarang')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <!-- <tr><div class="form-group col-md-4" style="margin-left: -100px;">
                <th><label for="">No.Reg</label></th>
                <td colspan="5"><input type="number" class="form-control @error('NoReg') is-invalid @enderror" id="NoReg" name="NoReg" placeholder="No.Reg" value="{{ $mesins->NoReg }}" autocomplete="NoReg" autofocus>
                @error('NoReg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                </div></tr> -->

        <tr>
          <div class="form-group col-md-6" style="margin-left: -100px;">
            <th><label for="">Merk/Type</label></th>
            <td colspan="5"><input type="text" class="form-control  @error('Merk') is-invalid @enderror" id="Merk" name="Merk" placeholder="Merk/Type" value="{{ $mesins->Merk }}" autocomplete="Merk" autofocus>
              @error('Merk')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr>
          <div class="form-group col-md-6" style="margin-left: -100px;">
            <th><label for="">Ukuran/cc</label></th>
            <td colspan="5"><input type="text" class="form-control @error('Ukuran') is-invalid @enderror" id="Ukuran" name="Ukuran" placeholder="Ukuran/cc" value="{{ $mesins->Ukuran }}" autocomplete="Ukuran" autofocus>
              @error('Ukuran')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr>
          <div class="form-group col-md-6" style="margin-left: -100px;">
            <th><label for="">Bahan</label></th>
            <td colspan="5"><input type="text" class="form-control @error('Bahan') is-invalid @enderror" id="Bahan" name="Bahan" placeholder="Bahan" value="{{ $mesins->Bahan }}" autocomplete="Bahan" autofocus>
              @error('Bahan')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr>
          <div class="form-group col-md-6" style="margin-left: -100px;">
            <th><label for="">Tahun Pembuatan</label></th>
            <td colspan="5"><input type="date" class="form-control @error('TahunPembuatan') is-invalid @enderror" id="TahunPembuatan" name="TahunPembuatan" placeholder="Tahun Pembuatan" value="{{ $mesins->TahunPembuatan }}" autocomplete="TahunPembuatan" autofocus>
              @error('TahunPembuatan')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr>
          <div class="form-group col-md-5" style="margin-left: 100px;">
            <th><label for="">Nomor Pabrik</label></th>
            <td><input type="text" class="form-control @error('NomorPabrik') is-invalid @enderror" id="NomorPabrik" name="NomorPabrik" placeholder="Nomor Pabrik" value="{{ $mesins->NomorPabrik }}" autocomplete="NomorPabrik" autofocus>
              @error('NomorPabrik')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>

        <tr><div class="form-group col-md-5" style="margin-left: 100px;">
                <th><label for="">Nomor Rangka</label></th>
                <td><input type="text" class="form-control @error('NomorRangka') is-invalid @enderror" id="NomorRangka" name="NomorRangka" placeholder="Nomor Rangka" value="{{ $mesins->NomorRangka }}" autocomplete="NomorRangka" autofocus>
                @error('NomorRangka')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group col-md-5" style="margin-left: 100px;">
                <th><label for="">Nomor Mesin</label></th>
                <td><input type="text" class="form-control @error('NomorMesin') is-invalid @enderror" id="NomorMesin" name="NomorMesin" placeholder="Nomor Mesin" value="{{ $mesins->NomorMesin }}" autocomplete="NomorMesin" autofocus>
                @error('NomorMesin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group col-md-5" style="margin-left: 100px;">
                <th><label for="">Nomor Polisi</label></th>
                <td><input type="text" class="form-control @error('NomorPolisi') is-invalid @enderror" id="NomorPolisi" name="NomorPolisi" placeholder="Nomor Polisi" value="{{ $mesins->NomorPolisi }}" autocomplete="NomorPolisi" autofocus>
                @error('NomorPolisi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group col-md-5" style="margin-left: 100px;">
                <th><label for="">Nomor BPKB</label></th>
                <td><input type="text" class="form-control @error('NomorBPKB') is-invalid @enderror" id="NomorBPKB" name="NomorBPKB" placeholder="Nomor BPKB" value="{{ $mesins->NomorBPKB }}" autocomplete="NomorBPKB" autofocus>
                @error('NomorBPKB')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

        <!-- <tr><div class="form-group col-md-6" style="margin-left: -100px;">
                <th><label for="">Asal Usul Cara Perolehan</label></th>
                <td colspan="5"><input type="text" class="form-control @error('CaraPerolehan') is-invalid @enderror" id="CaraPerolehan" name="CaraPerolehan" placeholder="Asal Usul Cara Perolehan" value="{{ $mesins->CaraPerolehan }}" autocomplete="CaraPerolehan" autofocus>
                @error('CaraPerolehan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group col-md-6" style="margin-left: -100px;">
                <th><label for="">Jumlah Barang</label></th>
                <td colspan="5"><input type="number" class="form-control @error('JmlBrg') is-invalid @enderror" id="JmlBrg" name="JmlBrg" placeholder="Jumlah Barang" value="{{ $mesins->JmlBrg }}" autocomplete="JmlBrg" autofocus>
                @error('JmlBrg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group col-md-6" style="margin-left: -100px;">
                <th><label for="">Harga Satuan (Rp)</label></th>
                <td colspan="5"><input type="number" class="form-control @error('HargaSatuan') is-invalid @enderror" id="HargaSatuan" name="HargaSatuan" placeholder="Harga Satuan (Rp)" value="{{ $mesins->HargaSatuan }}" autocomplete="HargaSatuan" autofocus>
                @error('HargaSatuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group">
                <th><label for="">Nilai/Harga Perolehan(Rp)</label></th>
                <td colspan="5"><input type="number" class="form-control @error('HargaPerolehan') is-invalid @enderror" id="HargaPerolehan" name="HargaPerolehan" placeholder="Nilai/Harga Perolehan(Rp)" value="{{ $mesins->HargaPerolehan }}" autocomplete="HargaPerolehan" autofocus>
                @error('HargaPerolehan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group col-md-2" style="margin-left: -100px;">
                <th><label for="">Kode Sub Akun</label></th>
                <td colspan="5"><select id="KodeSubAkun" name="KodeSubAkun" class="form-control @error('KodeSubAkun') is-invalid @enderror" value="{{ $mesins->KodeSubAkun }}" autocomplete="KodeSubAkun" autofocus>
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
              <tr><div class="form-group">
                <th><label for="">SUB SUB</label></th>
                <td colspan="5"><select id="SubSub" name="SubSub" class="form-control @error('SubSub') is-invalid @enderror" value="{{ $mesins->SubSub }}" autocomplete="SubSub" autofocus>
                @error('SubSub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select></td>
              </div></tr>
              <tr><div class="form-group col-md-2">
                <th><label for="">Kode Tambah Barang</label></th>
                <td colspan="5"><select id="KodeTmbh" name="KodeTmbh" class="form-control @error('KodeTmbh') is-invalid @enderror" value="{{ $mesins->KodeTmbh }}" autocomplete="KodeTmbh" autofocus>
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
              <tr><div class="form-group col-md-2">
                <th><label for="">Kode Kurang Barang</label></th>
                <td colspan="5"><select id="KodeKurang" name="KodeKurang" class="form-control @error('KodeKurang') is-invalid @enderror" value="{{ $mesins->KodeKurang }}" autocomplete="KodeKurang" autofocus>
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
              </div></tr>
              <tr><div class="form-group col-md-3" style="margin-left: 100px;">
                <th><label for="">SP2D</label></th>
                <td colspan="4"><input type="number" class="form-control @error('SpNo') is-invalid @enderror" id="SpNo" name="SpNo" placeholder="Nomor" value="{{ $mesins->SpNo }}" autocomplete="SpNo" autofocus>
                @error('SpNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('SpTgl') is-invalid @enderror" id="SpTgl" name="SpTgl" placeholder="Tanggal" value="{{ $mesins->SpTgl }}" autocomplete="SpTgl" autofocus>
                @error('SpTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr<div class="form-group col-md-3" style="margin-left: 100px;">
                <th><label for="">SPK/SP/KW</label></th>
                <td colspan="4"><input type="number" class="form-control @error('KwNo') is-invalid @enderror" id="KwNo" name="KwNo" placeholder="Nomor" value="{{ $mesins->KwNo }}" autocomplete="KwNo" autofocus>
                @error('KwNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('KwTgl') is-invalid @enderror" id="KwTgl" name="KwTgl" placeholder="Tanggal" value="{{ $mesins->KwTgl }}" autocomplete="KwTgl" autofocus>
                @error('KwTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group col-md-3" style="margin-left: 100px;">
                <th><label for="">No.BA/SK</label></th>
                <td colspan="4"><input type="number" class="form-control @error('BaNo') is-invalid @enderror" id="BaNo" name="BaNo" placeholder="Nomor" value="{{ $mesins->BaNo }}" autocomplete="BaNo" autofocus>
                @error('BaNo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
                <td><input type="date" class="form-control @error('BaTgl') is-invalid @enderror" id="BaTgl" name="BaTgl" placeholder="Tanggal" value="{{ $mesins->BaTgl }}" autocomplete="BaTgl" autofocus>
                @error('BaTgl')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
             <tr><div class="form-group col-md-6" style="margin-left: 100px;">
                <th><label for="">SKPD Pemberi/Penerima(Mutasi Barang)</label></th>
                <td colspan="5"><input type="text" class="form-control @error('SkpdPemberi') is-invalid @enderror" id="SkpdPemberi" name="SkpdPemberi" placeholder="SKPD" value="{{ $mesins->SkpdPemberi }}" autocomplete="SkpdPemberi" autofocus>
                @error('SkpdPemberi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>

              <tr><div class="form-group">
                <th><label for="">Kode Sub Sub Akun</label></th>
                <td colspan="5"><select id="KodeSubSubAkun" name="KodeSubSubAkun" class="form-control @error('KodeSubSubAkun') is-invalid @enderror" value="{{ $mesins->KodeSubSubAkun }}" autocomplete="KodeSubSubAkun" autofocus>
                @error('KodeSubSubAkun')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select></td>
              </div></tr>

              <tr><div class="form-group">
                <th><label for="">KAPITALISASI</label></th>
                <td colspan="5"><input type="radio" id="Kapitalisasi" name="Kapitalisasi" value="YES">
                    <label for="YES">YES</label><br>
                    <input type="radio" id="Kapitalisasi" name="Kapitalisasi" value="NO">
                    <label for="NO">NO</label><br></td>
              </div></tr>

              <tr><div class="form-group">
                <th><label for="">Kode Kategori Lama</label></th>
                <td colspan="5"><input type="text" class="form-control @error('KodeLama') is-invalid @enderror" id="KodeLama" name="KodeLama" placeholder="Input Kode Kategori Baru" value="{{ $mesins->KodeLama }}" autocomplete="KodeLama" autofocus>
                @error('KodeLama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group">
                <th><label for="">Input Kode Kategori Baru</label></th>
                <td colspan="5"><input type="text" class="form-control @error('KodeBaru') is-invalid @enderror" id="KodeBaru" name="KodeBaru" placeholder="Input Kode Kategori Baru" value="{{ $mesins->KodeBaru }}" autocomplete="KodeBaru" autofocus>
                @error('KodeBaru')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group">
                <th><label for="">CEK KECOCOKAN KODE LAMA DAN KODE TERBARU</label></th>
                <td colspan="5"><input type="text" class="form-control @error('CekKecocokanKode') is-invalid @enderror" id="CekKecocokanKode" name="CekKecocokanKode" placeholder="CEK KECOCOKAN KODE LAMA DAN KODE TERBARU" value="{{ $mesins->CekKecocokanKode }}" autocomplete="CekKecocokanKode" autofocus>
                @error('CekKecocokanKode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group col-md-6" style="margin-left: 100px;">
                <th><label for="">Level 1</label></th>
                <td colspan="5"><input type="text" class="form-control @error('Level1') is-invalid @enderror" id="Level1" name="Level1" placeholder="Level 1" value="{{ $mesins->Level1 }}" autocomplete="Level1" autofocus>
                @error('Level1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group col-md-6" style="margin-left: 100px;">
                <th><label for="">Level 2</label></th>
                <td colspan="5"><input type="text" class="form-control @error('Level2') is-invalid @enderror" id="Level2" name="Level2" placeholder="Level 2" value="{{ $mesins->Level2 }}" autocomplete="Level2" autofocus>
                @error('Level2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group col-md-6" style="margin-left: 100px;">
                <th><label for="">Level 3</label></th>
                <td colspan="5"><input type="text" class="form-control @error('Level3') is-invalid @enderror" id="Level3" name="Level3" placeholder="Level 3" value="{{ $mesins->Level3 }}" autocomplete="Level3" autofocus>
                @error('Level3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group col-md-6" style="margin-left: 100px;">
                <th><label for="">Level 4</label></th>
                <td colspan="5"><input type="text" class="form-control @error('Level4') is-invalid @enderror" id="Level4" name="Level4" placeholder="Level 4" value="{{ $mesins->Level4 }}" autocomplete="Level4" autofocus>
                @error('Level4')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr>
              <tr><div class="form-group col-md-6" style="margin-left: 100px;">
                <th><label for="">Level 5</label></th>
                <td colspan="5"><input type="text" class="form-control @error('Level5') is-invalid @enderror" id="Level5" name="Level5" placeholder="Level 5" value="{{ $mesins->Level5 }}" autocomplete="Level5" autofocus>
                @error('Level5')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror</td>
              </div></tr> -->
        <tr>
          <div class="form-group">
            <th><label for="">Foto Barang 1</label></th>
            <td colspan="5"><input type="file" class="form-control @error('FotoBrg') is-invalid @enderror" id="FotoBrg" name="FotoBrg" value="{{ $mesins->FotoBrg }}" autocomplete="FotoBrg" autofocus>
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
            <td colspan="5"><img src="{{ url('FotoBrg') }}/{{ $mesins->FotoBrg }}" class="" width="70%" alt=""></td>
          </div>
        </tr>
        <tr>
          <div class="form-group">
            <th><label for="">Foto Barang 2</label></th>
            <td colspan="5"><input type="file" class="form-control @error('FotoBrg2') is-invalid @enderror" id="FotoBrg2" name="FotoBrg2" value="{{ $mesins->FotoBrg2 }}" autocomplete="FotoBrg2" autofocus>
              @error('FotoBrg2')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </td>
          </div>
        </tr>
        <tr>
          <div class="form-group">
            <td colspan="5"><img src="{{ url('FotoBrg2') }}/{{ $mesins->FotoBrg2 }}" class="" width="70%" alt=""></td>
          </div>
        </tr>
      </div>
      <tr>
        <div class="form-group">
          <td><a href="/form/mesin" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </td>
        </div>
      </tr>
    </form>
  </table>
</div>

@endsection