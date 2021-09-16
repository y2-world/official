@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
<div class="container">
    <h2>Music</h2>
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Discography
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/music/single') }}">Single</a>
                <a class="dropdown-item" href="{{ url('/music/album') }}">Album</a>
            </div><!-- /.dropdown-menu -->
        </div><!-- /.btn-group -->
</div>
<div class="element js-fadein">
    <div class="container">
        <h3 class="single-header">Single</h3>
        <div class="single-wrapper">
            <div class="single">
                <img src={{ asset('images/single_image13.jpg') }} class="single-image">
                <div class="topic">Daydream</div>
                <p class="text">13th Single<br>2020.11.27</p>
            </div>
            
            <div class="single">
                <img src={{ asset('images/single_image12.jpg') }} class="single-image">
                <div class="topic">Sunshine</div>
                <p class="text">12th Single<br>2020.07.23</p>
            </div>
            
            <div class="single">
                <img src={{ asset('images/single_image11.jpg') }} class="single-image">
                <div class="topic">Highlight</div>
                <p class="text">11th Single<br>2020.05.05</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image10.jpg') }} class="single-image">
                <div class="topic">Merry Christmas</div>
                <p class="text">10th Single<br>2019.12.24</p>
            </div>
           
            <div class="single">
                <img src={{ asset('images/single_image9.jpg') }} class="single-image">
                <div class="topic">Happy Birthday</div>
                <p class="text">9th Single<br>2019.09.15</p>
            </div>
            
            <div class="single">
                <img src={{ asset('images/single_image8.jpg') }} class="single-image">
                <div class="topic">Next to you</div>
                <p class="text">8th Single<br>2019.08.14</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image7.jpg') }} class="single-image">
                <div class="topic">Waitin' for you</div>
                <p class="text">7th Single<br>2019.07.16</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image6.jpg') }} class="single-image">
                <div class="topic">春風</div>
                <p class="text">6th Single<br>2019.01.26</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image_special2.jpg') }} class="single-image">
                <div class="topic">今年最後のLove Song</div>
                <p class="text">Special Single<br>2018.11.04</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image5.jpg') }} class="single-image">
                <div class="topic">Clover</div>
                <p class="text">5th Single<br>2018.04.04</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image4.jpg') }} class="single-image">
                <div class="topic">星空のセレナーデ</div>
                <p class="text">4th Single<br>2018.03.06</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image3.jpg') }} class="single-image">
                <div class="topic">Umbrella</div>
                <p class="text">3rd Single<br>2018.02.11</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image2.jpg') }} class="single-image">
                <div class="topic">process</div>
                <p class="text">2nd Single<br>2018.02.10</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image_special1.jpg') }} class="single-image">
                <div class="topic">Gastronomeのテーマ</div>
                <p class="text">Special Single<br>2018.01.23</p>
            </div>

            <div class="single">
                <img src={{ asset('images/single_image1.jpg') }} class="single-image">
                <div class="topic">Snow White</div>
                <p class="text">1st Single<br>2017.12.04</p>
            </div>
        </div>
    </div>
</div>
@endsection