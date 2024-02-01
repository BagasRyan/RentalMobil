@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
    <div class="card-body p-5">
       <!-- <a href="/detail/{{ $id }}" class="btn btn-sm btn-primary mb-4">Kembali</a> -->
     <hr>
             <hr>
             <div class="card">
                <div class="card-body">
                <form class="row g-3" action="{{ Route('rent.return.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <h4>Kembalikan mobil ini?</h4>
                <div class="card-body">
                <img src="{{ asset('storage/mobil/'. $data->gambar) }}" class="img-fluid" border="1"> 
                <hr>
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
                            <td><p>Jumlah waktu sewa: </p></td>
                            <td><p>{{ $jumlahWaktuSewa }}</p></td>
                        </tr>
                        <input type="hidden" name="id" value="{{ $data->id }}">
                    </table>
                </div>
            </div>
            <button type="submit" class="btn btn-primary px-5">Submit</button>
                </form>
                </div>
            </div>                          
            </div>
        </div>
</div>
@endsection