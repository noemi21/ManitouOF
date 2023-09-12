<x-layout>
    <x-navbar></x-navbar>
    <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
        <i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i>
    </button>

<!-- Explanation -->
        <div class="container  mt-4 text-center">
            <section class="separatore2 ">
                <div class="container">
                    <h1 class="my-3 textRed fw-bold fst-italic text-start">I NOSTRI MACCHINARI</h1>
                    <div class="row">
                        <div class="col-4">
                            <div id="list-example" class="list-group">
                                <a class="list-group-item list-group-item-action text-start" href="#list-item-1">Telescopici rotativi</a>
                                <a class="list-group-item list-group-item-action text-start" href="#list-item-2">Telescopici fissi</a>
                                <a class="list-group-item list-group-item-action text-start" href="#list-item-3">Magazzinaggio</a>
                                <a class="list-group-item list-group-item-action text-start" href="#list-item-4">Noleggio</a>
                            </div>
                        </div>
                </div>
                <div class="container py-4">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                        <h3 class="textRed fw-bold text-start" id="list-item-1"><small>Telescopici rotativi</small></h3>
                        <div class="row">
                            <div class="col-md-7">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img1.png" alt="" style="width: 700px", height="400px">
                            </div>
                            <div class="col-md-5">
                                <h3 class="fw-bold textRed  text-start">MRT 2660</h3>
                                <p class=" text-start">Combinazione di 3 macchine in 1 (sollevatore telescopico, gru e piattaforma aerea),può sollevare fino a 6 tonnellate,capacità di rotazione a 360° permette di eseguire diverse ...</p>
                                <a class="button-1" href="{{route('macchina1')}}">Scopri il prodotto</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img2.png" alt="" style="width: 700px", height="400px">
                            </div>
                            <div class="col-md-5">
                                <h3 class="fw-bold textRed text-start">MRT 2545 115</h3>
                                    <p class=" text-start">È dotato di 3 modalità di sterzata che permette un'ottima manovrabilità,possiede un cruscotto intelligente ...</p>
                                    <a class="button-1" href="{{route('macchina2')}}">Scopri il prodotto</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img6.png" alt="" style="width: 700px", height="400px">
                            </div>
                            <div class="col-md-5">
                                <h3 class="fw-bold textRed text-start">MRT 1845 115</h3>
                                    <p class=" text-start">Dotato di 3 modalità di sterzata offrono un'ottina manovrabilità e inoltre può essere utilizzato in modalità telescopica ...</p>
                                        <a class="button-1" href="{{route('macchina6')}}">Scopri il prodotto</a>
                            </div>
                        </div>
                        <div class="separatore"></div>
                            <h3 class="textRed fw-bold text-start" id="list-item-2"><small>Telescopici fissi</small></h3>
                                <div class="row">
                                    <div class="col-md-7">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img3.png" alt="" style="width: 700px", height="400px">
                                    </div>
                                    <div class="col-md-5">
                                        <h3 class="fw-bold textRed text-start">MT 625 H</h3>
                                            <p class=" text-start">Il raggio di sterzata di 3,30 m e le 3 modalità di direzione consentono un'ottimale manovrabilità.La pompa ...</p>
                                                <a class="button-1" href="{{route('macchina3')}}">Scopri il prodotto</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-7">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img7.png" alt="" style="width: 700px", height="400px">
                                    </div>
                                    <div class="col-md-5">
                                        <h3 class="fw-bold textRed text-start">MT 1335 HA 75D ST5</h3>
                                            <p class=" text-start">Con la sua portata massima 3500 kg e la sua altezza di 2.48 m, permette di lavorare in modo ...</p>
                                            <a class="button-1" href="{{route('macchina7')}}">Scopri il prodotto</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-7">

                                                <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img5.png" alt="" style="width: 700px", height="400px">
                                            </a>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="fw-bold textRed text-start">MLT 940-140 V+</h3>
                                            <p class=" text-start">Questa macchina, ideata per ottimizzare e velocizzare il lavoro, permette di sollevare fino a ...</p>
                                            <a class="button-1" href="{{route('macchina5')}}">Scopri il prodotto</a>
                                        </div>
                                    </div>
                                    <div class="separatore"></div>
                                        <h3 class="textRed fw-bold text-start" id="list-item-3"><small>Magazzinaggio</small></h3>
                                            <div class="row">
                                                <div class="col-md-7">
        
                                                        <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img4.png" alt="" style="width: 700px", height="400px"></a>
                                                </div>
                                                <div class="col-md-5">
                                                <h3 class="fw-bold textRed text-start">MI 30 D ST5</h3>
                                                <p class=" text-start">Ottimizzate i flussi logistici e la produttività con il carrello MI 30 D ST5, con la sua agilità potrtr utilizzarlo sia all'esterno che ...</p>
                                                <a class="button-1" href="{{route('macchina4')}}">Scopri il prodotto</a>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-7">

                                            <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img8.png" alt="" style="width: 700px", height="400px"></a>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="fw-bold textRed text-start">ES 112 EASY</h3>
                                            <p class=" text-start">Con il suo accumulatore di energia agli ioni di litio, e, di un caricabatterie integrato, il transpallet elettrico permette una ricarica rapida ...</p>
                                            <a class="button-1" href="{{route('macchina8')}}">Scopri il prodotto</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-7">

                                            <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/img9.png" alt="" style="width: 700px", height="400px">
                                            </a>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="fw-bold textRed text-start">EP 20 EASY</h3>
                                            <p class=" text-start">Con EP 20 EASY avrai movimenti liberi e ottimali con la sua dimensione ...</p>
                                            <a class="button-1" href="{{route('macchina9')}}">Scopri il prodotto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separatore"></div>
                            <h3 class="textRed fw-bold text-start" id="list-item-4"><small>Noleggio</small></h3>
                                <div class="row">
                                    <div class="col-md-7">
                                        <img class="img-fluid rounded mb-3 mb-md-0" src="/Media/noleggio1.jpg" alt="" width="700px" height="300px">
                                    </div>
                                    <div class="col-md-5">
                                        <h3 class="fw-bold textRed text-start">Noleggio 1</h3>
                                            <p class=" text-start"> Hyster 4.00 è un muletto fuoristrada...</p>
                                                <a class="button-1" href="{{route('noleggio1')}}">Scopri il prodotto</a>
                                    </div>
                                </div>
                    </section>
        </div>
        <footer class="text-center text-lg-start bg-light text-muted footer2">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>De Carolis s.r.l.</span>
                </div>
            </section>
            <section>
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <p>Potete trovarci nella nostra sede in via C.da Giardinelli, n.c. - 72015 Fasano (BR) </p>
                            <p>P.IVA 01837980745</p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">CONTATTI</h6>
                            <p><i class="fas fa-envelope me-3"></i>manitoudecarolis@gmail.com</p>
                            <p><i class="fas fa-envelope me-3"></i>forcarrelli@gmail.com</p>
                            <p><i class="fas fa-phone me-3"></i> Mobile +39 392 203 7041</p>
                            <p><i class="fas fa-phone me-3"></i> Mobile +39 393 705 1695</p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
</x-layout>