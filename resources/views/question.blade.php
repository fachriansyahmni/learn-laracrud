@extends('master')

@section('title','Pertanyaan')

@section('content')
<div class="col-lg-12 my-3 text-right">
    <a href="/pertanyaan/create"><button class="btn btn-success">Add a question</button></a>
</div>
<div class="col-lg-12 my-2">
    @foreach ($data as $p)
    <div class="card mb-5">
        <div class="card-body">
        <h5 class="card-title"><a href="{{ route('question-detail',['id' => $p->id ]) }}" class="card-link">{{ $p->judul }}</a></h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $p->penanya_id }}</h6> 
            @php
                $str = strip_tags($p->isi, '<p><strong>&nbsp;');
            @endphp
            <p class="card-text">{!! html_entity_decode(\Illuminate\Support\Str::limit($str, 150, $end='...')) !!}</p>
        </div>
      </div>
      @endforeach
      {{ $data->links() }}
    @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
</div>
@endsection
