@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridanie stanice</title>
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/validaciaStanicaEdit.js') }}" ></script>
    
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
    <form method="post" action="{{route('station.store')}}" class="form-group" id="myForm">
        @csrf
        <h1>Pridať novú stanicu</h1>
        <div class="form-group">
            <label>Meno stanice</label>
            <input type="text" id="name" name="name" placeholder="Meno Stanice" class="form-control">
        </div>
        <div class="form-group">
            <label>Poznamka</label>
            <input type="text" id="description"  name="description" placeholder="Poznamka" class="form-control"> 
        </div>
        <div class="form-group">
            <label>API s heslom</label>
            <input type="text" id="api_link" name="api_link" placeholder="Odkaz na stanicu" class="form-control">
        </div>
        <div class="form-group">
            <label>userId</label>
            <input type="text" name="password" placeholder="UserID" value="{{$userid}}" class="form-control" disabled>
        </div>
        <input type="submit" value="uloz" class="btn btn-primary" id="formBtn">
    </form>
    
</body>

</html>
@endsection