@extends('layouts.app')
@section('content')
<div class="sp">
    <img src={{ asset('images/mobile_image.jpg') }} width="100%">
</div>

<div class="container">
                <img src={{ asset('images/top_image.jpg') }} class="pc" width="100%">
                <div class="col-md-12">
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                        <div class="col-md-9">
                                            <div class="topic">Topic</div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="more">
                                                <a href="{{ url('/news') }}" button type="button" class="btn-sm btn-outline-dark">MORE</button></a>
                                            </div>
                                        </div>
                                </div>
                                    <hr>
                                    <small class="date">2021.02.25</small>
                                    <br>
                                    <a class="link" href="https://anchor.fm/13190" target="_blank">Yuki Yoshida Official Podcast "y2_radio" 開設！</a>
                                    <p class="text">音楽や英語、プログラミングなど様々なテーマについて語ります！不定期更新予定。</p>
                                    <div class="sp"><br></div>
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
                                    <small class="date">2020.11.27</small>
                                    <br>
                                    <a class="link" href="{{ url('/music') }}">13th Single「Daydream」</a>
                                    <br>
                                    <p class="text">夢や人生観を描いたまさにコロナ禍の"今”に響くような歌詞、エモーショナルなミディアムロックチューン。</p>
                                    <div class="sp"><br></div>
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
                                    <a class="link" href="http://54.249.81.67/" target="_blank"><span>NIPPO</span></a>
                                    <p class="text">プログラミング学習を毎日記録</p>
                                    <a class="link" href="http://18.179.42.2/" target="_blank"><span>TRAVEL×YOU</span></a>
                                    <p class="text">旅とあなたをつなぐプラットフォーム</p>
                            </div>
                    </div>
                </div>               
            </div>
        </div>
@endsection
   

