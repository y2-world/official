@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h2>Music</h2>
                    <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Discography
                    </button>
                    <br>
                    <br>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/music/single') }}">Single</a>
                        <a class="dropdown-item" href="{{ url('/music/album') }}">Album</a>
                    </div><!-- /.dropdown-menu -->
                    </div><!-- /.btn-group -->
                <hr>
                <h5>Listen on</h5>
                <a href="https://music.apple.com/jp/artist/yuki-yoshida/1448865361?itsct=music_box_badge&amp;itscg=30200&amp;ct=artists_yuki_yoshida&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/standard-black/en-us?size=250x83&h=f2a92c99a2015112ccd39cfb7300b8ce" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 250px; height: 83px;"></a>
                <br>
                <iframe src="https://open.spotify.com/follow/1/?uri=spotify:user:21oiucbvpex7hvueehkm4bkpy&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                <hr>
                <h5>Watch on</h5>
                <div class="movie-wrap">
                    <iframe width="480" height="270" src="https://www.youtube.com/embed/videoseries?list=PLPky7Hthrm_dRbmcTqh6hKOavDpCyKBvt" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
</div>
@endsection