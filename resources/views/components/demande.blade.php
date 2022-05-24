<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="demande-block">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Laissez nous un message</h5>
                    <h1 class="mb-0">
                        Avez-vous des questions ?
                    </h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>
                            Délai de réponse de moins de 24h</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>
                            Assistance disponible 24h/24</h5>
                    </div>
                </div>
                <p class="mb-4">
                    Laissez nous un message et nous vous répondrons dans les meilleurs délais.
                </p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-mail-bulk text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email</h5>
                        <h4 class="text-primary mb-0">
                            <a href="mailto:contact@foloschool.com">contact@foloschool.com</a>
                        </h4>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Téléphone</h5>
                        <h4 class="text-primary mb-0">
                            <a href="tel:+225 25 20 00 22 42">+225 25 20 00 22 42</a> /
                            <a href="tel:+225 07 48 46 35 49">+225 07 48 46 35 49</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form action="{{ route('sendMessage') }}" method="POST">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input required id="customer_name" name="customer_name" type="text"
                                    class="form-control bg-light border-0" placeholder="Votre nom complet"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input required id="customer_email" name="customer_email" type="email"
                                    class="form-control bg-light border-0" placeholder="Votre adresse mail"
                                    style="height: 55px;">
                            </div>
                            <div class="col-xl-12">
                                <input required id="customer_subject" name="customer_subject" type="text"
                                    class="form-control bg-light border-0" placeholder="Sujet" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea required id="customer_message" name="customer_message" class="form-control bg-light border-0" rows="3"
                                    placeholder="Message" value="Je suis content"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" id="send-btn" onclick="sendMessage()"
                                    class="btn btn-dark w-100 py-3">
                                    Laisser un message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
