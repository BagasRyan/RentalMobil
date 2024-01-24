@extends('app')

@section('content')
<div class="album py-5 bg-body-tertiary">
    <div class="container">
    <div class="album py-5 bg-body-tertiary">
    <div class="container">
        @forelse($database as $data)
            <div class="card shadow-sm" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="{{ asset('storage/mobil/'. $data->gambar) }}" width="100%" height="225">
                <div class="card-body">
                    <p class="card-text">{{ $data->merk }}</p>
                    <p class="card-text">Harga: {{ $data->tarif }}</p>
                    <p class="card-text">{{ $data->stok }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ Route('detail', $data->id) }}" class="btn btn-sm btn-outline-secondary" title="Lihat"><i class="bx bx-show-alt"></i></a>
                        </div>
                        <small class="text-body-secondary"></small>
                    </div>
                </div>
            </div>
        @empty
            <h1>Kosong</h1>
        @endforelse
    </div>
</div>

    </div>
  </div>
@endsection