@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <title>Pridanie stanice</title>

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
    <form method="post" action="{{route('station.store')}}" class="form-group">
        @csrf
        <h1>Pridať novú stanicu</h1>
        <div class="form-group">
            <input type="text" name="name" placeholder="Meno Stanice" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="description" placeholder="Poznamka" class="form-control"> 
        </div>
        <div class="form-group">
            <input type="text" name="api_link" placeholder="Odkaz na stanicu" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="password" placeholder="UserID" value="{{$userid}}" class="form-control" disabled>
        </div>
        <input type="submit" value="uloz" class="btn btn-primary" id="formBtn">
    </form>
    
</body>

</html>
@endsection