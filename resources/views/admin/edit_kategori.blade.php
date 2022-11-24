@extends('master.index_admin')
@section('title', 'Edit Kategori')

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Kategori</h4>

                <form class="forms-sample" action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleInputName1">Nama kategori</label>
                        <input type="text" class="form-control" id="exampleInputName1"
                            value="{{ $kategori->nama_kategori }}" name="nama_kategori"
                            placeholder="Masukkan nama kategori">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
