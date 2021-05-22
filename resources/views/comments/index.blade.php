@extends('layouts.app')
@section('content')
<div class="mt-4"></div>
<div class="comments"
    <div class="container">  
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>y2_radio</h2> 
                <h5 class="form_subtitle">質問・感想</h5>
                <div class="element js-fadein">
                    @foreach ($comments as $comment)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10">
                            {{$comment->created_at}}<br>
                            ラジオネーム : {{ $comment->name }}<br>
                            {{ $comment->type }}{{ $comment->comment }}
                            </div>
                            <div class="col-md-2 my-auto">
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type='submit' value='削除' class="btn btn-outline-danger btn-sm" onclick='return confirm("削除しますか？");'>
                                </form>
                            </div>
                        </div>
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
