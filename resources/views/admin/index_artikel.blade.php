@extends('master.index_admin')
@section('title', 'Data Artikel')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Artikel</h4>
       <a class="btn btn-primary" href="{{ route('artikel.create') }}">Tambah Artikel</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Foto
                </th>
                <th>
                  Judul
                </th>
                <th>
                  Isi
                </th>
                <th>
                  Kategori
                </th>
                <th>
                  Tanggal Artikel
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($artikel as $a)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="py-1">
                  <img src="{{ asset('storage/' .$a->foto) }}" alt="image"/>
                </td>
                <td>
                  {{ $a->judul }}
                </td>
                <td>
                    {{ $a->isi }}
                </td>
                <td>
                    {{ $a->kategori->nama_kategori }}
                </td>
                <td>
                    {{ $a->tanggalArtikel }}
                </td>
                <td>
                    <a type="button" class="btn btn-primary" href="artikel/edit/{{$a->id}}">Edit</a>
                    <a type="button"  class="btn btn-danger" href="delete3/{{$a->id}}">Delete</a>
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