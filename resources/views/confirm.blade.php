@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
    <div class="container">  
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>y2_radio</h2> 
                <div class="element js-fadein">
                    コメントありがとうございます！<br>
                    今後もy2_radioをよろしくお願いします！<br>
                    <br>
                    <a href="{{ url('/radio') }}"><input type="button" class="btn btn-outline-dark btn-sm" value="BACK"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection