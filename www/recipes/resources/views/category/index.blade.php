@extends('common.mainlayout')
@section('content')



        <a href="{{route('category.create')}}">crear</a>
            @foreach ($categories as $category)
            
                
            

                            
                            

            <section id="cta" class="jumbotron text-center"style="background-image:url('/storage/images_category/{{ $category->id}}.jpg');"
            <div class="container">
                
                
                
                <a href="{{route('category.show',['id'=>$category->id])}}" class="btn btn-primary">{{ $category->nom}}</a>
                <p></p>
                <div class="tag-cloud-single"><span>{{ $category->description}}</span></div>
            </div>
        </section>
            @endforeach
            


            
@endsection


