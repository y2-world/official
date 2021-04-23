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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>New Release</h2>
                <div class="topic">Daydream</div>
                <p class="text">13th Single<br>
                2020.11.27</p>
                <hr>
                <p class="profile">01.Daydream<br>
                <br>
                夢や人生観を描いたまさにコロナ禍の"今”に響くような歌詞、エモーショナルなミディアムロックチューン。</p>        
                <img src={{ asset('images/single_image13.jpg') }} class="image" width="100%">
                <br>
                <br>
                <h5>Listen on</h5>
                <a href="https://music.apple.com/jp/artist/yuki-yoshida/1448865361?itsct=music_box_badge&amp;itscg=30200&amp;ct=artists_yuki_yoshida&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/standard-black/en-us?size=250x83&h=f2a92c99a2015112ccd39cfb7300b8ce" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"></a>
                <br>
                <iframe src="https://open.spotify.com/follow/1/?uri=spotify:user:21oiucbvpex7hvueehkm4bkpy&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                <hr>
            </div>
        </div>
</div>
@endsection