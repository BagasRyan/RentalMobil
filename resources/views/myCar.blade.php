@extends('app')

@section('content')
<div class="container mt-3">
<section class="py-5 text-center container">
    <div class="row">
      <div class="col-lg-6 col-md-8 mx-auto">
       <h5>Mobil Anda</h5>
      </div>
    </div>
  </section>
  @forelse($mobil as $data)
    <div class="card border-0">
      <div class="card-body">
      <div class="container">
          <div class="card shadow-sm mt-3">
          <div class="card-body">
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
            </div>
            <img src="{{ asset('storage/mobil/'. $data->gambar) }}" class="img-fluid">
            <div class="d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <a href="/delete/{{ $data->id }}" class="btn btn-sm btn-outline-danger" title="Hapus"><i class="bx bx-trash"></i></a>
                        </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    @empty
    <h3>Anda belum memposting apapun</h3>
          @endforelse
</div>
@endsection