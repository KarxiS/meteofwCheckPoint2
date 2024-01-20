@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/contactsDropDown.js') }}"></script>
    
    
</head>

<body>

    <div>
        @if(session()->has('OK'))
            <div class="alert alert-success">{{session('OK')}}
            </div>
        @endif
        @if(session()->has('Error'))
            <div class="alert alert-danger">{{session('Error')}}
            </div>
        @endif
    </div>
   
    <h1>Kontaktne formulare</h1>
      
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Meno</th>
                    <th>Email</th>
                    <th>Tel cislo</th>
                    <th>Text</th>
                    <th>Stav</th>
                    <th>Vymaz</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->text }}</td>
                        <td>
                            <select class="statusContact" data-id="{{ $contact->id }}">
                                <option value="0" {{ $contact->status == 0 ? 'selected' : '' }}>Nove</option>
                                <option value="1" {{ $contact->status == 1 ? 'selected' : '' }}>Vyriesene</option>
                            </select>
                        </td>

                        <td>
                            <form method="POST" action="{{route('contact.delete', ['contact' => $contact])}}">
                                @csrf
                                @method('delete')
                                <button type="submit">Vymaz</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>

</html>
@endsection