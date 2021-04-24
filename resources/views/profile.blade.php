@extends('layouts.app')
@section('content')
<div class="mt-4"></div>

<div class="element js-fadein">
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
                        <p class="profile">東京都生まれ、茨城県出身。高校在学中にJimdoのWebサービスを使い、ホームページ 「<a class="link" href="https://y2-world.jimdofree.com/" target="_blank">y2_world</a>」を作成。大学在学中にはアメリカのカリフォルニア州立大学フラトン校にて言語学を学ぶ。かねてから曲作りをしていたが、その曲たちを形にしたいと思い、留学中に本格的に音楽活動を開始。帰国後、昔からWeb制作に興味があり、留学中にComputer Scienceという学問に励んでいた親友のドイツ人留学生から感銘を受けたこともあり、就職活動ではIT業界に進むことを決意。新卒でSES企業に入社するも、コロナウイルスの影響で休業が続く。その間、自身のスキルを磨くためにプログラミング学習を開始。スクール在学中には、毎日のプログラミング学習を記録できる「<a class="link" href="{{ url('http://54.249.81.67/') }}" target="_blank">NIPPO</a>」、旅の記録と旅先でのトラブルをシェアできる「<a class="link" href="{{ url('http://18.179.42.2/') }}" target="_blank">TRAVEL×YOU</a>」というWebアプリを開発する。IT×英語を武器にグローバルに活躍することを目標に毎日自己研鑽に励んでいる。</p>
                        <hr>
                        <p>Skills</p>
                        <p class="profile">HTML, CSS, Java Script, PHP, Laravel, Bootstrap, AWS </p>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection