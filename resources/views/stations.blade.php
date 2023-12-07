@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Station Overlay</title>
</head>

<body>
    <div class="table-responsive-sm">
        <table class="table">
            <tr class="table-active">Test</tr>

            <tr class="table-primary">..Test.</tr>
            <tr class="table-secondary">.Test..</tr>
            <tr class="table-success">..Test.</tr>
            <tr class="table-danger">..Test.</tr>
            <tr class="table-warning">Test...</tr>
            <tr class="table-info">..Test.</tr>
            <tr class="table-light">Test...</tr>
            <tr class="table-dark">...Test</tr>

            <!-- On cells (`td` or `th`) -->
            <tr>
                <td class="table-active">...</td>

                <td class="table-primary">...</td>
                <td class="table-secondary">...</td>
                <td class="table-success">...</td>
                <td class="table-danger">...</td>
                <td class="table-warning">...</td>
                <td class="table-info">...</td>
                <td class="table-light">...</td>
                <td class="table-dark">...</td>
            </tr>
        </table>
    </div>
</body>

</html>
@endsection