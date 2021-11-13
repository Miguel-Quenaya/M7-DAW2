<html>
    <body>
        <h2>EDITAR</h2>
    <form action="{{route('students.update',['student' => $student])}}" method="POST">
        @csrf
        @method('PUT')
        <!--<input type="hidden" name="_method" value="PUT">-->
        <label for="fname">name:</label><br>
        <input type="text" id="fname" name="name" value='{{$student->name}}'><br>
        <label for="femail">email:</label><br>
        <input type="text" id="femail" name="email" value='{{$student->email}}' ><br><br>
        <label for="faddress">email:</label><br>
        <input type="text" id="faddress" name="address" value='{{$student->address}}'><br><br>
        <input type="submit" value="Update student">
    </form>
    </body>
</html>