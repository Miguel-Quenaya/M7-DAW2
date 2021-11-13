<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body>
        <table>
@foreach ($students as $student)
    <tr>
        <td><a href="{{route('students.show',['student'=>$student])}}">{{ $student->name }}</a></td>
        <td>
            <a id='editar'href="{{route('students.edit',['student'=>$student])}}"><button id='editar'>Edit</button></a>
        </td>
        <td>
            <form action="{{route('students.show',['student'=>$student])}}" method="POST">
                @csrf
                @METHOD('DELETE')
                <button id="eliminar" type="submit" value="delete">eliminar</button>
            </form>
        </td>
</tr>
@endforeach
</table>
    </body>
</html>