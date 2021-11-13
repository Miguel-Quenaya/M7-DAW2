@extends('common.mainlayout')
@section('title')
<title>posts</title>
@endsection
@section('content')



        
            @foreach ($categories as $category)
                
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
            @endforeach


            



@endsection