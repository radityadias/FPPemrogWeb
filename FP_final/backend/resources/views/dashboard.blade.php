@extends('layouts.app')
  
@section('title', 'Dashboard Admin')
  {{-- Data Pemesanan --}}
@section('contents')
  <div class="container border" id="con-dataPemesanan"> 
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Data Pemesanan</h2>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomor HP</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPesanan as $user)
                        <tr>
                            <td>{{ $user->id_pemesanan }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->nomor_hp }}</td>
                            <td>{{ $user->tgl_pinjam }}</td>
                            <td>{{ $user->tgl_kembali }}</td>
                            {{-- <td>{{ $user->Mobil }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>

  
  
@endsection

<style scoped>
  .col
  {
    border: 1px solid black;
  }

</style>