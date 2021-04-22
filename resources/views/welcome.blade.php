@extends('layouts.app')
@section('content')
<img src={{ asset('images/mobile_image.jpg') }} width="100%">

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
                                <div class="col-md-3">
                                    <h6 class="date">2021.04.21</small>
                                </div>
                                <div class="col-md-8">
                                    <h5>Radioページ開設！</h5><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="date">2021.02.25</small>
                                </div>
                                <div class="col-md-9">
                                    <h5>Yuki Yoshida Official Podcast "y2_radio" 開設！</h5><br>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="date">2021.02.18</small>
                                </div>
                                <div class="col-md-9">
                                    <h5>Yuki Yoshida Official Qiita 開設！</h5><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="date">2021.02.07</small>
                                </div>
                                <div class="col-md-9">
                                    <h5>Yuki Yoshida Official Website 開設！</h5>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="more">
                                <a href="{{ url('/news') }}" button type="button" class="btn btn-outline-dark">MORE</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                <div class="col-md-4">
                                    <h6 class="date">2020.11.27</small>
                                </div>
                                <div class="col-md-8">
                                    <h5>13th Single「Daydream」</h5>
                                    <p>01.Daydream</p>
                                    <img src={{ asset('images/single_image13.jpg') }} class="image" width="50%">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="more">
                                <a href="{{ url('/music') }}" button type="button" class="btn btn-outline-dark">MORE</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">PORTFOLIO</div>
                </div>
                <div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>NIPPO</span></h4>
                            <a href="http://54.249.81.67/" target="_blank"> <img src={{ asset('images/works_image1.png') }} class="image" width="100%"></a>
                            <br>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <h4>TRAVEL×YOU</h4>
                            <a href="http://18.179.42.2/" target="_blank"> <img src={{ asset('images/works_image2.jpg') }} class="image" width="100%"></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="more">
                        <a href="{{ url('/works') }}" button type="button" class="btn btn-outline-dark">MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
   

