<x-layout>
    <x-navbar></x-navbar>
    @if (session('successMessage'))
        <div class="alert alert-secondary fix" role="alert">
          {{ session('successMessage')}}
        </div>
        @endif
        <section class="py-5">
          <div class="container px-5 my-5">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                  <div class="card-body p-4">
                    <div class="text-center">
                      <div class="h1 fw-light textRed">VUOI MAGGIORI INFORMAZIONI?</div>
                      <p class="mb-4 text-muted">Hai bisogno di un preventivo, assistenza per i tuoi mezzi, noleggio di mezzi o vuoi vendere un tuo macchinario? Uno dei nostri venditori la contatterà.</p>
                    </div>
                    <form id="contactForm" method="POST" action="{{ route('contact.create') }}">
                      @csrf
                      <!-- Name Input -->
                      <div class="form-floating mb-3">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Name"/>
                        <label for="name">Name</label>
                        <div class="invalid-feedback" >Nome richiesto.</div>
                      </div>
                      <!-- Email Input -->
                      <div class="form-floating mb-3">
                        <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address"  />
                        <label for="emailAddress">Email</label>
                        <div class="invalid-feedback" >Email richiesta.</div>
                        <div class="invalid-feedback" >Email non valida.</div>
                      </div>
                      <!-- Message Input -->
                      <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;" ></textarea>
                        <label for="message">Messaggio</label>
                        <div class="invalid-feedback" >Messaggio richiesto.</div>
                      </div>
                      <div class="d-grid">
                        <button class="button-1 " id="submitButton" type="submit">Invia richiesta</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container px-5 my-4">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                  <div class="card-body p-4">
                    <div class="text-center">
                      <h1 class="mt-4 textRed fw-bold fst-italic">Ulteriori contatti</h1>
                      <p><i class="fas fa-envelope me-auto fw-semibold"></i> E-mail: manitoudecarolis@gmail.com</p>
                      <p><i class="fas fa-envelope me-auto fw-semibold"></i> E-mail: forcarrelli@gmail.com</p>
                      <p><i class="fas fa-phone me-3"></i> Mobile +39 392 203 7041</p>
                      <p><i class="fas fa-phone me-3"></i> Mobile +39 393 705 1695</p>
                      <h2 class="textRed fw-bold fst-italic py-2">Dove trovarci</h2>
                      <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.2068530806714!2d17.34619091204471!3d40.82341993066718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13464c7aa44aa195%3A0x515a022a9c6b667d!2sTrattori%20e%20macchine%20agricole%20De%20Carolis!5e0!3m2!1sit!2sit!4v1690631487003!5m2!1sit!2sit" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer class="text-center text-lg-start bg-light text-muted  footer3">
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
        
    <script src="/js/script.js"></script>
</x-layout>