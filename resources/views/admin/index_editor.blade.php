@extends('master.index_admin')
@section('title', 'Data Editor')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Editor</h4>
       <a class="btn btn-primary" href="{{ route('editor.create') }}">Tambah Editor</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
                  No
                </th>
                <th>
                  Nama 
                </th>
                <th>
                  Email
                </th>
                <th>
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($editor as $a)
              <tr>
                <td>{{ $loop->iteration }}</td>
               
                <td>
                    {{ $a->nama }}
                </td>
                <td>
                    {{ $a->email }}
                </td>
                <td>
                    <a type="button" class="btn btn-primary" href="editor/edit/{{$a->id}}">Edit</a>
                    <a type="button"  class="btn btn-danger" href="delete2/{{$a->id}}">Delete</a>
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