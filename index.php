<?php
$nameAndSurname = '';
$tel = '';
$email = '';
$message = '';
$errorNameAndSurname = '';
$errorTel = '';
$errorEmail = '';
$errorMessage = '';

if ( isset( $_POST['send'] ) ) {
    $nameAndSurname = $_POST['nameAndSurname'];
    $tel = $_POST['tel'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    if ( ! $nameAndSurname ) {
        $errorNameAndSurname = 'Uzupełnij pole "Imię i nazwisko"';
    } elseif ($nameAndSurname&& strlen($nameAndSurname) < 5 ) {
        $errorNameAndSurname = 'Upewnij się, że pole "Imię i nazwisko" zawiera przynajmniej 5 znaków';
    }
    if ( ! $tel ) {
        $errorTel = 'Uzupełnij pole "Numer telefonu"';
    } elseif ( $tel && strlen($tel) < 9 ) {
        $errorTel = 'Upewnij się, że pole "Numer telefonu" ma prawidłowy format (9 cyfr)';
    }
	if ( ! $email ) {
		$errorEmail = 'Uzupełnij pole "Adres e-mail"';
	} elseif ( $email && ! filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		$errorEmail = 'Upewnij się, że pole "Adres e-mail" ma prawidłowy format';
	}
    if ( ! $message ) {
        $errorMessage = 'Uzupełnij pole "Wiadomość"';
    }
    /* wysylamy email */
	if ( ! $errorNameAndSurname && ! $errorTel && ! $errorEmail && ! $errorMessage ) {
		$to = 'brkoma@poczta.onet.pl';
		$subject = 'Wiadomość z formularza zgłoszeniowego ze strony internetowej';
		$mess = $_POST['message'];
		$emailSent = mail($to, $subject, $mess);
	}
}
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Świadczymy kompleksowe usługi księgowe, kadrowo-płacowe, a także zapewniamy konsultacje. Gwarantujemy dokładność i bezpieczeństwo dla Twojej firmy. Zajrzyj!">
        <meta name="keywords" content="biuro rachunkowe skierniewice, biuro rachunkowe Marat, biuro rachunkowe nowobielańska, usługi księgowe skierniewice, uslugi ksiegowe skierniewice, doradztwo podatkowe skierniewice, kadry i płace skierniewice, kadry i place skierniewice, analizy finansowe skierniewice, pełnomocnictwo biznesowe skierniewice, konsulting skierniewice">
        <meta name="author" content="MW">
        <title>Biuro Rachunkowe KOMA</title>
        <meta property='og:type' content='article' />
        <meta property='og:title' content='' />
        <meta property='og:url' content='' />
        <meta property='og:image' content='images/logoindex.jpg' />
        <meta property='og:description' content='Strona biura rachunkowego KOMA w Skierniewicach' />
        <meta property='fb:app_id' content='966242223397117' />
        <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
        <link rel="manifest" href="./manifest.json">
        <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/animate.css" type="text/css">
        <!-- Fonty -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Lato:400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <!--Nagłówek-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light py-md-8" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#" title="logo Biura Rachunkowego KOMA">
                            <div class="logo" id="home" alt="logo Biura Rachunkowego KOMA">
                                <img src="./images/LOGO_KM.png" height="90px"/>
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Rozwiń nawigację</span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="menu nav navbar-nav mx-auto">
                            <li class="nav-item px-md-2 active" title="o firmie - biuro rachunkowe KOMA">
                                <a id="link-firm" class="nav-link" href="#firm">o&nbsp;&nbsp;firmie</a>
                            </li>
                            <li class="nav-item px-md-2" title="oferta biura rachunkowego KOMA">
                                <a id="link-offer" class="nav-link" href="#offer">oferta</a>
                            </li>
                            <li class="nav-item px-md-2" title="darmowe konsultacje">
                                <a id="link-consult" class="nav-link" href="#consult">konsultacje</a>
                            </li>
                            <li class="nav-item px-md-2" title="cennik biura rachunkowego KOMA">
                                <a id="link-price" class="nav-link" href="#price">cennik</a>
                            </li>
                            <li class="nav-item px-md-2" title="kontakt z biurem rachunkowym KOMA">
                                <a id="link-contact" class="nav-link" href="#contact">kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Sekcja "główny slajder"-->
        <section class="main">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <!-- Wskaźniki -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <!-- Slajdy -->
                                <div id="carouselSlides" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="tit">Szeroki wachlarz usług rachunkowych</div>
                                                <p>Dołącz do naszych Klientów</p>
                                                <a id="l-offer" href="#"><button class="goTo">Dowiedz się więcej >></button></a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="tit">Otwierasz nową działalność?</div>
                                                <p>Zapraszamy na bezpłatne konsultacje</p>
                                                <a id="l-consult" href="#"><button class="goTo">Dowiedz się więcej >></button></a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="tit">Masz problem z rozliczeniami?</div>
                                                <p>Skontaktuj się z nami</p>
                                                <a id="l-contact" href="#"><button class="goTo">Dowiedz się więcej >></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sekcja "o firmie"-->
        <section class="firm" id="firm">
            <div class="container-fluid">
                <div class="container" data-animate="fadeInUp">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title">
                                <h1>o firmie</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid part">
                <div class="container" data-animate="fadeInUp">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title2">
                                <h2>Kadra</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <p>
                                Nasz zespół składa się z&nbsp;<strong>15 wykwalifikowanych pracowników z&nbsp;wieloletnim doświadczeniem</strong>. Dokładność, sumienność, a&nbsp;także indywidualne podejście do Klienta to zalety cechujące osoby z&nbsp;kadry naszego biura. Każdy Klient może liczyć na wsparcie na wszystkich etapach współpracy, która, mamy nadzieję, przerodzi się w&nbsp;wieloletnią relację.
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon1">
                                <img src="images/kadra.jpg" alt="kadra" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid part">
                <div class="container" data-animate="fadeInUp">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title2">
                                <h2>Doświadczenie</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon2">
                                <img src="images/doswiadczenie.jpg" alt="doświadczenie"/>
                                <!-- Źródło: <a href="https://pl.freepik.com/darmowe-zdjecie/biznesmen-wskazując-wykresy-i-symbole_985257.htm">Zaprojektowane przez Freepik</a> -->
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <p>
                                <strong>Biuro Rachunkowe KOMA</strong> istnieje na rynku <strong>od 1991&nbsp;roku</strong>. Przez <strong><span class="now"></span>&nbsp;lat</strong> naszej działalności zdobyliśmy jeszcze większe <strong>doświadczenie</strong> i&nbsp;zyskaliśmy <strong>zaufanie</strong> setek Klientów. Stale pragniemy poszerzać zasięg swojej działalności. Pomagają nam w&nbsp;tym nasi zadowoleni Klienci, którzy polecają nas kolejnym osobom. Dziękujemy!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid part">
                <div class="container" data-animate="fadeInUp">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title2">
                                <h2>Pozycja na rynku</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <p>
                                <strong>Biuro Rachunkowe KOMA</strong> to <strong>największa firma w&nbsp;Skierniewicach, oferująca kompleksowe usługi rachunkowe</strong>. Mamy bogate, wieloletnie doświadczenie w&nbsp;branży. Zawsze dopasowujemy naszą ofertę do indywidualnych potrzeb Klientów, a&nbsp;dzięki solidnej pracy zyskujemy ich zaufanie i&nbsp;budujemy trwałe relacje. <strong>Jakość świadczonych usług jest dla nas priorytetem!</strong>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon3">
                                <img src="images/pozycja.jpg" alt="ikona-pozycja na rynku"/>
                                <!-- Źródło: <a href='https://pl.freepik.com/darmowe-zdjecie/informatykow-świętuje-sukces_861073.htm'>Designed by Freepik</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid part">
                <div class="container" data-animate="fadeInUp">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title2">
                                <h2>Klienci</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon4">
                                <img src="images/klient.jpg" alt="klient"/>
                                <!-- Źródło: <a href='https://pl.freepik.com/darmowe-zdjecie/biznes-ludzie-handshake-życzeniami-deal-w-pracy_1024706.htm'>Designed by Freepik</a> -->
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <p>
                                Przez lata naszej działalności jako biuro rachunkowe zbudowaliśmy silną pozycję na lokalnym rynku. <strong>Zdobyliśmy zaufanie i&nbsp;zyskaliśmy 250 stałych Klientów z&nbsp;wielu różnych branż</strong>. Stale się rozwijamy, dlatego jesteśmy również otwarci na nowych Klientów. Dla tych, którzy dopiero planują założenie własnej działalności <strong>oferujemy dodatkowo darmowe konsultacje</strong>. Zapraszamy!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title3">
                                <h3>Nasi partnerzy</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="container" data-animate="fadeInUp">
                    <div class="row">
                        <div class='col-md-12'>
                             <div class="carousel slide media-carousel" id="media">
                               <div class="carousel-inner">
                                 <div class="carousel-item active">
                                   <div class="row">
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                   </div>
                                 </div>
                                 <div class="carousel-item">
                                   <div class="row">
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                   </div>
                                 </div>
                                 <div class="carousel-item">
                                   <div class="row">
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                     <div class="col-sm-6 col-lg-3">
                                       <img alt="" src="http://placehold.it/150x150">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sekcja "oferta"-->
        <section class="offer" id="offer">
            <div class="container-fluid">
                <div class="container">
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <div class="title">
                                <h1> oferta </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <p>
                                Oferujemy <strong>pełen wachlarz usług rachunkowych</strong>, <strong>profesjonalną pomoc</strong> w&nbsp;prowadzeniu wszelkich rozliczeń oraz zapewniamy <strong>konsultacje</strong> na każdym etapie współpracy. Decydując się na usługi naszej firmy można mieć pewność, że wszystko, co Państwo nam zlecą, zostanie zrealizowane na <strong>najwyższym poziomie</strong>.
                            </p>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="offerts">
                                <span>usługi <br/>
                                    księgowe</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="offerts">
                                <span>doradztwo </br/>
                                    podatkowe</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="offerts">
                                <span>kadry </br/>
                                    i płace</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="offerts">
                                <span>analizy </br/>
                                    finansowe</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="offerts">
                                <span>pełnomocnictwo </br/>
                                    biznesowe</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="offerts">
                                <span>konsulting</span>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <div class="title2 mobevo">
                                <h2>Platforma Mobevo</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <p>
                                Dla naszych Klientów oferujemy całkowicie <strong>za darmo</strong> dostęp do <strong>Platformy Mobevo</strong>. Zapewnia ona <strong>sprawniejszy obieg dokumentów</strong> z&nbsp;prowadzonej działalności, <strong>łatwiejszy dostęp do całego archiwum</strong>, a&nbsp;także umożliwia <strong>monitorowanie na bieżąco wszelkich rozliczeń z&nbsp;urzędami</strong>. W&nbsp;dodatku Państwa dokumenty będą <strong>całkowicie bezpieczne</strong>. Usługa ta zapewnia <strong>nieograniczoną przestrzeń dyskową</strong> i&nbsp;<strong>stabilność systemu</strong>. Zapraszamy do kontaktu, by uzyskać dostęp do <strong>Platformy Mobevo</strong>.
                            </p>
                            <p>
                                Jeśli posiadają juz Państwo dostęp do <strong>Platformy Mobevo</strong>, zapraszamy do korzystania.
                            </p>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <a href="https://koma.podatek.biz/" target="_blank">
                                <div class="platform" title="Panel użytkownika Platformy Mobevo">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sekcja "konsultacje"-->
        <section class="consult" id="consult">
            <div class="container-fluid">
                <div class="container">
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <div class="title">
                                <h1> konsultacje </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <div class="question">
                                <h2>Otwierasz nową działalność gospodarczą?<br/>
                                Oferujemy bezpłatne konsultacje!</h2>
                            </div>
                            <p>
                                Dla tych, którzy dopiero planują otworzyć nową działalność gospodarczą, oferujemy <strong>bezpłatne doradztwo i&nbsp;konsultacje</strong>. Zazwyczaj są to usługi kosztowne. Taki wydatek stanowi często duży problem dla tych, którzy dopiero zaczynają swoją przygodę z biznesem. Rozumiemy to doskonale, dlatego wychodzimy naprzeciw potrzebom takich osób. Pomożemy zarówno przy wyborze <strong>najlepszej formy opodatkowania</strong>, wesprzemy podczas <strong>procesu zakładania własnej firmy</strong> i&nbsp;<strong>przygotowywania wszelkich wniosków oraz&nbsp;dokumentów</strong> potrzebnych do wystartowania z&nbsp;nową działalnością. Z&nbsp;nami oszczędzą Państwo swój czas, a&nbsp;cała procedura nie będzie już problemem! Skorzystanie z&nbsp;naszych usług w&nbsp;tym zakresie to rozwiązanie nie tylko <strong>wygodne</strong>, ale i&nbsp;<strong>bezpieczne</strong>, gdyż pozwala na uniknięcie ewentualnych błędów, o&nbsp;które nietrudno, szczególnie podczas stawiania pierwszych kroków w&nbsp;świecie biznesu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sekcja "cennik"-->
        <section class="price" id="price">
            <div class="container-fluid">
                <div class="container">
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <div class="title">
                                <h1> cennik </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <p>
                                Ceny oferowanych usług <strong>ustalamy indywidualnie dla każdego naszego Klienta</strong>. Dostosowujemy je do sytuacji i&nbsp;szacujemy na podstawie Państwa oczekiwań, liczby dokumentów, ilości zatrudnionych w&nbsp;Państwa firmie pracowników oraz przewidywanego czasu potrzebnego do świadczenia danych usług. Zapraszamy do kontaktu, a&nbsp;wspólnie dopasujemy ofertę do Państwa potrzeb!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sekcja "kontakt"-->
        <section class="contact" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <div class="title">
                                <h1> kontakt </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-2">
                                    <div class="icon5">
                                        <img src="images/icons/godzina.png" width="50" height="50" alt="ikona-godziny otwarcia"/>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="type-data">Godziny otwarcia:</div>
                                    <div class="data"><span>pon. - pt.: 08:00 - 16:00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-2">
                                    <div class="icon7">
                                        <img src="images/icons/telefon.png" width="50" height="50" alt="ikona-telefon"/>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="type-data">Telefony:</div>
                                    <div class="data">
                                        46 833 50 47<br/>
                                        46 833 59 79<br/>
                                        501 950 076
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-2">
                                    <div class="icon6">
                                        <img src="images/icons/adres.png" width="50" height="50" alt="ikona-adres"/>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="type-data">Adres:</div>
                                    <div class="data">
                                        <address>
                                            ul. Nowobielańska 45A<br>
                                            96-100 Skierniewice
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-2">
                                    <div class="icon8">
                                        <img src="images/icons/email.png" width="50" height="50" alt="ikona-email"/>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="type-data">Adresy e-mail:</div>
                                    <div class="data">
                                        <a href="mailto:brkoma@poczta.onet.pl" title:"adres e-mail biura KOMA">brkoma@poczta.onet.pl</a><br/>
                                        <a href="mailto:michalmarat@brkoma.pl" title:"adres e-mail biura KOMA">michalmarat@brkoma.pl</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-animate="fadeInUp">
                        <div class="col-sm-12">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form">
                                <div class="title2 mobevo">
                                    <h2>Napisz do nas</h2>
                                </div>
                                <?php if ( $emailSent == 1 ) { ?>
    								<div class="message">
    									<div class="head">Wiadomość została wysłana</div>
    								</div>
    							<?php } ?>
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-12 required field">
                                        <label class="text-heading">Imię i nazwisko</label>
                                        <br/>
                                        <?php if ( $errorNameAndSurname != null ) { ?>
                                            <span class="red-label">
                                                <?php echo $errorNameAndSurname; ?>
                                            </span>
                                        <?php } ?>
                                        <input type="text" class="form-control" id='nameAndSurname' name="nameAndSurname" value="<?php echo $nameAndSurname; ?>">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 required field">
                                        <label class="text-heading">Numer telefonu</label>
                                        <br/>
                                        <?php if ( $errorTel != null ) { ?>
                                            <span class="red-label">
                                                <?php echo $errorTel; ?>
                                            </span>
                                        <?php } ?>
                                        <input type="tel" class="form-control"  id='tel' name="tel" value="<?php echo $tel; ?>">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 required field">
                                        <label class="text-heading">Adres e-mail</label>
                                        <br/>
                                        <?php if ( $errorEmail != null ) { ?>
                                            <span class="red-label">
                                                <?php echo $errorEmail; ?>
                                            </span>
                                        <?php } ?>
                                        <input type="email" class="form-control" id='email' name="email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 required field">
                                        <label class="text-heading">Wiadomość</label>
                                        <br/>
                                        <?php if ( $errorMessage != null ) { ?>
                                            <span class="red-label">
                                                <?php echo $errorMessage; ?>
                                            </span>
                                        <?php } ?>
                                        <textarea class="form-control" rows="6" id='message' name='message' value="<?php echo $message; ?>"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <button type="submit" class="btn btn-sm btn-block" id="send" name="send">Wyślij</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map"  id="map">
            </div>
        </section>

        <!--Stopka-->
        <footer>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>
                                <span>Biuro Rachunkowe KOMA</span> &copy; 2018. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a href="https://koma.podatek.biz/" target="_blank">
            <button class="panel" title="Zaloguj się do Platformy Mobevo">
            </button>
        </a>

        <a href="tel:+48468335047">
            <button class="call-me" title="Zadzwoń do nas!">
            </button>
        </a>

        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="./js/jquery.viewportchecker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5FBCpW7-58fUNEE3PtB7sFeBQaAm8lpk"></script>
        <script src="./js/jquery.scrollTo.min.js"></script>
        <script src="./js/app.js"></script>
    </body>
</html>
