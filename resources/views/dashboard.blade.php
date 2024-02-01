@extends('app')

@section('content')
<!-- <div class="album py-3 bg-body-tertiary">
    <div class="container">
    <div class="album bg-body-tertiary p-4">
        @forelse($database as $data)
            <div class="card shadow-sm" style="width: 18rem; display: inline-block; margin-right: 10px;">
                <img src="{{ asset('storage/mobil/'. $data->gambar) }}" width="100%" height="225">
                <div class="card-body">
                    <p class="card-text">{{ $data->merk }}</p>
                    <p class="card-text">Rp.{{ $data->tarif }}</p>
                    <h6 class="card-text">{{ $data->stok }}</h6>
                </div>
                <button class="btn">
                    <a href="{{ Route('detail', $data->id) }}" class="btn btn-outline-secondary" title="Lihat">Lihat detail</a>
                </button>
            </div>
        @empty
            <h1>Kosong</h1>
        @endforelse
    </div>
    </div>
</div> -->

<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
    @forelse($database as $data)
    <div class="col">
        <a href="{{ Route('detail', $data->id) }}">
			<div class="card">
				<img src="{{ asset('storage/mobil/'. $data->gambar) }}" class="card-img-top" alt="...">
					<div class="card-body">
						<h6 class="card-title cursor-pointer">{{ $data->merk }}</h6>
					<div class="clearfix">
						<p class="mb-0 float-start text-dark">{{ $data->stok }}</p>
						<p class="mb-0 float-end fw-bold text-dark"><span>Rp. {{ $data->tarif }}</span></p>
					</div>
				</div>
			</div>
        </a>
        </div>
    @empty
    <h1>Belum ada postingan apapun</h1>
    @endforelse
</div>
@endsection