@extends('layouts.homepage', ['body_class' => 'homepage'])
@if ($isAdmin)
    @include('layouts.partials.inline')
@endif
@section('content')
    <main class="home">
        <div id="slider">
            <ul class="mb-0 list-unstyled">
                <li>
                    <div class="container">
                        <div class="row h-100">
                            <div class="col-6 d-flex align-items-center">
                                <div class="slider-content pe-4">
                                    <h2>Apartamenty w historycznym <br>centrum Łodzi - Targowa 49</h2>
                                    <p>Apartamenty położone w najbardziej klimatycznej części Łodzi, Finezja sąsiaduje z miejscami, które budują tożsamość miasta – Księżym Młynem, Monopolis, pałacem Scheiblerów oraz słynną ulicą Piotrkowską.</p>
                                    <p>&nbsp;</p>
                                    <p>Tu przeszłość przemysłowej potęgi Łodzi spotyka się z nowoczesnym rytmem życia.</p>
                                    <a href="#" class="bttn-big">Zobacz apartamenty</a>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-end">
                                <div class="slider-img w-100">
                                    <img src="{{ asset('uploads/slider/slide-1.png') }}" alt="" class="w-100" width="580" height="589">
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('uploads/slider/slide-1-bg.jpg') }}" alt="" class="w-100" width="1920" height="733">
                </li>
                <li>
                    <div class="container">
                        <div class="row h-100">
                            <div class="col-6 d-flex align-items-center">
                                <div class="slider-content pe-4">
                                    <h2>Kamienica <br>we współczesnym wydaniu</h2>
                                    <p>Stylowe wnętrza, szlachetne detale i miejski charakter tworzą przestrzeń, która łączy przeszłość z teraźniejszością.</p>
                                    <p>&nbsp;</p>
                                    <p>Dla tych, którzy cenią jakość, ale żyją współcześnie.</p>
                                    <a href="#" class="bttn-big">Zobacz apartamenty</a>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-end">
                                <div class="slider-img w-100">
                                    <img src="{{ asset('uploads/slider/slide-2.png') }}" alt="" class="w-100" width="580" height="589">
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('uploads/slider/slide-2-bg.jpg') }}" alt="" class="w-100" width="1920" height="733">
                </li>
                <li>
                    <div class="container">
                        <div class="row h-100">
                            <div class="col-6 d-flex align-items-center">
                                <div class="slider-content pe-4">
                                    <h2>Dwa światy – Twoje miejsce <br>między historią a nowoczesnością</h2>
                                    <p> Z jednej strony elegancka architektura i ponadczasowy detal, z drugiej – komfort, funkcjonalność i styl życia na miarę dzisiejszych oczekiwań.</p>
                                    <p>&nbsp;</p>
                                    <p>Twój adres między tym, co było, a tym, co nadchodzi.</p>
                                    <a href="#" class="bttn-big">Zobacz apartamenty</a>
                                </div>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <div class="slider-img w-100">
                                    <img src="{{ asset('uploads/slider/slide-3.png') }}" alt="" class="w-100" width="580" height="502">
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('uploads/slider/slide-3-bg.jpg') }}" alt="" class="w-100" width="1920" height="733">
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div id="search">
                        <form action="" method="get" class="d-flex align-items-center h-100">
                            <div class="col">
                                <div class="input-select">
                                    <label for="inputRooms" class="form-label">Ilość pokoi</label>
                                    <select id="inputRooms" class="form-select" name="s_pokoje">
                                        <option selected>Wszystko</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-select">
                                    <label for="inputArea" class="form-label">Metraż</label>
                                    <select id="inputArea" class="form-select" name="s_metry">
                                        <option selected>Wszystko</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-select">
                                    <label for="inputFloor" class="form-label">Piętro</label>
                                    <select id="inputFloor" class="form-select" name="floor">
                                        <option selected>Wszystko</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="34.168" height="34.177" viewBox="0 0 34.168 34.177"><path d="M38.267,36.2l-9.5-9.592a13.543,13.543,0,1,0-2.055,2.082l9.441,9.53a1.462,1.462,0,0,0,2.064.053A1.472,1.472,0,0,0,38.267,36.2ZM18.123,28.8a10.694,10.694,0,1,1,7.563-3.132A10.628,10.628,0,0,1,18.123,28.8Z" transform="translate(-4.5 -4.493)" fill="#978c7d"/></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <div class="row">
                            <div class="col-10">
                                <h2 class="section-title">Finezja <br>w każdym detalu</h2>
                                <p>Apartamenty Finezja wyróżniają się wysoką jakością wykończenia <br>i ponadczasową estetyką. To połączenie klasy, kameralności i architektury <br>z charakterem.</p>
                                <p>&nbsp;</p>
                                <p>Wybierz przestrzeń, która naprawdę do Ciebie pasuje.</p>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="box-icon-title-text text-center">
                                            <div class="box-icon-holder">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="53.189" height="53.16" viewBox="0 0 53.189 53.16">
                                                    <g id="light" transform="translate(0.613 0.5)">
                                                        <path d="M5,57.543s29.014-7.828,42.218-38.819" transform="translate(-5 -5.496)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M31.949,33.276S33.639,14,42.532,14" transform="translate(-5.975 -5.326)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M40.933,19.457S43.332,5,58.249,5a32.68,32.68,0,0,1-6.734,22.168" transform="translate(-6.3 -5)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M55.96,20.661s7.243,8.117-11.035,19.6" transform="translate(-6.444 -5.567)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M34.4,21c-10.107,0-14.43,29.879-14.43,29.879,33.013-.65,30.6-15.3,30.56-15.52v0" transform="translate(-5.542 -5.579)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M23.613,57.53c-1.415-4.574-9.341-2.669-9.341-2.669S19.056,50.429,15.917,45" transform="translate(-5.335 -6.447)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M7.994,57.638S12.483,52.819,10.88,48" transform="translate(-5.108 -6.556)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h3>Komfort</h3>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="box-icon-title-text text-center">
                                            <div class="box-icon-holder">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="56" viewBox="0 0 61.893 56.188">
                                                    <g>
                                                        <g transform="translate(0 0)">
                                                            <path d="M66.742,63.382a.816.816,0,0,0-.075-.063l-2.754-2.4,0,0-2.04-1.774-7.739-6.734a1.935,1.935,0,0,0-1.267-.475H50.869a.358.358,0,1,0,0,.717h1.993a1.22,1.22,0,0,1,.8.3l5.313,4.623-8.838-.821-3.473-4.1H48.4a.358.358,0,1,0,0-.717H38.838L40.053,47.3a5.967,5.967,0,0,1,3.237-3.941,16.852,16.852,0,1,0-14.173,0A5.96,5.96,0,0,1,32.352,47.3l1.218,4.637H19.535a1.935,1.935,0,0,0-1.268.475L12.8,57.172a.359.359,0,0,0,.235.629c.254,0-.025.093,5.707-4.848a1.22,1.22,0,0,1,.8-.3h8.113L21.2,58.015l-1.926-2.272a.358.358,0,0,0-.5-.044l-8.9,7.4H7.07l4.256-3.7a.359.359,0,0,0-.47-.541L5.72,63.325c-.04.031-.095.083-.158.139a1.144,1.144,0,0,0-.312.785V66.26A1.148,1.148,0,0,0,6.4,67.407H66a1.148,1.148,0,0,0,1.147-1.147V64.248a1.148,1.148,0,0,0-.354-.826ZM65.324,63.1H40.487l6.1-5.07,1.691,1.995a.36.36,0,0,0,.24.125l15,1.385Zm-19.6-10.447,3.96,4.676c.18.213-.237.043,10.215,1.052l2.353,2.045.348.3L48.734,59.45,46.908,57.3a.359.359,0,0,0-.5-.044L39.364,63.1H36.095l3.538-2.938c2.257-.485,3.551-1.367,3.551-2.429a1.281,1.281,0,0,0-.085-.449l1.954-1.622a.358.358,0,0,0,.044-.507l-2.115-2.5Zm-3.68,0,2.273,2.689L42.7,56.682c-.784-.81-2.5-1.413-4.679-1.633l.628-2.4ZM29.418,42.713a16.135,16.135,0,1,1,13.57,0,6.683,6.683,0,0,0-3.629,4.409L36.743,57.1a.538.538,0,0,1-.539.415h0a.536.536,0,0,1-.536-.416l-2.623-9.987a6.678,6.678,0,0,0-3.627-4.405Zm4.969,12.338c-.1.009-.2.016-.291.028a.358.358,0,1,0,.089.711c.126-.016.257-.025.386-.037l.4,1.532a1.256,1.256,0,0,0,1.229.952h0a1.259,1.259,0,0,0,1.232-.951l.4-1.534c2.555.239,4.1.978,4.514,1.631a.634.634,0,0,1,.114.35c0,.552-.949,1.307-3.07,1.747a16.012,16.012,0,0,1-3.2.308c-3.693,0-6.266-1.083-6.266-2.055,0-.541.834-1.127,2.177-1.53a.359.359,0,1,0-.206-.687c-1.733.52-2.688,1.307-2.688,2.217,0,1.8,3.6,2.772,6.983,2.772a17.839,17.839,0,0,0,2.046-.121L34.972,63.1H25.5l-2.03-2.4,9.688-8.05h.6ZM18.956,56.477l1.926,2.272a.359.359,0,0,0,.5.044l7.385-6.14h3.27l-9.3,7.73a.36.36,0,0,0-.128.245.357.357,0,0,0,.084.263l1.871,2.21H21.824l-2.894-3.419a.358.358,0,0,0-.5-.044L14.259,63.1H10.987ZM20.885,63.1h-5.5l3.231-2.685ZM66.426,66.26a.431.431,0,0,1-.43.43H6.4a.43.43,0,0,1-.43-.43V64.248a.43.43,0,0,1,.092-.27.446.446,0,0,1,.337-.161H66a.415.415,0,0,1,.259.09l.047.039a.423.423,0,0,1,.125.3Z" transform="translate(-5.25 -11.219)" fill="#232323"/>
                                                            <path d="M68.927,33.707A11.69,11.69,0,1,0,57.234,45.395,11.706,11.706,0,0,0,68.927,33.707Zm-22.663,0A10.973,10.973,0,1,1,57.234,44.678,10.985,10.985,0,0,1,46.264,33.707Z" transform="translate(-26.287 -16.855)" fill="#232323"/>
                                                        </g>
                                                    </g>
                                                    <path d="M120.793,3.2A4.6,4.6,0,0,0,116.2,7.793v9.455h9.185V7.793A4.6,4.6,0,0,0,120.793,3.2Zm-2.957,1.635a4.18,4.18,0,0,1,7.138,2.957v2.545h-1.379V8.546h-5.872v1.607h-1.095V7.793a4.206,4.206,0,0,1,1.223-2.957Zm5.332,5.5h0v6.484h-6.555V13.409h1.493V13.2c0-1.422,0-2.829.014-4.251h5.033v1.379ZM117.693,13h-1.081V10.565h1.095V13Zm5.886-2.247h1.379v6.086h-1.379Z" transform="translate(-89.846 6.506)" fill="#232323" stroke="#232323" stroke-width="0.4"/>
                                                </svg>
                                            </div>
                                            <h3>Komfort</h3>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="box-icon-title-text text-center">
                                            <div class="box-icon-holder">
                                                <svg id="blueprint" xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51.034 51.843">
                                                    <path d="M30.976,5.756H29.728a.4.4,0,0,0-.2.058.4.4,0,0,0-.2-.058H15.357a3.1,3.1,0,0,0-.486-.785,7.454,7.454,0,0,0-11.088,0,3.308,3.308,0,0,0-.79,2.191v7.564a.411.411,0,1,0,.823,0V7.164A2.49,2.49,0,0,1,4.4,5.517a6.633,6.633,0,0,1,9.855,0,2.489,2.489,0,0,1,.587,1.649V45.949a7.44,7.44,0,0,0-5.886-2.438,7.918,7.918,0,0,0-.831.09c-.087.015-.172.035-.259.052-.185.036-.368.077-.548.127-.1.026-.191.056-.287.087-.169.053-.336.114-.5.18-.09.036-.18.072-.268.112-.177.08-.348.168-.517.26-.067.038-.137.071-.2.109a7.47,7.47,0,0,0-.671.447c-.037.028-.071.061-.108.09-.174.138-.346.282-.51.438-.067.063-.131.132-.2.2-.081.082-.165.158-.241.244V20.277a.411.411,0,1,0-.823,0V47.17a7.187,7.187,0,0,0,7.173,7.174H51.015a3.015,3.015,0,0,0,3.011-3.011V8.766a3.014,3.014,0,0,0-3.011-3.01H36.242a.411.411,0,1,0,0,.823H51.015A2.191,2.191,0,0,1,53.2,8.766V51.333a2.191,2.191,0,0,1-2.188,2.188H10.166A6.364,6.364,0,0,1,3.817,47.3c.067-.1.142-.2.215-.3s.146-.207.225-.3.187-.2.281-.306.165-.184.253-.267.207-.179.313-.268.181-.16.277-.233.229-.153.343-.229.2-.135.3-.194c.12-.07.248-.127.372-.188.106-.052.208-.11.317-.156.133-.057.271-.1.407-.147.108-.038.212-.082.32-.114.153-.044.311-.075.468-.108.1-.021.2-.05.3-.067a6.971,6.971,0,0,1,.792-.086,6.548,6.548,0,0,1,5.52,2.508q.206.263.391.551a.412.412,0,0,0,.758-.223V6.579H29.33a.4.4,0,0,0,.2-.058.4.4,0,0,0,.2.058h1.248a.411.411,0,0,0,0-.823" transform="translate(-2.992 -2.501)" fill="#232323"/>
                                                    <path d="M42.4,43.546a.412.412,0,0,0-.411.411v4.01H34.773a.411.411,0,1,0,0,.823H49.59a2.187,2.187,0,0,0,2.185-2.184V18.324a2.187,2.187,0,0,0-2.185-2.185H27.006a2.187,2.187,0,0,0-2.184,2.185V46.607a2.186,2.186,0,0,0,2.184,2.184h3.616a.411.411,0,1,0,0-.823H27.006a1.363,1.363,0,0,1-1.361-1.361V32.835H27.9a.411.411,0,0,0,0-.823H25.645V18.324a1.363,1.363,0,0,1,1.361-1.362h7.582v15.05h-3.2a.411.411,0,1,0,0,.823H35a.411.411,0,0,0,.411-.411V27.3h3.559a.411.411,0,0,0,0-.823H35.411V16.962H49.59a1.364,1.364,0,0,1,1.362,1.362v8.154H43.061a.411.411,0,1,0,0,.823H44.7v1.375a.411.411,0,0,0,.823,0V27.3h5.434v7.118h-6.4V32.6a.411.411,0,0,0-.823,0v4.451a.411.411,0,0,0,.823,0V35.242h6.4V46.607a1.363,1.363,0,0,1-1.362,1.361H42.811v-4.01a.412.412,0,0,0-.411-.411" transform="translate(-6.858 -4.916)" fill="#232323"/>
                                                </svg>
                                            </div>
                                            <h3>Komfort</h3>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="bttn-big">Czytaj więcej</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="custom-clip">
                            <img src="{{ asset('../images/5.jpg') }}" alt="Opis zdjęcia" width="526" height="665">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <h2 class="section-title">Odkrywaj <br>okolice</h2>
                        <p>Finezja znajduje się przy ul. Targowej 49 – w miejscu, gdzie można poczuć miasto, ale jednocześnie złapać dystans.</p>
                        <p>&nbsp;</p>
                        <p>W pobliżu znajdziesz wszystko, czego potrzeba – centrum handlowe Galeria Łódzka, restauracje, siłownie, szkoły, a także Muzeum Kinematografii. Sąsiedztwo terenów zielonych, takich jak park Źródliska, Księży Młyn pozwala odnaleźć równowagę – pośród miejskiego zgiełku, ale z dostępem do natury.</p>
                    </div>
                </div>

                <div class="row pt-5 pb-5">

                </div>

                <div class="row pt-5">
                    <div class="col-3">
                        <img src="https://placehold.co/600x450" alt="" class="img-rounded">
                    </div>
                    <div class="col-3">
                        <img src="https://placehold.co/600x450" alt="" class="img-rounded">
                    </div>
                    <div class="col-3">
                        <img src="https://placehold.co/600x450" alt="" class="img-rounded">
                    </div>
                    <div class="col-3">
                        <img src="https://placehold.co/600x450" alt="" class="img-rounded">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <h2 class="section-title">Miejsce, które <br>definiuje twój styl</h2>
                        <p>Oferujemy apartamenty 1,2,3 i 4 pokojowe o najlepszych układach, w metrażach od 27 m<sup>2</sup> do 86 m<sup>2</sup> z dużymi i przestronnymi tarasami i balkonami.</p>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-3">
                        <div class="carousel-room-item">
                            <h2><a href="">MIESZKANIE <br>NR 17</a></h2>
                            <ul class="list-unstyled">
                                <li>Metraż: 45 m<sup>2</sup></li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Pokoje: 2</li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Piętro: 4</li>
                            </ul>

                            <a href="" class="bttn-text bttn-text-white">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#fff"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="carousel-room-item">
                            <h2><a href="">MIESZKANIE <br>NR 17</a></h2>
                            <ul class="list-unstyled">
                                <li>Metraż: 45 m<sup>2</sup></li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Pokoje: 2</li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Piętro: 4</li>
                            </ul>

                            <a href="" class="bttn-text bttn-text-white">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#fff"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="carousel-room-item">
                            <h2><a href="">MIESZKANIE <br>NR 17</a></h2>
                            <ul class="list-unstyled">
                                <li>Metraż: 45 m<sup>2</sup></li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Pokoje: 2</li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Piętro: 4</li>
                            </ul>

                            <a href="" class="bttn-text bttn-text-white">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#fff"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="carousel-room-item">
                            <h2><a href="">MIESZKANIE <br>NR 17</a></h2>
                            <ul class="list-unstyled">
                                <li>Metraż: 45 m<sup>2</sup></li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Pokoje: 2</li>
                                <li class="d-inline-flex"><span></span></li>
                                <li>Piętro: 4</li>
                            </ul>

                            <a href="" class="bttn-text bttn-text-white">Sprawdź <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#fff"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <a href="" class="bttn-text">Sprawdź więcej <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#000"/></svg></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <h2 class="section-title">Zajrzyj <br>do świata finezji</h2>
                        <p>Zobacz przestrzeń, która została zaprojektowana <br>z myślą o tych, którzy cenią estetykę i jakość.</p>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <div class="row">
                            <div class="col-10">
                                <h2 class="section-title">Doświadczenie <br>które buduje</h2>
                                <p>Od lat z sukcesem realizujemy projekty budowlane w Łodzi, łącząc wiedzę inżynieryjną z przemyślaną organizacją procesu inwestycyjnego.</p>
                                <p>&nbsp;</p>
                                <p>Nasze podejście wyróżnia rzetelność, wysoka jakość wykonania i konsekwentna dbałość o detale – na każdym etapie prac.</p>
                            </div>
                            <div class="col-12">
                                <div class="row pb-4">
                                    <div class="col-4">
                                        <div class="box-icon-title-text text-center">
                                            <div class="box-icon-holder">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="53.189" height="53.16" viewBox="0 0 53.189 53.16">
                                                    <g id="light" transform="translate(0.613 0.5)">
                                                        <path d="M5,57.543s29.014-7.828,42.218-38.819" transform="translate(-5 -5.496)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M31.949,33.276S33.639,14,42.532,14" transform="translate(-5.975 -5.326)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M40.933,19.457S43.332,5,58.249,5a32.68,32.68,0,0,1-6.734,22.168" transform="translate(-6.3 -5)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M55.96,20.661s7.243,8.117-11.035,19.6" transform="translate(-6.444 -5.567)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M34.4,21c-10.107,0-14.43,29.879-14.43,29.879,33.013-.65,30.6-15.3,30.56-15.52v0" transform="translate(-5.542 -5.579)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M23.613,57.53c-1.415-4.574-9.341-2.669-9.341-2.669S19.056,50.429,15.917,45" transform="translate(-5.335 -6.447)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                        <path d="M7.994,57.638S12.483,52.819,10.88,48" transform="translate(-5.108 -6.556)" fill="none" stroke="#232323" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h3>Komfort</h3>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="box-icon-title-text text-center">
                                            <div class="box-icon-holder">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="61" height="56" viewBox="0 0 61.893 56.188">
                                                    <g>
                                                        <g transform="translate(0 0)">
                                                            <path d="M66.742,63.382a.816.816,0,0,0-.075-.063l-2.754-2.4,0,0-2.04-1.774-7.739-6.734a1.935,1.935,0,0,0-1.267-.475H50.869a.358.358,0,1,0,0,.717h1.993a1.22,1.22,0,0,1,.8.3l5.313,4.623-8.838-.821-3.473-4.1H48.4a.358.358,0,1,0,0-.717H38.838L40.053,47.3a5.967,5.967,0,0,1,3.237-3.941,16.852,16.852,0,1,0-14.173,0A5.96,5.96,0,0,1,32.352,47.3l1.218,4.637H19.535a1.935,1.935,0,0,0-1.268.475L12.8,57.172a.359.359,0,0,0,.235.629c.254,0-.025.093,5.707-4.848a1.22,1.22,0,0,1,.8-.3h8.113L21.2,58.015l-1.926-2.272a.358.358,0,0,0-.5-.044l-8.9,7.4H7.07l4.256-3.7a.359.359,0,0,0-.47-.541L5.72,63.325c-.04.031-.095.083-.158.139a1.144,1.144,0,0,0-.312.785V66.26A1.148,1.148,0,0,0,6.4,67.407H66a1.148,1.148,0,0,0,1.147-1.147V64.248a1.148,1.148,0,0,0-.354-.826ZM65.324,63.1H40.487l6.1-5.07,1.691,1.995a.36.36,0,0,0,.24.125l15,1.385Zm-19.6-10.447,3.96,4.676c.18.213-.237.043,10.215,1.052l2.353,2.045.348.3L48.734,59.45,46.908,57.3a.359.359,0,0,0-.5-.044L39.364,63.1H36.095l3.538-2.938c2.257-.485,3.551-1.367,3.551-2.429a1.281,1.281,0,0,0-.085-.449l1.954-1.622a.358.358,0,0,0,.044-.507l-2.115-2.5Zm-3.68,0,2.273,2.689L42.7,56.682c-.784-.81-2.5-1.413-4.679-1.633l.628-2.4ZM29.418,42.713a16.135,16.135,0,1,1,13.57,0,6.683,6.683,0,0,0-3.629,4.409L36.743,57.1a.538.538,0,0,1-.539.415h0a.536.536,0,0,1-.536-.416l-2.623-9.987a6.678,6.678,0,0,0-3.627-4.405Zm4.969,12.338c-.1.009-.2.016-.291.028a.358.358,0,1,0,.089.711c.126-.016.257-.025.386-.037l.4,1.532a1.256,1.256,0,0,0,1.229.952h0a1.259,1.259,0,0,0,1.232-.951l.4-1.534c2.555.239,4.1.978,4.514,1.631a.634.634,0,0,1,.114.35c0,.552-.949,1.307-3.07,1.747a16.012,16.012,0,0,1-3.2.308c-3.693,0-6.266-1.083-6.266-2.055,0-.541.834-1.127,2.177-1.53a.359.359,0,1,0-.206-.687c-1.733.52-2.688,1.307-2.688,2.217,0,1.8,3.6,2.772,6.983,2.772a17.839,17.839,0,0,0,2.046-.121L34.972,63.1H25.5l-2.03-2.4,9.688-8.05h.6ZM18.956,56.477l1.926,2.272a.359.359,0,0,0,.5.044l7.385-6.14h3.27l-9.3,7.73a.36.36,0,0,0-.128.245.357.357,0,0,0,.084.263l1.871,2.21H21.824l-2.894-3.419a.358.358,0,0,0-.5-.044L14.259,63.1H10.987ZM20.885,63.1h-5.5l3.231-2.685ZM66.426,66.26a.431.431,0,0,1-.43.43H6.4a.43.43,0,0,1-.43-.43V64.248a.43.43,0,0,1,.092-.27.446.446,0,0,1,.337-.161H66a.415.415,0,0,1,.259.09l.047.039a.423.423,0,0,1,.125.3Z" transform="translate(-5.25 -11.219)" fill="#232323"/>
                                                            <path d="M68.927,33.707A11.69,11.69,0,1,0,57.234,45.395,11.706,11.706,0,0,0,68.927,33.707Zm-22.663,0A10.973,10.973,0,1,1,57.234,44.678,10.985,10.985,0,0,1,46.264,33.707Z" transform="translate(-26.287 -16.855)" fill="#232323"/>
                                                        </g>
                                                    </g>
                                                    <path d="M120.793,3.2A4.6,4.6,0,0,0,116.2,7.793v9.455h9.185V7.793A4.6,4.6,0,0,0,120.793,3.2Zm-2.957,1.635a4.18,4.18,0,0,1,7.138,2.957v2.545h-1.379V8.546h-5.872v1.607h-1.095V7.793a4.206,4.206,0,0,1,1.223-2.957Zm5.332,5.5h0v6.484h-6.555V13.409h1.493V13.2c0-1.422,0-2.829.014-4.251h5.033v1.379ZM117.693,13h-1.081V10.565h1.095V13Zm5.886-2.247h1.379v6.086h-1.379Z" transform="translate(-89.846 6.506)" fill="#232323" stroke="#232323" stroke-width="0.4"/>
                                                </svg>
                                            </div>
                                            <h3>Komfort</h3>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="box-icon-title-text text-center">
                                            <div class="box-icon-holder">
                                                <svg id="blueprint" xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51.034 51.843">
                                                    <path d="M30.976,5.756H29.728a.4.4,0,0,0-.2.058.4.4,0,0,0-.2-.058H15.357a3.1,3.1,0,0,0-.486-.785,7.454,7.454,0,0,0-11.088,0,3.308,3.308,0,0,0-.79,2.191v7.564a.411.411,0,1,0,.823,0V7.164A2.49,2.49,0,0,1,4.4,5.517a6.633,6.633,0,0,1,9.855,0,2.489,2.489,0,0,1,.587,1.649V45.949a7.44,7.44,0,0,0-5.886-2.438,7.918,7.918,0,0,0-.831.09c-.087.015-.172.035-.259.052-.185.036-.368.077-.548.127-.1.026-.191.056-.287.087-.169.053-.336.114-.5.18-.09.036-.18.072-.268.112-.177.08-.348.168-.517.26-.067.038-.137.071-.2.109a7.47,7.47,0,0,0-.671.447c-.037.028-.071.061-.108.09-.174.138-.346.282-.51.438-.067.063-.131.132-.2.2-.081.082-.165.158-.241.244V20.277a.411.411,0,1,0-.823,0V47.17a7.187,7.187,0,0,0,7.173,7.174H51.015a3.015,3.015,0,0,0,3.011-3.011V8.766a3.014,3.014,0,0,0-3.011-3.01H36.242a.411.411,0,1,0,0,.823H51.015A2.191,2.191,0,0,1,53.2,8.766V51.333a2.191,2.191,0,0,1-2.188,2.188H10.166A6.364,6.364,0,0,1,3.817,47.3c.067-.1.142-.2.215-.3s.146-.207.225-.3.187-.2.281-.306.165-.184.253-.267.207-.179.313-.268.181-.16.277-.233.229-.153.343-.229.2-.135.3-.194c.12-.07.248-.127.372-.188.106-.052.208-.11.317-.156.133-.057.271-.1.407-.147.108-.038.212-.082.32-.114.153-.044.311-.075.468-.108.1-.021.2-.05.3-.067a6.971,6.971,0,0,1,.792-.086,6.548,6.548,0,0,1,5.52,2.508q.206.263.391.551a.412.412,0,0,0,.758-.223V6.579H29.33a.4.4,0,0,0,.2-.058.4.4,0,0,0,.2.058h1.248a.411.411,0,0,0,0-.823" transform="translate(-2.992 -2.501)" fill="#232323"/>
                                                    <path d="M42.4,43.546a.412.412,0,0,0-.411.411v4.01H34.773a.411.411,0,1,0,0,.823H49.59a2.187,2.187,0,0,0,2.185-2.184V18.324a2.187,2.187,0,0,0-2.185-2.185H27.006a2.187,2.187,0,0,0-2.184,2.185V46.607a2.186,2.186,0,0,0,2.184,2.184h3.616a.411.411,0,1,0,0-.823H27.006a1.363,1.363,0,0,1-1.361-1.361V32.835H27.9a.411.411,0,0,0,0-.823H25.645V18.324a1.363,1.363,0,0,1,1.361-1.362h7.582v15.05h-3.2a.411.411,0,1,0,0,.823H35a.411.411,0,0,0,.411-.411V27.3h3.559a.411.411,0,0,0,0-.823H35.411V16.962H49.59a1.364,1.364,0,0,1,1.362,1.362v8.154H43.061a.411.411,0,1,0,0,.823H44.7v1.375a.411.411,0,0,0,.823,0V27.3h5.434v7.118h-6.4V32.6a.411.411,0,0,0-.823,0v4.451a.411.411,0,0,0,.823,0V35.242h6.4V46.607a1.363,1.363,0,0,1-1.362,1.361H42.811v-4.01a.412.412,0,0,0-.411-.411" transform="translate(-6.858 -4.916)" fill="#232323"/>
                                                </svg>
                                            </div>
                                            <h3>Komfort</h3>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="bttn-text">Czytaj więcej <svg xmlns="http://www.w3.org/2000/svg" width="7.13" height="12.47" viewBox="0 0 7.13 12.47"><path d="M12.425,16.227l4.715-4.719a.887.887,0,0,1,1.259,0,.9.9,0,0,1,0,1.262l-5.343,5.346a.89.89,0,0,1-1.229.026l-5.38-5.369a.891.891,0,1,1,1.259-1.262Z" transform="translate(-11.246 18.658) rotate(-90)" fill="#000"/></svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="custom-clip">
                            <img src="{{ asset('../images/nasz-pracownik-z-doswiadczeniem.jpg') }}" alt="Opis zdjęcia" width="628" height="665">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-cta />

        <svg width="0" height="0">
            <defs>
                <clipPath id="half-circle" clipPathUnits="objectBoundingBox">
                    <path d="M0,0.375 A0.5,0.375 0 0,1 1,0.375 L1,1 L0,1 Z" />
                </clipPath>
            </defs>
        </svg>
    </main>
@endsection
