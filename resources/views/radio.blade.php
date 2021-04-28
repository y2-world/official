@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
    <div class="container">  
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>y2_radio</h2> 
                <div class="element js-fadein">
                    <p class="text">
                        週1回不定期で更新！<br>
                        音楽、英語、旅行、プログラミングなどなど何でも語っちゃいます！！<br>
                    </p>
                    <a href="{{ url('/radio/form') }}"><input type="button" class="btn btn-outline-dark btn-sm" value="感想・質問フォーム"></a>
                    <br>
                    <br>
                    <iframe allow="autoplay *; encrypted-media *; fullscreen *" frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.podcasts.apple.com/us/podcast/y2-radio/id1555086566"></iframe>
                    <hr>
                    <small class="date">最新話</small><br>
                    #012 (2021.04.24 更新)
                    <h5>ここがおかしい！日本の就活</h5>
                    <hr>
                    他のプラットフォームからはコチラ<br>
                    <small class="news_link"><a href="https://anchor.fm/13190" target="_blank">https://anchor.fm/13190</a></small>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection