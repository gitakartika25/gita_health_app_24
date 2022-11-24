@extends('master.index_admin')
@section('title', 'dashboard')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">Biodata Diri</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('dashboard.store') }}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="" name="nama" placeholder="Masukkan Nama">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tinggi Badan</label>
                            <input type="text" class="form-control" id="" name="tinggibadan" placeholder="Masukkan Tinggi Badan">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Berat Badan</label>
                            <input type="text" class="form-control" id="" name="beratbadan" placeholder="Masukkan Berat Badan">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="" name="tanggalLahir" placeholder="Masukkan tranggal lahir">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Hobi</label>
                            <input type="text" class="form-control" id="" name="hobi" placeholder="Masukkan Hobi">
                          </div>
                          <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection