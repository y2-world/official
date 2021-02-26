@extends('layouts.app')
@section('content')
<div class="container">
    <div class="btn-group">
    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Music
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ url('/music/') }}">New Relaese</a>
        <a class="dropdown-item" href="{{ url('/music/single') }}">Single</a>
        <a class="dropdown-item" href="{{ url('/music/album') }}">Album</a>
    </div><!-- /.dropdown-menu -->
    </div><!-- /.btn-group -->
</div>

<div class="container">
    <div class="mt-4"></div>
        <div class="row">
            <div class="col-md-4">
                <h2>New Release</h2>
                <div class="topic">Daydream</div>
                <p class="text">13th Single<br>
                2020.11.27</p>
                <hr>
                <p class="profile">01.Daydream<br>
                <br>
                夢や人生観を描いたまさにコロナ禍の"今”に響くような歌詞、エモーショナルなミディアムロックチューン。</p>        
                </div>
            <div class="col-md-4">
                <img src={{ asset('images/single_image13.jpg') }} class="image" width="100%">
                <br>
            </div>
            <div class="col-md-4">
                <h3>Streaming</h3>
                <hr>
                <a href="https://music.apple.com/us/artist/yuki-yoshida/1448865361?itsct=music_box&amp;itscg=30200&amp;ct=artists_yuki_yoshida&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/standard-black/en-US?size=250x83&h=259b7638f2aa5cfb4c76c33102fe2ce3" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"></a>
                <br>
                <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:5x6TjqB9xXXjY4Xn5y2oJm?si=zii-M5L0RDqqcyVP0qeBSQ&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                <hr>
            </div>
        </div>
</div>
@endsection