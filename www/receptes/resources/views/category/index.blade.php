



        
            @foreach ($categories as $category)
            
                
            

                            <h3 >{{ $category->nom}}</h3>
                            <a  href="{{route('category.show',['id'=>$category->id])}}">EXPLORAR</a></li>

                        
            @endforeach


            



