<html>
    <body>
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <label for="fname">name:</label><br>
        <input type="text" id="fname" name="name" ><br>
        <label for="femail">email:</label><br>
        <input type="text" id="femail" name="email" ><br><br>
        <label for="faddress">email:</label><br>
        <input type="text" id="faddress" name="address" ><br><br>
        <input type="submit" value="Create student">
    </form>
    </body>
</html>