@extends('master')

@section('title')
    Jawaban Dari {{ $jawaban->user_id }}
@endsection

@section('content')
    <div class="col-lg-12 my-3 text-left">
        <a href="{{ route('question-detail',['id' => $jawaban->pertanyaan_id]) }}"><button class="btn btn-info">Back</button></a>
    </div>
    <div class="col-lg-12 my-2">
        <div class="row mt-4 mb-3">
            <div class="col-lg-2 text-center">
                <div class="col">
                    <button class="btn btn-gray btn-sm" data-toggle="tooltip" data-placement="right" title="Jawaban ini membantu">/\</button>
                </div>
                <div class="col">
                    <h3>0</h3>
                </div>
                <div class="col">
                    <button class="btn btn-gray btn-sm" data-toggle="tooltip" data-placement="right" title="Jawaban ini kurang membantu">\/</button>
                </div>
            </div>
            <div class="col-lg-10 mb-4">
                {!! html_entity_decode($jawaban->jawaban) !!}
            </div>
        </div>
        <div class="row mt-3">
            {{-- Total Komentar --}}
            <div class="col-lg-12">
                {{-- Forn Komentar --}}
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#youranswer' ) )
                .then( editor => {
                          console.log( editor );
                                } )
                .catch( error => {
                            console.error( error );
                     } );
    </script>
@endpush