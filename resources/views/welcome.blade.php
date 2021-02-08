@extends('layouts.app')
@section('content')
                <img src={{ asset('images/top_image.jpg') }} class="image" width="100%">
                <div class="col-md-12">
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                        <div class="col-md-9">
                                            <div class="topic">News</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="more">
                                                <a href="{{ url('/news') }}" button type="button" class="btn-sm btn-outline-dark">MORE</button></a>
                                            </div>
                                        </div>
                                </div>
                                    <hr>
                                    <small class="date">2021.02.07</small>
                                    <br>
                                    <a class="link" href="{{ url('/news') }}">Yuki Official Website 開設！</a>
                                    <p class="text">Yukiのアーティスト活動やエンジニアとしての活動をお伝えするオフィシャルウェブサイトが開設されました。</p>   
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="topic">New Release</div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="more">
                                            <a href="{{ url('/music') }}" button type="button" class="btn-sm btn-outline-dark">MORE</button></a>
                                        </div>
                                    </div>
                                </div>
                                    <hr>
                                    <small class="date">2020.11.28</small>
                                    <br>
                                    <a class="link" href="{{ url('/music') }}">13th Single「Daydream」</a>
                                    <br>
                                    <p class="text">夢や人生観を描いたまさにコロナ禍の"今”に響くような歌詞、エモーショナルなミディアムロックチューン。</p>
                                    
                            </div>
                            <div class="col-md-4">
                            <div class="row">
                                    <div class="col-md-9">
                                        <div class="topic">Portfolio</div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="more">
                                            <a href="{{ url('/works') }}" button type="button" class="btn-sm btn-outline-dark">MORE</button></a>
                                        </div>
                            </div>
                                </div>
                                    <hr>
                                    <a class="link" href="{{ url('http://54.249.81.67/') }}" target="_blank"><span>NIPPO</span></a>
                                    <p class="text">プログラミング学習を毎日記録</p>
                                    <a class="link" href="{{ url('http://18.179.42.2/') }}" target="_blank"><span>TRAVEL×YOU</span></a>
                                    <p class="text">旅とあなたをつなぐプラットフォーム</p>
                            </div>
                    </div>
                </div>
                <hr>
                <div class="hour"> TOTAL INPUT TIME : 346 HOURS </div>
                <a href="https://twitter.com/y2_engineer2?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @y2_engineer2</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        @endsection
   

