
                <img src="/storage/{{$recipe->image}}" alt="">
                    <h3>{{$recipe->name}}</h3>
                    <p>{{$recipe->description}}</p>
                    <p>{{$recipe->ingredients}}</p>
                    <p>{{$recipe->instructions}}</p>
                    <h2>Comments</h2>
                    @foreach ($recipe->comments as $comment)
            <b>{{$comment->user->name}}</b>
            <p>{{$comment->text}}</p>
            @if(Auth::user() != null && Auth::user()->isAdmin())
            <form action="{{route('comment.delete')}}" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="comment_id" value="{{$comment->id}}">
            

            <input type="submit" value='Delete'>
            </form>
            @endif
            
            @endforeach


            @if(Auth::user() != null)
        

        <div>
           
            <form action="{{route('comment.create')}}" method="POST">
                @csrf
                <input type="hidden" name="recipe_id" value="{{$recipe->id}}">
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <label for="Lcomment"></label>
                <textarea name="Lcomment" id="comment" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>
        @endif
                    