<ul style="displau:flex;flex-direction:wrap;">
    @foreach ($campeones as $campeon)
        <ul style="display:inline">

            <h3>{{$campeon -> idchampion}}</h3>
            <li><a href=""><img src="{{$campeon -> image_full}}" alt=""></a></li>
            <li>{{$campeon -> title}}</li>
        </ul>
    @endforeach
</ul>