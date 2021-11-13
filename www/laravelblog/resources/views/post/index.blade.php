@extends('common.mainlayout')
@section('title')
<title>posts</title>
@endsection
@section('content')

<div class="wrapper row3">
    <main class="hoc container clear">

        <article class="group">
            @foreach ($posts as $post)
            <div class="group btmspace-80">
                <div class="one_quarter first">
                    <img src="{{asset ('images/demo/IMG-20210806-WA0000.jpg')}}">
                </div>
                <div class="three_quarter">
                    <h2><a href="{{route('post.show',['id'=>$post->id])}}">{{ $post->title }}</a></h2>
                    <p>{{$post->id}}</p>
                    <p class="btmspace-30">{{ $post->user->name }}&hellip;</p>
                    <footer><a class="btn" href="article.html">Read More &raquo;</a></footer>
                </div>
            </div>

            @endforeach
            <div>
                {{$posts->links()}}
            </div>
        </article>

        <div class="clear"></div>
    </main>
</div>


@endsection