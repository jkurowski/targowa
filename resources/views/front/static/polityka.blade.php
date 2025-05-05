@extends('layouts.page', ['body_class' => 'about-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Polityka prywatności</li>
                </ol>
            </nav>
        </div>
        <section class="pb-0 pt-3">
            <div class="container">
                <div class="col-12">
                    <h2 class="section-title">Polityka prywatności i bezpieczeństwa danych</h2>
                    <p>Postanowienia zawarte w niniejszej Polityce prywatności dotyczą oficjalnej strony internetowej firmy Targowa 49.</p>
                    <h2 class="section-title mt-3">Informacje o przetwarzaniu danych osobowych</h2>
                    <p>Przetwarzanie Państwa danych osobowych odbywa się zgodnie z przepisami Rozporządzenia Parlamentu Europejskiego i Rady UE 2016/679 z dnia 27 kwietnia 2016 r. (dalej zwanego RODO)  w  sprawie ochrony osób fizycznych oraz innymi powszechnie obowiązującymi przepisami prawa, w tym Prawa telekomunikacyjnego i ustawy o świadczeniu usług drogą elektroniczną.</p>
                    <h2 class="section-title mt-3">Kto jest administratorem Państwa danych?</h2>
                    <p>Administratorem Państwa danych osobowych jest firma Targowa 49 z siedzibą władz w  Łodzi  pod adresem ul. Narutowicza 7/9 lok. 429 , 90-117 Łódź. Można się z nim skontaktować:</p>
                    <ul class="mb-0">
                        <li>poprzez adres e-mail: biuro@targowa49.pl</li>
                        <li>pisemnie na adres: Targowa 49 Sp. z o.o., ul. Narutowicza 7/9 lok. 429, 90-117 Łódź</li>
                    </ul>

                    <h2 class="section-title mt-3">Jakie Państwa dane przetwarzamy?</h2>
                    <p>Jeśli wyrażą Państwo zainteresowanie, w celach kontaktowych będziemy przetwarzać Państwa podstawowe dane identyfikacyjne przekazane nam w rozmowie telefonicznej, korespondencji mailowej, osobiście lub za pomocą formularza kontaktowego umieszczonego na naszej stronie.</p>
                    <p>Jeśli skontaktują się Państwo z nami za pomocą formularza lub wysyłając do nas maila na podany na stronie adres email, będziemy przetwarzać otrzymane w ten sposób dane, czyli imię i nazwisko, adres email i/lub numer telefonu i treść Państwa wiadomości, ewentualny opis sprawy, w której się Państwo z nami kontaktują.</p>
                    <p>Podczas korzystania z naszej strony internetowej zbieramy określone informacje poprzez tzw. ciasteczka. Więcej wyjaśnień mogą Państwo znaleźć w rozdziale „Pliki cookies“.</p>
                    <h2 class="section-title mt-3">Do czego będziemy używać Państwa danych osobowych i na jakiej podstawie?</h2>
                    <p>Państwa dane osobowe będziemy przetwarzać w następującym celu - dane osobowe podane w  zapytaniu będą przetwarzane w celu udzielenia odpowiedzi na Państwa zapytanie.</p>
                    <p>Podstawą prawną przetwarzania danych osobowych jest wyrażona przez Państwa dobrowolna zgoda na przetwarzanie danych w celu udzielenia odpowiedzi na przesłane zapytanie lub akceptację stosowanych plików cookies.</p>
                    <h2 class="section-title mt-3">Czy mają Państwo obowiązek podać dane osobowe?</h2>
                    <p>Podanie danych  w formularzu kontaktowym jest dobrowolne. Należy mieć jednak na uwadze, że jeśli nie zostawią Państwo podstawowych danych – nie będziemy mogli się z Państwem skontaktować, ani udzielić odpowiedzi na zadane pytanie.</p>
                    <h2 class="section-title mt-3">Jakie przysługują Państwu prawa związane z przetwarzaniem danych?</h2>
                    <p>Na zasadach określonych w RODO (art. 15-21) mają Państwo prawo do żądania od nas jako administratora: dostępu do podanych przez Państwa  danych osobowych, ich sprostowania, usunięcia, ograniczenia przetwarzania oraz przeniesienia danych.  Mają Państwo także prawo  wniesienia sprzeciwu wobec przetwarzania.</p>
                    <p>W przypadku danych przetwarzanych na podstawie zgody mają Państwo prawo do cofnięcia zgody na przetwarzanie danych osobowych w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania, jakiego dokonano przed jej wycofaniem.</p>
                    <p>Mają Państwo także prawo do wniesienia skargi do organu nadzorczego, tj. Prezesa Urzędu Ochrony Danych Osobowych w przypadku uznania, że przetwarzanie jest niezgodne z prawem.</p>
                    <h2 class="section-title mt-3">Jak cofnąć zgodę?</h2>
                    <p>W każdej chwili mogą Państwo cofnąć każdą udzieloną zgodę w związku z przetwarzaniem danych osobowych. Wystarczy wysłać e-mail lub przesłać wiadomość pocztą tradycyjną na wskazane powyżej dane kontaktowe. Wolę cofnięcia zgody można wyrazić w dowolny sposób, jedynym warunkiem jest, aby dotarła ona do naszej wiadomości w sposób umożliwiający weryfikację Państwa tożsamości.</p>
                    <h2 class="section-title mt-3">Jak długo będziemy przechowywać Państwa dane?</h2>
                    <p>Dane przetwarzane na podstawie zgody będziemy przetwarzać do czasu wycofania przez Państwa tej zgody lub do momentu ustania celu przetwarzania.</p>
                    <h2 class="section-title mt-3">Jak nie będziemy przetwarzać danych osobowych?</h2>
                    <p>Państwa dane osobowe nie podlegają zautomatyzowanemu przetwarzaniu (np. profilowaniu), które wywołuje wobec Państwa skutki prawne lub w podobny sposób istotnie na Państwa wpływa, niemniej jednak korzystamy z plików cookies oraz innych systemów rejestrujących ruch na naszych stronach internetowych. Więcej informacji mogą Państwo znaleźć w punkcie „Pliki cookies“.</p>
                    <h2 class="section-title mt-3">Przekazywanie danych do innych odbiorców oraz do krajów trzecich</h2>
                    <p>Dane mogą być udostępnianie innym odbiorcom - wyłącznie na podstawie przepisów prawa - oraz podmiotom, które świadczą usługi na rzecz Administratora i z którymi zawarł on stosowną umowę powierzenia przetwarzania danych, np. dostawcom i serwisantom usług IT.</p>
                    <h2 class="section-title mt-3">Co do zasady nie przekazujemy danych do państw trzecich.</h2>
                    <p>Informujemy jednak, że na naszej stronie umieszczona jest wtyczka do portalu społecznościowego Facebook.</p>
                    <p>Klikając w nią zostaną Państwo przeniesieni na ten portal. Informacje na temat zasad przechowywania danych na Facebooku są dostępne pod linkiem:
                        <a href="https://pl-pl.facebook.com/privacy/explanation" target="_blank" rel="nofollow"></a></p>
                    <h2 class="section-title mt-3">Pliki cookies</h2>
                    <ol>
                        <li>Strona internetowa firmy Targowa 49 używa technologii cookies.</li>
                        <li>Cookies (tzw. ciasteczka) to niewielkie pliki tekstowe zapisywane na komputerze lub innym urządzeniu końcowym, z którego korzystają Państwo podczas przeglądania niniejszego serwisu.</li>
                        <li>Ciasteczka mogą być używane w celu:
                            <ul class="mb-0">
                                <li>dostosowania treści strony internetowej do Państwa preferencji</li>
                                <li>optymalizacji korzystania ze strony firmy Targowa 49</li>
                                <li>tworzenia anonimowych statystyk w celu zrozumienia sposobu korzystania przez użytkowników ze strony internetowej</li>
                            </ul>
                        </li>
                        <li>Pliki cookies nie służą identyfikacji Państwa danych osobowych.</li>
                        <li>Możliwość umieszczenia plików cookies na urządzeniach końcowych jest domyślnym działaniem przeglądarek internetowych. Ustawienia te mogą Państwo w każdej chwili zmienić w swojej przeglądarce*, zgodnie z właściwą dla niej procedurą.</li>
                        <li>Korzystanie z serwisu bez dokonania zmiany ustawień w przeglądarce internetowej w celu blokowania obsługi cookies** jest równoznaczne z wyrażeniem przez Państwa zgody na używanie plików cookies.</li>
                        <li>Ograniczenie stosowania ciasteczek może wpłynąć na niektóre funkcje dostępne na stronie firmy Targowa 49.</li>
                    </ol>

                    <p>* Użytkownik w każdej chwili ma możliwość wyłączenia lub przywrócenia opcji gromadzenia cookies poprzez zmianę ustawień w przeglądarce internetowej.</p>
                    <p>Standardowo większość przeglądarek internetowych dostępnych na rynku domyślnie akceptuje zapisywanie plików cookies. Każdy ma możliwość określenia warunków korzystania z plików cookies za pomocą ustawień własnej przeglądarki internetowej. Oznacza to, że można np. częściowo ograniczyć (np. czasowo) lub całkowicie wyłączyć możliwość zapisywania plików cookies – w tym ostatnim wypadku jednak może to mieć wpływ na niektóre funkcjonalności serwisu.</p>
                    <p>** Ustawienia przeglądarki internetowej w zakresie plików cookies są istotne z punktu widzenia zgody na korzystanie z plików cookies przez nasz serwis – zgodnie z przepisami taka zgoda może być również wyrażona poprzez ustawienia przeglądarki internetowej. W braku wyrażenia takiej zgody należy odpowiednio zmienić ustawienia przeglądarki internetowej w zakresie plików cookies.</p>
                    <p>Firma Targowa 49, jako Administrator Państwa danych osobowych, dokłada wszelkich starań, aby zapewnić wszelkie środki fizycznej, technicznej i organizacyjnej ochrony danych osobowych przed ich przypadkowym czy umyślnym zniszczeniem, przypadkową utratą, zmianą, nieuprawnionym ujawnieniem, wykorzystaniem czy dostępem zgodnie ze wszystkimi obowiązującymi przepisami.</p>
                    <p>Jeżeli mają Państwo jakiekolwiek pytania w sprawie ochrony danych, prosimy o kontakt mailowy na adres: biuro@targowa49.pl</p>
                    <p>Dziękujemy za wizytę na naszej stronie internetowej.</p>
                </div>
            </div>
        </section>

        <x-cta></x-cta>
    </main>
@endsection
