@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center my-4">Stanica s ID: {{ $stanica_id }}</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Teplota C*</th>
                            <th scope="col">Vlhkost %</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datum)
                        <tr class="table-info">
                            <td>{{ $datum->temperature }}</td>
                            <td>{{ $datum->humidity }}</td>
                        </tr>
                        @endforeach
                        <tr class="table-danger">
                            <td>Priemer Teplota C*: {{ $priemerTeplota }}</td>
                            <td>Priemer Vlhkost %: {{ $priemerVlhkost }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection