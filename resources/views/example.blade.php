<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Blade Template</h1>


    {!!"<h3>HI<h3>"!!}

    {{ "hello" }}

    <br>

    {{5+7}}
    

    @php
    $user = "yahoo baba";
    $name = ["mim","dim"];
    @endphp
    {{$user}}
    <ul>
     @foreach ($name as $item)

        {{-- <li>{{$loop->iteration}}-{{$item}}</li> --}}
         @if($loop->first)
         <li style="color:red";>{{$item}}</li>
         @else
         <li>{{ $item }}</li>
         @endif





    @endforeach     
    </ul>
  



    {{-- <!-- @for($i=0;$i<10;$i++){

    }
    @endfor --> --}}

    <!-- javascript o amra ayvabe lekha thake -->

 {{-- {!!"<script>alert('yahoo baba')</script>"!!} --}}

</body>
</html>