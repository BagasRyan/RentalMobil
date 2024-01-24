@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
   <div class="card-body p-5">
      <div class="card-title d-flex align-items-center">
       <div><i class="bx bxs-user me-1 font-22"></i>
      </div>
        <h5 class="mb-0">Sewa mobil anda</h5>
 </div>
     <hr>
            <form class="row g-3" action="{{ route('rent.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label class="form-label">Gambar Kendaraan</label>
                    <br>
                <img src="" class="col-md-12 mb-2" id="thumbnail">
                    <div class="input-group">
                        <input type="file" name="gambar" class="form-control file @error('gambar') is-invalid @enderror" id="inputGroupFile02">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputLastName1" class="form-label">Merk Kendaraan</label>
                     <div class="input-group">
                         <input type="text" class="form-control border-start-0" id="inputLastName1" name="merk" />
                         </div>
                        </div>
                        <div class="col-12">
                            <label for="inputPhoneNo" class="form-label">Model Kendaraan</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-start-0" id="inputPhoneNo" name="model" />
                                </div>
                                 </div>
                            <div class="col-12">
                             <label for="inputEmailAddress" class="form-label">Plat Kendaraan</label>
                             <div class="input-group">
                                 <input type="text" class="form-control border-start-0" id="inputEmailAddress" name="plat" />
                                </div>
                            </div>
                        <div class="col-12">
                             <label for="inputChoosePassword" class="form-label">Tarif</label>
                            <div class="input-group">
                                    <input type="text" class="form-control border-start-0" id="inputChoosePassword" name="tarif" />
                                </div>
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