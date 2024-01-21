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
    <script src="{{ asset('js/sendEmail2.js') }}"></script>
    
    
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
                    <th>Posli mail</th>
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
                            @can('contact-edit')
                            <select class="statusContact" id="{{ $contact->id }}" data-id="{{ $contact->id }}">
                                <option value="0" {{ $contact->status == 0 ? 'selected' : '' }}>Nove</option>
                                <option value="1" {{ $contact->status == 1 ? 'selected' : '' }}>Vyriesene</option>
                            </select>
                            @else
                            <select class="statusContact" id="{{ $contact->id }}" data-id="{{ $contact->id }}" disabled>
                                <option value="{{ $contact->status == 0}}" {{ $contact->status == 0 ? 'selected' : '' }}>Nove</option>
                
                            </select>
                        @endcan
                        </td>
                      
                        
                            
                        
                        <td>
                            @can('contact-delete')
                           
                                <form method="POST" action="{{route('contact.delete', ['contact' => $contact])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Vymaz</button>
                                </form>
                                @else
                                <button class="btn btn-danger" type="submit" disabled>Vymaz</button>
                            @endcan
                        </td>
                        
                            <td>
                                @can('mail-send')
                                <button type="button" contact_id="{{ $contact->id }}"  class="emailSend btn btn-primary"  data-toggle="button" aria-pressed="false" autocomplete="off" data-contact-id="{{ $contact->id }}">Poslat email</button>
                                <div class="emailFormContainer" data-contact-id="{{ $contact->id }}" style="display: none;">
                                    <div class="alert alert-info d-inline-block" role="alert" >TEXT DO EMAILU</div><br>
                                    <input type="text" id="text1" data-contact-id="{{ $contact->id}}"  placeholder="Vas text pre zaujemcu"><br>
                                    <button type="button"   data-status="{{ $contact->status}}" contact_id="{{ $contact->id }}" class="sendEmailButton btn btn-primary" aria-pressed="false" autocomplete="off" data-contact-id="{{ $contact->id }}">Poslat email</button>
                                </div>
                                @else
                                <button type="button" contact_id="{{ $contact->id }}"  class="emailSend btn btn-primary"  data-toggle="button" aria-pressed="false" autocomplete="off" data-contact-id="{{ $contact->id }} " disabled>Poslat email</button>
                                @endcan

                            </td>
                            
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>

</html>
@endsection