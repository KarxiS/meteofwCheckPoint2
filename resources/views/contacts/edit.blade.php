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
   

    <form method="post" action="{{route('contact.update', ['contact' => $contact])}}" class="form-group">
        @csrf
        @method('put')
        <h1>Upraviť stanicu {{$contact->id}} {{$contact->name}} </h1>
        <div class="form-group">
            <input type="text" name="name" placeholder="Meno zaujemcu" value="{{$contact->name}}" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email" value="{{$contact->description}}" class="form-control"> 
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Tel cislo" value="{{$contact->api_link}}" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="text" placeholder="Text" value="{{$contact->password}}" class="form-control">
        </div>
        <input type="submit" value="uloz" class="btn btn-primary" id="formBtn">
    </form>


    
</body>

</html>
@endsection