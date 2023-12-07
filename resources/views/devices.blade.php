@extends('layouts.app')
@section('content')

<head>
    <title>Meteo Zariadenia</title>
    <link rel="stylesheet" href="{{ asset('css/zariadenia.css') }}">
</head>

<body>


    <img src="/images/multiple.jpg" class="img-fluid mx-auto d-block" alt="Responsive image">

    <h1 class="text-center">Naša ponuka zariadení</h1>
    <p class="text-center">Máme v ponuke viacero zariadení na uspokojenie vaších potrieb.</p>






    <div class="table-responsive">
        <table class="table table-striped table-hover table-w800">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Program</th>
                    <th scope="col">Popis</th>
                    <th scope="col">Cena</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td><span class=" text-primary bold">Zariadenie Easy</span>
                        <br>
                        <span class="text-secondary ">Základný program</span>
                    </td>
                    <td><span class=" text-secondary">Zariadenie obsahuje základný balíček(25 požiadaviek denne) s 3G
                            konektivitou</span>
                    </td>
                    <td><span class="price red">15€/</span>
                        <span class="price price-time">mesiac</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-primary bold">Zariadenie Medium</span> <br>
                        <span class="text-secondary">4G a trojnásobok požiadaviek</span>
                    </td>
                    <td><span class="text-secondary">Zariadenie obsahuje základný balíček+dodatočný program DVOJ (dokopy
                            75 požiadaviek denne) s 4G konektivitou</span>
                    </td>
                    <td><span class="price red">35€/</span>
                        <span class="price price-time">mesiac</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-primary bold">Zariadenie Viac</span><br>
                        <span class="text-secondary">4G a desaťnásobok požiadaviek</span>
                    </td>
                    <td><span class="text-secondary">Zariadenie obsahuje základný balíček+dodatočný program DESAŤ
                            (dokopy 275 požiadaviek denne) s 4G konektivitou</span>
                    </td>
                    <td><span class="price red">51€/</span>
                        <span class="price price-time">mesiac</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-primary bold">Zariadenie Ultra+</span>
                        <br>
                        <span class="text-secondary">5G + nekončený počet požiadaviek</span>
                    </td>
                    <td><span class="text-secondary">Zariadenie obsahuje základný balíček+dodatočný program
                            NEKONEČNO(dokopy nekonečno požiadaviek denne) s 5G konektivitou</span>
                    </td>
                    <td><span class="price red">71€/</span>
                        <span class="price price-time">mesiac</span>
                    </td>
                </tr>

            </tbody>

        </table>
    </div>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Ísť na začiatok</a></p>
        <br>
        <br>
        <p class="text-center">© 2017–2023 Meteo Centrala s.r.o., Všetky práva vyhradené.</p>
    </footer>

    @endsection