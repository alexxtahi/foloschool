<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nous Contacter</h5>
            <h1 class="mb-0">
                Vous avez des questions ? Nous serrons ravi d'y répondre !
            </h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Téléphone</h5>
                        <h4 class="text-primary mb-0">
                            <a href="tel:+225 25 20 00 22 42">+225 25 20 00 22 42</a>
                            /
                            <a href="tel:+225 07 48 46 35 49">+225 07 48 46 35 49</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Adresse mail</h5>
                        <h4 class="text-primary mb-0">
                            <a href="mailto:contact@foloschool.com">contact@foloschool.com</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input required id="customer_name" name="customer_name" type="text"
                                class="form-control border-0 bg-light px-4" placeholder="Votre nom complet"
                                style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input required id="customer_email" name="customer_email" type="email"
                                class="form-control border-0 bg-light px-4" placeholder="Votre adresse mail"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input required id="customer_subject" name="customer_subject" type="text"
                                class="form-control border-0 bg-light px-4" placeholder="Sujet" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea required id="customer_message" name="customer_message" class="form-control border-0 bg-light px-4 py-3"
                                rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" id="send-btn" onclick="sendMessage()"
                                type="button">Laisser un message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.413600573463!2d-3.9716598855167122!3d5.353682237140741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ec930d2d531f%3A0x22909b112c938277!2sPeace%20And%20Unity%20Center!5e0!3m2!1sfr!2sci!4v1652562965854!5m2!1sfr!2sci"
                    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
