@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
   <div class="card-body p-5">
      <div class="card-title d-flex align-items-center">
        <div><i class="bx bxs-user me-1 font-22"></i></div>
        <h5 class="mb-0">Sewa mobil anda</h5>
      </div>
        <hr>
            <form class="row g-3" action="{{ route('rent.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label class="form-label">Gambar Kendaraan</label>
                    <br>
                <img src="" class="col-md-12 mb-2" id="thumbnail">
                    <div class="input-group">
                        <input type="file" name="gambar" class="form-control file @error('gambar') is-invalid @enderror" id="inputGroupFile02">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    @error('gambar')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputLastName1" class="form-label">Merk Kendaraan</label>
                     <div class="input-group">
                         <input type="text" class="form-control @error('merk') is-invalid @enderror border-start-0" value="{{ old('merk') }}" id="inputLastName1" name="merk" />
                    </div>
                    @error('merk')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="col-12">
                <label for="inputPhoneNo" class="form-label">Model Kendaraan</label>
                    <div class="input-group">
                        <input type="text" class="form-control @error('model') is-invalid @enderror border-start-0" value="{{ old('model') }}" id="inputPhoneNo" name="model" />
                    </div>
                    @error('model')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Plat Kendaraan</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('plat') is-invalid @enderror border-start-0" value="{{ old('plat') }}" id="inputEmailAddress" name="plat" />
                </div>
                    @error('plat')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Tarif</label>
                    <div class="input-group">
                        <input type="text" class="form-control @error('tarif') is-invalid @enderror border-start-0" value="{{ old('tarif') }}" id="inputChoosePassword" name="tarif" />
                    </div>
                @error('tarif')
                <p class="text-danger">
                        {{ $message }}
                </p>
                 @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
const gambar = document.getElementById('thumbnail');
const input = document.getElementsByClassName('file')[0];


input.addEventListener('change', function(){
    gambar.style.width = '300px';
    gambar.style.height = '200px';
    gambar.src = URL.createObjectURL(input.files[0]);
});
</script>
@endpush