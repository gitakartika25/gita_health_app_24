@extends('master.index_admin')
@section('title', 'Data Kategori')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Kategori</h4>
       <a class="btn btn-primary" href="{{ route('kategori.create') }}">Tambah Kategori</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Nama Kategori
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($kategori as $a)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    {{ $a->nama_kategori }}
                </td>
                <td>
                    <a type="button" class="btn btn-primary" href="kategori/edit/{{$a->id}}">Edit</a>
                    <a type="button"  class="btn btn-danger" href="delete1/{{$a->id}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection