<div>
           
            <form action="{{route('recipe.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" value="">
                
                <input id="file-input" name="image" type="file"/>
                <input type="text" name="description" value="">
                <input type="text" name="preptime" value="">
                <input type="text" name="ingredients" value="">
                <input type="text" name="instructions" value="">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                
                <select  name="category_id" >
                <option value="1" selected>11</option>
                @foreach ($categories as $category)
            
                
            
                <option value="{{$category->id}}">{{ $category->id}}</option>
                
        
                @endforeach
                </select>
                

                <input type="submit" value="Enviar">
            </form>

            
        </div>