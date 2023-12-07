@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
    
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   
    <h1>Stanice</h1>
    <a href="{{route('station.create')}}">
        <button type="button" class="btn btn-primary">Pridať stanicu</button>
    </a>    
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Meno</th>
                    <th>Popis</th>
                    <th>API Link</th>
                    <th>Heslo</th>
                    <th>Pridane</th>
                    <th>Upraviť</th>
                    <th>Vymazať</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stations as $station)
                    <tr>
                        <td>{{ $station->id }}</td>
                        <td>{{ $station->name }}</td>
                        <td>{{ $station->description }}</td>
                        <td>{{ $station->api_link }}</td>
                        <td>{{ $station->password }}</td>
                        <td>{{ $station->added_at }}</td>
                        <td>
                            <a href="{{route("station.edit", ['station' => $station])}}">Uprav</a>
                        </td>

                        <td>
                            <form method="POST" action="{{route('station.delete', ['station' => $station])}}">
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