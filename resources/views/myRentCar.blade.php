@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
    <div class="card-body p-5">
       <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary mb-4">Kembali</a>
      <div class="card-title d-flex align-items-center">
          @forelse($mobil as $data)
            <div class="card">
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
                    </table>
                    <form action="" method="POST">
                    <button class="btn btn-sm btn-primary">Kembalikan</button>
                    </form>
                </div>
            </div>
            @empty
            <h3>Anda belum sewa mobil apapun</h3>
            @endforelse
            </div>
        </div>
</div>
@endsection