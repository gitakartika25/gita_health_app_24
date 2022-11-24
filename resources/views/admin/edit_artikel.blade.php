@extends('master.index_admin')
@section('title', 'Edit Artikel')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Artikel</h4>
      
        <form class="forms-sample" action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
          <div class="form-group">
            <label for="exampleInputName1">Judul</label>
            <input type="text" class="form-control " id="" value="{{ $artikel->judul }}" name="judul" placeholder="Masukkan judul">
          </div>
          
          <div class="form-group">
            <label for="exampleInputName1">Tanggal Artikel</label>
            <input type="date" class="form-control " id="" value="{{ $artikel->tanggalArtikel }}" name="tanggalArtikel" >
          </div>
          <div class="form-group">
              <label for="exampleSelectGender">Kategori</label>
              <select class="form-control  " name="kategori_id" id="exampleSelectGender">
                <option selected  value="{{ $artikel->kategori_id }}">{{ $artikel->kategori->nama_kategori }}</option>
                <option  disabled value="">Pilih Kategori</option>
                @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                @endforeach
            </select>
            </div>
          <div class="form-group">
            <label>File upload</label>
            <div></div>
            <img src="{{ asset('storage/' .$artikel->foto) }}" alt="image" style="width: 200px"/>
            <input type="file" name="foto" class="file-upload-default ">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Isi</label>
            <textarea class="form-control" id="exampleTextarea1"  name="isi" rows="4">{{ $artikel->isi }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
         
        </form>
      </div>
    </div>
  </div>

  @section('js')
   <!-- Plugin js for this page -->
   <script src="{{ asset('template/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
   <script src="{{ asset('template/vendors/select2/select2.min.js') }}"></script>
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="{{ asset('template/js/off-canvas.js') }}"></script>
   <script src="{{ asset('template/js/hoverable-collapse.js') }}"></script>
   <script src="{{ asset('template/js/template.js') }}"></script>
   <script src="{{ asset('template/js/settings.js') }}"></script>
   <script src="{{ asset('template/js/todolist.js') }}"></script>
   <!-- endinject -->
   <!-- Custom js for this page-->
   <script src="{{ asset('template/js/file-upload.js') }}"></script>
   <script src="{{ asset('template/js/typeahead.js') }}"></script>
   <script src="{{ asset('template/js/select2.js') }}"></script>
   <!-- End custom js for this page-->
  @endsection
@endsection
