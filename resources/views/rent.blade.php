@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
    <div class="card-body p-5">
       <a href="/detail/{{ $id }}" class="btn btn-sm btn-primary mb-4">Kembali</a>
      <div class="card-title d-flex align-items-center">
        <h5 class="mb-0">Sewa Mobil</h5>
 </div>
     <hr>
             <hr>
             <div class="card">
                <div class="card-body">
                <form class="row g-3" action="{{ route('rented.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="col-12">
                    <label for="inputLastName1" class="form-label">Tanggal mulai disewakan</label>
                     <div class="input-group">
                         <input type="date" class="form-control border-start-0" id="inputLastName1" name="mulai" />
                        </div>
                    </div>
                        <div class="col-12">
                            <label for="inputPhoneNo" class="form-label">Tanggal berakhir disewakan</label>
                            <div class="input-group">
                                <input type="date" class="form-control border-start-0" id="inputPhoneNo" name="berakhir" />
                            </div>
                    </div>
                            <div class="input-group">
                                <input type="hidden" class="form-control border-start-0" id="inputPhoneNo" name="id" value="{{ $id }}" />
                            </div>
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                </form>
                </div>
            </div>                          
            <div class="col-12">
                </div>
            </div>
        </div>
</div>
@endsection