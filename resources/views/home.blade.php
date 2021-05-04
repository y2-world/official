@extends('layouts.app')
@section('content')
<div class="element js-fadein">
    <img src={{ asset('images/mobile_image.jpg') }} width="100%">
</div>

<div class="element js-fadein">
    <div class="topics">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                        <div class="row">
                            <div>
                                <h3 class="text-center">TOPICS</div>
                            </div>
                            <div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                        <div class="date">2021.04.29</div>
                                    </div>
                                    <div class="col-md-8">
                                        y2_radio 質問・感想フォーム開設！<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                        <div class="date">2021.04.21</div>
                                    </div>
                                    <div class="col-md-8">
                                        Radioページ開設！<br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                        <div class="date">2021.02.25</div>
                                    </div>
                                    <div class="col-md-8">
                                        Yuki Yoshida Official Podcast "y2_radio" 開設！<br>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                        <div class="date">2021.02.18</div>
                                    </div>
                                    <div class="col-md-8">
                                        Yuki Yoshida Official Qiita 開設！<br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="more">
                                    <a href="{{ url('/news') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                                </div>
                            </div>
                        </div>
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
                <div class="col-md-9">
                        <div class="row">
                            <div>
                                <h3 class="text-center">NEW RELEASE</div>
                            </div>
                            <div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                        <h6 class="date">2020.11.27</small>
                                    </div>
                                    <div class="col-md-8">
                                        <h5>13th Single「Daydream」</h5>
                                        <p>01.Daydream</p>
                                        <p class="text">夢や人生観を描いたまさにコロナ禍の"今"に響くような歌詞、エモーショナルなミディアムロックチューン。</p>
                                        <img src={{ asset('images/single_image13.jpg') }} class="image" width="50%">
                                    </div>
                                </div>
                                <br>
                                <div class="more">
                                    <a href="{{ url('/music') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                                </div>
                            </div>
                        </div>
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
                <div class="col-md-9">
                        <div class="row">
                            <div>
                                <h3 class="text-center">PORTFOLIO</div>
                            </div>
                            <div>
                                <hr>
                                <h5 class="text-center">NIPPO</span></h4>
                                <div class="text-center">
                                    <a href="http://54.249.81.67/" target="_blank"> <img src={{ asset('images/works_image1.png') }} class="image" width="100%"></a>
                                </div>
                                <br>
                                <br>
                                    <h5 class="text-center">TRAVEL×YOU</h4>
                                <div class="text-center">
                                    <a href="http://18.179.42.2/" target="_blank"> <img src={{ asset('images/works_image2.jpg') }} class="image" width="100%"></a>
                                </div>
                                <br>
                                <br>
                                <div class="more">
                                    <a href="{{ url('/works') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
   

