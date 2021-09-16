@extends('layouts.app')
@section('content')
<div class="cover">
    <div class="element js-fadein">
    <img src={{ asset('images/top_image.jpg') }}>
    <p>Yuki Yoshida Official Website</p>
    </div>
</div>
<div class="element js-fadein">
    <div class="topics">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h3 class="top-header">TOPICS</h3>
                    <div class="topic-list">
                        <div class="date">2021.04.29</div>
                        <div class="topic">y2_radio 質問・感想フォーム開設！</div>
                    </div>
                    <div class="topic-list">
                        <div class="date">2021.04.21</div>
                        <div class="topic">Radioページ開設！</div>
                    </div>
                    <div class="topic-list">
                        <div class="date">2021.02.25</div>
                        <div class="topic">Yuki Yoshida Official Podcast "y2_radio" 開設！</div>
                    </div>
                    <div class="topic-list">
                        <div class="date">2021.02.18</div>
                        <div class="topic">Yuki Yoshida Official Qiita 開設！</div>
                    </div>
                    <div class="more">
                        <a href="{{ url('/news') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="element js-fadein">
    <div class="release">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h3 class="top-header">NEW RELEASE</h3>
                    <div class="topic-list">
                        <div class="date">2020.11.27</div>
                        <div class="topic">
                            13th Single「Daydream」
                            <p class="text">夢や人生観を描いたまさにコロナ禍の"今"に響くような歌詞、<br>エモーショナルなミディアムロックチューン。</p>
                            <img src={{ asset('images/single_image13.jpg') }} class="release-image">
                        </div>
                    </div>
                    <div class="more">
                        <a href="{{ url('/music') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="element js-fadein">
    <div class="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                        <div class="row">
                            <div>
                                <h3 class="top-header">PORTFOLIO</div>
                            </div>
                                <h5 class="text-center">TRAVEL×YOU</h4>
                                <div class="text-center">
                                    <a href="http://18.179.42.2/" target="_blank"> <img src={{ asset('images/works_image2.png') }} class="portofolio-image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="more">
                            <a href="{{ url('/works') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
   

