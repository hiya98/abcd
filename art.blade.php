@extends('article')
@section('content')


    <h1>NatureZone
    </h1>

    <body>
    <a href="{{ URL('http://127.0.0.1:8000/view') }}"><strong>1.View article</strong></a>
    <a href="{{ URL('http://127.0.0.1:8000/edit') }}"><strong><br>2.Add Article<br></strong></a>
    <img src="https://www.w3schools.com/images/picture.jpg" alt="Mountain" style="width:400px">
    </body>

@endsection
