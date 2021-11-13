@extends('common.mainlayout')
@section('title')
<title>posts</title>
@endsection
@section('content')

<div class="wrapper bgded overlay" style="background-image:url('images/demo/{{ $category->id}}.jpg');">
                <div id="pageintro" class="hoc clear">
                    <!-- ################################################################################################ -->
                    <article>
                        <div>

                            <h2 class="heading">{{ $category->title}}</h2>

                        </div>
                        <footer>
                            <ul class="nospace inline pushright">
                                <li><a class="btn inverse" href="#">Ullamcorper</a></li>
                                <li><a class="btn" href="{{route('category.show',['id'=>$category->id])}}">EXPLORAR</a></li>
                            </ul>
                        </footer>
                    </article>
                    <!-- ################################################################################################ -->
                </div>
            </div>

<div class="wrapper row3">
    <main class="hoc container clear">

        <article class="group">
            @foreach ($category->posts as $post)
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
            
        </article>

        <div class="clear"></div>
    </main>
</div>

@endsection