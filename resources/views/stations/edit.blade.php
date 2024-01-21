@extends('layouts.app')

    @section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridanie stanice</title>
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
</head>

<body>
   
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
   

    <form method="post" action="{{route('station.update', ['station' => $station])}}" class="form-group">
        @csrf
        @method('put')
        <h1>Upraviť stanicu {{$station->id}} {{$station->name}} </h1>
        <div class="form-group">
            <label>Meno stanice</label>
            <input type="text" name="name" placeholder="Meno Stanice" value="{{$station->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Poznamka</label>
            <input type="text" name="description" placeholder="Poznamka" value="{{$station->description}}" class="form-control"> 
        </div>
        <div class="form-group">
            <label>API s heslom</label>
            <input type="text" name="api_link" placeholder="Odkaz na stanicu" value="{{$station->api_link}}" class="form-control">
        </div>
        <div class="form-group">
            <label>userID</label>
            <input type="text" name="password" placeholder="UserID" value="{{$station->user_id}}" class="form-control" disabled>
        </div>
        <input type="submit" value="uloz" class="btn btn-primary" id="formBtn">
    </form>


    
</body>

</html>
@endsection