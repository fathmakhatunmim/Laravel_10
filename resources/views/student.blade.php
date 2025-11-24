
<form action="{{ route('student.store') }}" method="post">

    @csrf
    <input type="text" name="name" placeholder="write your name"><br>
     <input type="email" name="email" placeholder="write your email"><br>
     <button type="submit">submit</button>
</form>