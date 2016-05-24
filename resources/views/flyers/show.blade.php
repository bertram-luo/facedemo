@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
<div class="container">
<div class="row">
    <div class="col-md-4">
    <h1>{{ $flyer->street}}</h1>
    <h2>{!! $flyer->price !!}</h2>
    <div class="description">{!! nl2br($flyer->description) !!}</div>
    </div>
    <div class="col-md-8">
        @foreach($flyer->photos->chunk(4) as $set)
            <div class="row gallery">
                @foreach($set as $photo)
                    <div class="col-md-3 gallery__image">
                       <div style="position:relative;"> 
                        {!! link_to('Delete', '/photos/'.$photo->id, 'DELETE') !!}
                        <a href="/{{ $photo->path}}" data-lity>
                            <img src="/{{ $photo->thumbnail_path}}" alt="">
                        </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        @if($user && $user->owns($flyer))
        <hr>
        <form id="addPhotosForm"
             class="dropzone"
             action="{{ route('store_photo_path', [$flyer->zip, $flyer->street])}}"
             method="POST">
            {{ csrf_field() }}
        </form>
@else 
{{ var_dump($flyer->user_id) }}
<p>fuck you</p>
        @endif
    </div>
</div>
</div>
@endsection


@section('scripts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script>
Dropzone.options.addPhotosForm={
    paramName: 'photo',
    maxFilesize: 3,
    acceptedFiles: '.jpg, .jpeg, .png, .bmp'
}
</script>
