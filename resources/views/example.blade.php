<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>
<body>

<h1 id="heading">Blade Template</h1>


    {!!"<h3>HI<h3>"!!}

    {{ "hello" }}

    <br>

    {{5+7}}
    

    @php
    $user = "yahoo baba";
    $name = ["mim","dim","jim","vim"];
    @endphp
    {{$user}}
    <ul>
     @foreach ($name as $item)

        {{-- <li>{{$loop->iteration}}-{{$item}}</li> --}}
         {{-- @if($loop->first)
         <li style="color:red";>{{$item}}</li>
         @else
         <li>{{ $item }}</li>
         @endif --}}

           @if($loop->even)
         <li style="color:red";>{{$item}}</li>
          @elseif($loop->odd)
         <li style="color:rgb(19, 177, 19)";>{{$item}}</li>
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

<p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique veniam magni vel corrupti obcaecati nemo voluptas tenetur commodi ipsam sed esse, itaque placeat. Sunt nemo est earum accusamus doloremque maxime.</p>










</body>
</html>