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
        <h3 class="single-header">Album</h3>
        <div class="single-wrapper">
            <div class="single">
                <img src={{ asset('images/album_image4.jpg') }} class="album-image">
                <div class="topic">BIRTH</div>
                <p class="text">4th Album<br>2019.09.24</p>
            </div>
            
            <div class="single">
                <img src={{ asset('images/album_image3.jpg') }} class="album-image">
                <div class="topic">My World</div>
                <p class="text">3rd Album<br>2018.08.01</p>
            </div>
            
            <div class="single">
                <img src={{ asset('images/album_image2.jpg') }} class="album-image">
                <div class="topic">Second Life</div>
                <p class="text">2nd Album<br>2018.03.19</p>
            </div>

            <div class="single">
                <img src={{ asset('images/album_image1.jpg') }} class="album-image">
                <div class="topic">First Records</div>
                <p class="text">1st Album<br>2018.02.26</p>
            </div>
        </div>
    </div>
</div>
@endsection