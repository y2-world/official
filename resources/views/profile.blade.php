@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
        <h2>Profile</h2>
            <div class="row">
                <div class="col-md-6 my-auto">
                    <div class="prof_img">
                        <img src={{ asset('images/profile_image.jpg') }} class="image" width="80%">
                    </div>
                </div>
                <div class="col-md-5 my-auto"> 
                    <br>
                    <h2>Yuki Yoshida</h2>
                    <p>1996年09月24日 茨城県出身<p>
                    <hr>
                    <p class="profile">東京都生まれ、茨城県出身。高校在学中にJimdoのWebサービスを使い、ホームページ 「<a class="link" href="https://y2-world.jimdofree.com/" target="_blank">y2_world</a>」を作成。大学在学中にはアメリカのカリフォルニア州立大学フラトン校にて言語学を学ぶ。かねてから曲作りをしていたが、その曲たちを形にしたいと留学中に本格的に音楽活動を開始。帰国後、昔からWeb制作に興味があり、留学中にComputer Scienceという学問に励んでいた親友のドイツ人留学生に感銘を受け、就職活動ではIT業界に進むことを決意。新卒でSES企業に入社するも、コロナウイルスの影響で休業が続く。その間、自身のスキルを磨くためにプログラミング学習を開始。スクール在学中には、毎日のプログラミング学習を記録できる「NIPPO」、旅の記録をシェアできる「TRAVEL×YOU」のWebサービスを開始する。</p>
                    <hr>
                    <h5>スキル</h5>
                    <p class="profile">HTML, CSS, Java Script, PHP, Laravel, Bootstrap, AWS </p>
                </div>
            </div>
                <hr>
                <div class="hour"> TOTAL INPUT TIME : 346 HOURS </div>
                <a href="https://twitter.com/y2_engineer2?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @y2_engineer2</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        

@endsection