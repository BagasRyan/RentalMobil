@extends('app')

@section('content')
<div class="container mt-4">
<div class="card border-top border-0 border-4">
    <div class="card-body p-5">
       <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary mb-4">Kembali</a>
      <div class="card-title d-flex align-items-center">
 </div>
             <hr>
             <div class="card">
                <div class="card-body">
                    <h5>Profil Anda</h5>
                    <hr>
                    <table>
                        <tr>
                        <td><p>Nama :</p></td>
                        <td><p>{{ $users->nama }}</p></td>
                        </tr>
                        <tr>
                        <td><p>Username :</p></td>
                        <td><p>{{ $users->username }}</p></td>
                        </tr>
                        <tr>
                        <td><p>No Telepon :</p></td>
                        <td><p>{{ $users->no_telp }}</p></td>
                        </tr>
                        <tr>
                        <td><p>No SIM:</p></td>
                        <td><p>{{ $users->no_sim }}</p></td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>
</div>
@endsection