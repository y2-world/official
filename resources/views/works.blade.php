@extends('layouts.app')
@section('content')
<div class="mt-4"></div>

    <div class="container">
        <div class="col-md-12">
            <h2>Works</h2>
            <div class="element js-fadein">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <a href="http://54.249.81.67/" target="_blank"> <img src={{ asset('images/works_image1.png') }} class="image" width="100%"></a>
                                <br>
                                <br>
                                <a class="link" href="http://54.249.81.67/" target="_blank"><h5>NIPPO</h5></a>
                                <hr>
                                <h6 class>プログラミング学習を毎日記録</h6>
                                <p class="text">誰もが投稿しやすく、<br>
                                勉強した内容や時間を見やすく、<br>
                                仲間とともに勉強を続けられる環境を作っていきます。 
                                <br>
                                <br>
                                使用言語 : PHP / Laravel<br>
                                データベース : MySQL<br>
                                サーバー : AWS
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <a href="http://18.179.42.2/" target="_blank"> <img src={{ asset('images/works_image2.jpg') }} class="image" width="100%"></a>
                                <br>
                                <br>
                                <a class="link" href="http://18.179.42.2/" target="_blank"><h5>TRAVEL×YOU</h5></a>
                                <hr>
                                <h6 class>旅とあなたをつなぐプラットフォーム</h6>
                                <p class="text"><spam>今までのあなたの旅の歴史を記録し、
                                さらにこれからのあなたの旅をより楽しいものにするツールです。</span><br>
                                旅行記を作ったり、</span>
                                旅行先でのトラブルをシェアしたり、</sapn>
                                疑問に思ったことを質問したり...</span> <br>
                                楽しみ方は何通りもあります。</span>
                                さぁ、一緒に旅に出かけましょう！
                                <br>
                                <br>
                                使用言語 : PHP / Laravel / Java Script<br>
                                データベース : MySQL<br>
                                サーバー : AWS
                                </p>
                                </p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection