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
                                    <div class="date">2021.04.21</div>
                                </div>
                                <div class="col-md-8">
                                    Radioページ開設！<br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="date">2021.02.25</div>
                                </div>
                                <div class="col-md-9">
                                    Yuki Yoshida Official Podcast "y2_radio" 開設！<br>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="date">2021.02.18</div>
                                </div>
                                <div class="col-md-9">
                                    Yuki Yoshida Official Qiita 開設！<br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="date">2021.02.07</div>
                                </div>
                                <div class="col-md-9">
                                    Yuki Yoshida Official Website 開設！
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
                                    <br>
                                    <br>
                                    <h5>Listen on</h5>
                                    <a href="https://music.apple.com/jp/artist/yuki-yoshida/1448865361?itsct=music_box_appicon&amp;itscg=30200&amp;ct=artists_yuki_yoshida&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 83px; height: 83px;"><img src="https://tools.applemediaservices.com/api/badges/app-icon-music/black/ja-jp?size=83x83&h=0a838719f3ceafcc1789bf314878cabd" alt="App Icon Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 50px; height: 50px;"></a>
                                    <a href="https://open.spotify.com/artist/5x6TjqB9xXXjY4Xn5y2oJm?si=9VNxfjcYQAKBiN3Q9q_lgg"><img src={{ asset('images/Spotify_Icon_RGB_Black.eps') }} class="image" width="10%"></a>
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
                        <a href="{{ url('/works') }}"><button type="button" class="btn btn-outline-dark">MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
   

