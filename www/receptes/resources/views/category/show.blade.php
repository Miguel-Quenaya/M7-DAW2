



                            <h2 class="heading">{{ $category->nom}}</h2>

                        


            @foreach ($category->recipes as $recipe)
            
                    <h2><a href="{{route('recipe.show',['id'=>$recipe->id])}}">{{ $recipe->name }}</a></h2>
                    <p>{{$recipe->id}}</p>
                    
                

            @endforeach
     

