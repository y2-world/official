@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
<div class="container">
    <h2>Music</h2>
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Discography
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/music/single') }}">Single</a>
                <a class="dropdown-item" href="{{ url('/music/album') }}">Album</a>
            </div><!-- /.dropdown-menu -->
        </div><!-- /.btn-group -->
</div>
<div class="disco-wrapper">
    <div id="mask" class="hidden"></div>
    <div class="element js-fadein">
        <div class="container">
            <h3 class="single-header">Album</h3>
            <div class="album-wrapper">
                <div class="single">
                    <img src={{ asset('images/album_image4.jpg') }} class="album-image" id="album4">
                    <div class="topic">BIRTH</div>
                    <p class="text">4th Album<br>2019.09.24</p>
                </div>
                <div id="album" class="hidden">
                    <div class="album-row">
                        <div class="album-index">4th Album</div>
                        <div id ="close">
                            <span class="material-icons">close</span>
                        </div>
                    </div>
                    <div class="album-title">BIRTH</div>
                    <div class="album-date">2019.09.24</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-img">
                                <img src={{ asset('images/album_image4.jpg') }} class="album-image">
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <p>
                                01.生まれたての子鹿のように<br>
                                02.Take off<br>
                                03.春風<br>
                                04.Lovin' you<br>
                                05.ストローク<br>
                                06.Graduation<br>
                                07.風が運んだ手紙<br>
                                08.Waitin'for you<br>
                                09.Turquoise<br>
                                10.陽炎<br>
                                11.Next to you<br>
                                12.繋ぎとめるもの<br>
                                13.Up to you<br>
                                14.夜を通り抜けて<br>
                                15.願い
                            </p>
                        </div>
                    </div>
                </div>
                <div class="single">
                    <img src={{ asset('images/album_image3.jpg') }} class="album-image">
                    <div class="topic">My World</div>
                    <p class="text">3rd Album<br>2018.08.01</p>
                </div>
                
                <div class="single">
                    <img src={{ asset('images/album_image2.jpg') }} class="album-image">
                    <div class="topic">Second Life</div>
                    <p class="text">2nd Album<br>2018.03.19</p>
                </div>

                <div class="single">
                    <img src={{ asset('images/album_image1.jpg') }} class="album-image">
                    <div class="topic">First Records</div>
                    <p class="text">1st Album<br>2018.02.26</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection