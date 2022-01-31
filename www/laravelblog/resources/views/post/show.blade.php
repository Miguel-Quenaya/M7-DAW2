@extends('common.mainlayout')
@section('title')
<title>post</title>
@endsection
@section('content')

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <article class="group">
            <div class="article_image">
                <img src="{{asset ('images/demo/IMG-20210806-WA0000.jpg')}}">
            </div>
            <div class="group btmspace-80">

                <div>
                    
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                    <p class="btmspace-30">Author: {{$post->user->name}}</p>
                    <footer><a class="btn" href="#">Volver&raquo;</a></footer>
                </div>
            </div>



        </article>

        <div>
            @foreach ($post->comments as $comment)
            <b>{{$comment->user->name}}</b>
            <p>{{$comment->comment}}</p>

            @if(Auth::user() != null && Auth::user()->isAdmin())
            <form action="{{route('comment.delete')}}" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="comment_id" value="{{$comment->id}}">
            

            <input type="submit" value='Delete'>
            </form>
            @endif
            @endforeach
        </div>

        @if(Auth::user() != null)
        

        <div>
           
            <form action="{{route('comment.create')}}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <label for="Lcomment"></label>
                <textarea name="Lcomment" id="comment" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
        @endif
    </main>
</div>

@endsection