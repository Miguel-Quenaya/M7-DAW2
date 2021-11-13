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
        <div class="comment-section">
            <h1 class="comment-reply-title">Write your comment!</h1>
            <form id="commentform" class="comment-form">
                <div class="comment-form-name">
                    <input id="name" placeholder="Name *" name="name" type="text" value="" pattern="^[^0-9]+$" size="30" maxlength="245" required>
                    <label for="name" data-help="¿Are you 11 from Stranger Things?">Name</label>
                </div>
                <div class="comment-form-surname">
                    <input id="surname" placeholder="Surname *" name="surname" type="text" value="" size="30" maxlength="245" required>
                    <label for="surname" data-help="A girl has no name- Arya Stark">Surname</label>
                </div>
                <div class="comment-form-email">
                    <input id="email" placeholder="Email *" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required>
                    <label for="email" data-help="Format email@email.com">Email</label>
                </div>
                <div class="comment-form-url">
                    <input id="url" placeholder="Website" name="url" type="url" value="" size="30" maxlength="200">
                    <label for="url" data-help="Should start with http:// o https://">Website</label>
                </div>
                <div class="comment-form-comment">
                    <textarea textarea="" placeholder="Comment *" id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea>
                    <label for="comment" data-help="Escribe algo! Lo primero que se te ocurra">Comment</label>
                </div>
                <div class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                </div>
            </form>
        </div>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>

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