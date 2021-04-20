@extends('layouts.app')
@section('content')
<div class="container">
    <h2>y2_radio</h2>   
        <div class="row">
            <div class="col-md-6">
                週1回不定期で更新！<br>
                音楽、英語、旅行、プログラミングなどなど何でも語っちゃいます！！<br>
                <iframe allow="autoplay *; encrypted-media *; fullscreen *" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.podcasts.apple.com/us/podcast/y2-radio/id1555086566"></iframe>
            </div>
            <div class="col-md-6">
                <hr>
                最新話<br>
                #011 (2021.04.18 更新)
                <h5>ブラックSESで嫌だったことBEST 3</h5>
                <hr>
                他のプラットフォームからはコチラ<br>
                <small class="news_link"><a href="https://anchor.fm/13190" target="_blank">https://anchor.fm/13190</a></small>
                <hr>
                y2_radioでは感想・質問を募集しております！<br>
                ラジオ内で感想をご紹介、質問にお答えするかもしれません！<br>
                <small class="news_link"><a href="{{ url('/radio/form') }}" target="_blank">y2_radio 感想・質問フォーム</a></small>
                <hr>
            </div>
        </div>
</div>
@endsection