@foreach ($recipes as $recipe)
            
                    <h2>aa<a href="{{route('recipe.show',['id'=>$recipe->id])}}">{{ $recipe->name }}</a></h2>
                    <p>{{$recipe->id}}</p>
                    <p >{{ $recipe->user->name }}&hellip;</p>
                    <footer><a  href="{{route('recipe.show',['id'=>$recipe->id])}}">Read More &raquo;</a></footer>
                

            @endforeach