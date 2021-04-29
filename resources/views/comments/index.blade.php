@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
    <div class="container">  
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>y2_radio</h2> 
                <h5 class="form_subtitle">質問・感想</h5>
                <div class="element js-fadein">
                    @foreach ($comments as $comment)
                    <li class="list-group-item">
                        {{$comment->created_at}}<br>
                        ラジオネーム : {{ $comment->name }}<br>
                        {{ $comment->type }}<br>
                        コメント : {{ $comment->comment }}
                    </li>
                    @endforeach
                    <br>
                    <a href="{{ url('/radio') }}"><input type="button" class="btn btn-outline-dark btn-sm" value="BACK"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
