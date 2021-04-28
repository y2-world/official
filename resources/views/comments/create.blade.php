@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-4"></div>
                <div class="form">
                    <h2>y2_radio</h2>
                        <div class="element js-fadein">
                            <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <h5 class="form_subtitle">質問・感想フォーム</h5>
                                        <p class="text">
                                        y2_radioでは感想・質問を募集しております！<br>
                                        いただいた感想・質問をご紹介、お答えするかもしれません！<br>
                                        </p>
                                        ラジオネーム
                                    <input type="text" class="form-control" name="name">
                                    <br>
                                    <input type="radio" value="【質問】" name="type">
                                    <label for="質問">質問</label>
                                    <input type="radio" value="【感想】" name="type">
                                    <label for="感想">感想</label>
                                    <textarea class="form-control" rows="4" name="comment"></textarea>
                                </div>  
                                <br>
                                <button type="submit" class="btn btn-outline-primary btn-sm" value="upload">送信</button>
                                <a href="{{ url('/radio') }}"><input type="button" class="btn btn-outline-dark btn-sm" value="BACK"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection