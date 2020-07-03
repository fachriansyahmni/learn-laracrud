@extends('master')

@section('title')
    {{ $pertanyaan->judul }}
@endsection

@section('content')
    <div class="col-lg-12 my-3 text-left">
        <a href="{{ route('question') }}"><button class="btn btn-info">Back</button></a>
    </div>
    <div class="col-lg-12 my-2">
        <div class="row">
            <div class="col-md-12">
                <h1><b>Edit Pertanyaan </b></h1>
            </div>
        </div>
        <div class="row mt-4 mb-3">
            <div class="col-lg-12">
                <form action="{{ route('update-question',['id' => $pertanyaan->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-md-6">
                      <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $pertanyaan->judul }}" placeholder="Judul">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="Isi">Isi Pertanyaan</label>
                      <textarea name="isi" id="Isi" cols="30" rows="10">{!! html_entity_decode($pertanyaan->isi) !!}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#Isi' ) )
                .then( editor => {
                          console.log( editor );
                                } )
                .catch( error => {
                            console.error( error );
                     } );
    </script>
@endpush