@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
    <div class="card-body p-5">
       <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary mb-4">Kembali</a>
      <div class="card-title d-flex align-items-center">
        <h5 class="mb-0">Detail Kendaraan</h5>
 </div>
     <hr>
             <img src="{{ asset('storage/mobil/'.$data->gambar) }}" class="img-fluid" border="1"> 
             <hr>
             <div class="card">
                <div class="card-body">
                    <h5>Detail Kendaraan</h5>
                    <hr>
                    @if($data->stok == 'Tersedia')
                    <table>
                        <tr>
                        <td><p>Merk Mobil:</p></td>
                        <td><p>{{ $data->merk }}</p></td>
                        </tr>
                        <tr>
                        <td><p>Model Mobil:</p></td>
                        <td><p>{{ $data->model }}</p></td>
                        </tr>
                        <tr>
                        <td><p>Plat Mobil:</p></td>
                        <td><p>{{ $data->no_plat }}</p></td>
                        </tr>
                        <tr>
                        <td><p>Harga:</p></td>
                        <td><p>{{ $data->tarif }}</p></td>
                        </tr>
                        <tr>
                        <td><p>Stok:</p></td>
                        <td><p>{{ $data->stok }}</p></td>
                        </tr>
                    </table>
                    @else
                    <h3>Mobil ini sedang Disewa</h3>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Kontak Pemilik Kendaraan</h5>
                    <hr>
                    <table>
                        <tr>
                        <td><p>Nama:</p></td>
                        <td><p>{{ $users->nama }}</p></td>
                        </tr>
                        <tr>
                        <td><p>No Telepon:</p></td>
                        <td><p>{{ $users->no_telp }}</p></td>
                        </tr>
                    </table>
                </div>
            </div>    
            @if($data->stok == 'Tersedia')                        
            <div class="col-12">
                <a href="{{ route('rented.view',$data->id) }}" type="submit" class="btn btn-primary px-5">Sewa mobil ini</a>
                </div>
            </div>
            @endif
        </div>
</div>
@endsection