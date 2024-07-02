@extends('layouts.app')
@section('title', 'Mobil')

@section('contents')

<div class="container-fluid">
    <h5>Informasi Mobil</h5>
    <form action="{{ route('mobilForm.store') }}" method="POST">
        @csrf
        <div class="row row-cols-2">
            <div class="col">
                <label for="nama-mobil">Nama Mobil</label>
                <br />
                <div class="input-group mb-3">
                    <input name="nama_mobil" id="nama-mobil" type="text" class="form-control @error('nama_mobil')is-invalid @enderror" placeholder="Masukkan Nama Mobil" />
                    @error('nama_mobil')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col">
                <label for="tempat-duduk">Tempat Duduk</label>
                <br />
                <div class="input-group mb-3">
                    <input name="tempat_duduk" id="tempat-duduk" type="text" class="form-control @error('tempat_duduk')is-invalid @enderror" placeholder="Masukkan Tempat Duduk" />
                    @error('tempat_duduk')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row row-cols-2">
            <div class="col">
                <label for="bagasi">Bagasi</label>
                <br />
                <div class="input-group mb-3">
                    <input name="bagasi" id="bagasi" type="text" class="form-control @error('bagasi')is-invalid @enderror" placeholder="Masukkan Kapasitas Bagasi" />
                    @error('bagasi')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col">
                <label for="transmisi">Transmisi</label>
                <br />
                <div class="input-group mb-3">
                    <input name="transmisi" id="transmisi" type="text" class="form-control @error('transmisi')is-invalid @enderror" placeholder="Masukkan Jenis Transmisi" />
                    @error('transmisi')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row row-cols-2">
            <div class="col">
                <label for="bahan-bakar">Bahan Bakar</label>
                <br />
                <div class="input-group mb-3">
                    <input name="bahan_bakar" id="bahan-bakar" type="text" class="form-control @error('bahan_bakar')is-invalid @enderror" placeholder="Masukkan Jenis Bahan Bakar" />
                    @error('bahan_bakar')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col">
                <label for="status">Status</label>
                <br />
                <div class="input-group mb-3">
                    <input name="status" id="status" type="text" class="form-control @error('status')is-invalid @enderror" placeholder="Masukkan Status Mobil" />
                    @error('status')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col" id="kolom-button">
                <button type="submit" class="btn btn-success" id="submit-btn">Simpan</button>
            </div>
        </div>
    </form> 
</div>

<div class="container mt-5"> {{-- Data Mobil --}}
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Daftar Mobil</h2>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Merk</th>
                        <th>Tempat Duduk</th>
                        <th>Bagasi</th>
                        <th>Transmisi</th>
                        <th>Bahan Bakar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kendaraan as $mobil)
                        <tr>
                            <td>{{ $mobil->id_mobil }}</td>
                            <td>{{ $mobil->nama_mobil }}</td>
                            <td>{{ $mobil->tempat_duduk }}</td>
                            <td>{{ $mobil->bagasi }}</td>
                            <td>{{ $mobil->transmisi }}</td>
                            <td>{{ $mobil->bahan_bakar }}</td>
                            <td>{{ $mobil->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>


@endsection
