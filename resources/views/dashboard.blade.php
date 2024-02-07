@extends('app')

@section('content')

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
@push('script')
@if(session('create'))
<script>
    Swal.fire({
        title: 'Berhasil',
        text: '{{ session('create') }}',
        icon: 'success'
    });
</script>
@endif

@if(session('rent'))
<script>
    Swal.fire({
        title: 'Terima Kasih',
        text: '{{ session('rent') }}',
        icon: 'success'
    });
</script>
@endif
@endpush