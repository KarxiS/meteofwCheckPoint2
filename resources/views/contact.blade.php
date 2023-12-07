@extends('layouts.app')

@section('content')

<head>
    <title>Meteostanica Kontaktný formulár</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>





    <div id="intro" class="contact-w1000 text-center background-img">
        <div></div>
        <h1 class="">Kontakt</h1>
        <div class="title ">Adresa - Kontakt - Formulár</div>
    </div>

    <div class="contact-w1000">
        <iframe class="contact-w1000 iframe-container center"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1303.4574141398443!2d18.760682058708017!3d49.20217526986237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfri%20uniza!5e0!3m2!1ssk!2ssk!4v1698174417371!5m2!1ssk!2ssk"
            height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="text-center background-img contact-w1000">
        <h3 class="text-center ">Spojme sa</h3>
        <div class="row">
            <div class="col-md-6 title">



                <div>Meteo Stanica s.r.o.</div>
                <address>
                    UNIZA, <br> 011 01 Žilina
                </address>


            </div>
            <div class="col-md-6 title ">
                <div class="contact-info">


                    <div>Kontakt</div>
                    <address>
                        <a href="callto:+421912456789">0912 456 789</a><br><a
                            href="mailto:test@test.sk">test@test.sk</a>
                    </address>

                </div>
            </div>

            <div class="col-md-6 title ">


                <div>Otváracie hodiny</div>
                <address>
                    Po-Pi: 8:00 - 16:00<br>So-Ne: 2:00 - 16:00
                </address>

            </div>

            <div class="col-md-6 title ">
                <address>
                    Po-Pi: NONSTOP<br>So-Ne: NONSTOP <br> Odpoveď do 12 hodin
                </address>

            </div>

        </div>
    </div>
    <div class="contact-w1000">
        <h6 class="">Kontaktný formulár</h6>
        <form id="contactform" method="post" novalidate="novalidate" action="#">
            <div class="form-group ">
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Meno a priezvisko *">
            </div>
            <div class="form-group ">
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="E-mail *">
            </div>
            <div class="form-group ">
                <input type="text" name="phonenumber" class="form-control" id="inputPhone" placeholder="Tel. číslo">
            </div>
            <div class="form-group ">
                <textarea name="message" class="form-control" rows="7" placeholder="Text správy"
                    id="textareaMessage"></textarea>
            </div>
            <button type="submit" id="formBtn" class=""><span>odoslať</span></button>
            <div id="resultAjax"></div>
        </form>
    </div>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Ísť na začiatok</a></p>
        <br>
        <br>
        <p class="text-center">© 2017–2023 Meteo Centrala s.r.o., Všetky práva vyhradené.</p>
    </footer>


</body>

</html>
@endsection