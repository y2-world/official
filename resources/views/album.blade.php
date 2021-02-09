@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
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
        <br>
        <br>
        <h2>Album</h2>
            <div class="mt-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="topic">BIRTH</div>
                                <p class="text">4th Album<br>
                                2019.09.24</p>
                                <img src={{ asset('images/album_image4.jpg') }} class="image" width="100%">
                                <hr>
                                <p class="text">
                                01.生まれたての小鹿のように<br>
                                02.Take off<br>
                                03.春風<br>
                                04.Lovin' you<br>
                                05.ストローク<br>
                                06.Graduation<br>
                                07.風が運んだ手紙<br>
                                08.Waitin' for you<br>
                                09.Turquoise<br>
                                10.陽炎<br>
                                11.Next to you<br>
                                12.繋ぎとめるもの<br>
                                13.Up to you<br>
                                14.夜を通り抜けて<br>
                                15.願い<br>
                                </p> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="topic">My World</div>
                                <p class="text">3rd Album<br>
                               2018.08.01</p>
                                <img src={{ asset('images/album_image3.jpg') }} class="image" width="100%">
                                <hr>
                                <p class="text">
                                01.Welcome to my world<br>
                                02.Clover<br>
                                03.自由の砦<br>
                                04.melody<br>
                                05.Dear my friends<br>
                                06.I miss you<br>
                                07.あなたがいれば<br>
                                08.A piece<br>
                                09.Present from you<br>
                                10.夏のシグナル<br>
                                11.TOKYO<br>
                                12.Wonderful World<br>
                                13.orange<br>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="topic">Second Life</div>
                                <p class="text">2nd Album<br>
                               2018.03.19</p>
                                <img src={{ asset('images/album_image2.jpg') }} class="image" width="100%">
                                <hr>
                                <p class="text">
                                01.空へ<br>
                                02.YOU<br>
                                03.僕には明日が見えない<br>
                                04.夢花火<br>
                                05.Ordinary<br>
                                06.君の笑顔<br>
                                07.Rollin' on<br>
                                08.Search for Love<br>
                                09.星空のセレナーデ<br>
                                10.僕なりのクリスマス<br>
                                11.SUMMER VIBRATION<br>
                                12.この世界で<br>
                                13.Traveling Life<br>
                                14.アリガト 〜Dear K〜<br>
                                </p> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="topic">First Records</div>
                                <p class="text">1st Album<br>
                                2018.02.26</p>
                                <img src={{ asset('images/album_image1.jpg') }} class="image" width="100%">
                                <hr>
                                <p class="text">
                                01.未開の地へ<br>
                                02.You're the only one<br>
                                03.process<br>
                                04.今夜の魔法<br>
                                05.anymore<br>
                                06.Umbrella<br>
                                07.Snow White<br>
                                08.フルコース<br>
                                09.My Love<br>
                                10.On the Road<br>
                                11.Rainbow<br>
                                12.ACACIA 〜My Precious Time〜<br>
                                </p> 
                            </div>
                        </div>
                    </div>
@endsection