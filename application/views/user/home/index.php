<style type="text/css">
    section::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100px;
        background: linear-gradient(to bottom, #000, transparent);
        z-index: 1000;

    }

    .card {
        margin-top: 5%;
    }

    .card a {
        color: black;
        text-decoration: none;

    }

    .card svg {
        margin-top: 20px;
    }

    .card svg:hover {
        color: orangered;
    }
</style>

<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/home/slide1.png" class="d-block w-100" alt="" style="max-height:800px; min-height:400px">
            </div>
        </div>
    </div>
</section>

<div class="block pt-3 pb-3" style="justify-content: center; font-family: 'Poppins';">
    <div class="container ">
        <div class="row mt-5">
            <div class="col-xl">
                <a class="weatherwidget-io" href="https://forecast7.com/en/n6d17106d76/west-jakarta/" data-label_1="JAKARTA BARAT" data-icons="Climacons Animated" data-theme="pure" style="display: block; position: relative; height: 98px; padding: 0px; overflow: hidden; text-align: left; text-indent: -299rem;">JAKARTA BARAT<iframe id="weatherwidget-io-0" class="weatherwidget-io-frame" title="Weather Widget" scrolling="no" frameborder="0" width="100%" src="https://weatherwidget.io/w/" style="display: block; position: absolute; top: 0px; height: 98px;"></iframe></a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');
                </script>
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container">
    <div class="container position-relative zindex-5 text-center mt-lg-4 ">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/home/download.png" class="d-block w-100" style="max-height:800px; min-height:320px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/home/pasar.jpg" class="d-block w-100" style="height:500px; min-height:320px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" style="max-height:500px; min-height:320px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <h1 class="display-1 pt-4 mt-sm-3"><span class="text-black fw-normal">Selamat Datang di Website </span><span class="d-inline-flex align-items-center"><span class="text" style="color:orangered">Kelurahan Palmerah</span></span></h1>
        </div>
        <div class="row g-0 my-5">
            <div class="col-md-4">
                <img src="assets/img/home/lurah.jpg" class="img-fluid rounded-circle mx-3 my-5" alt="..." style="max-height:350px; min-height:200px">
            </div>
            <div class="col-md-8 my-auto">
                <div class="card-body mx-5">
                    <h4 class="card-title">Sambutan Lurah </h4>
                    <p class="card-text"><small class="text-muted">“Segala Puji Syukur kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, yang dengan rahmat-Nya telah mengantarkan Institusi ini menjadi sebuah Institusi yang semakin eksis sesuai dengan visi dan misi Pemerintah Kota Bandung. Dalam menghadapi tantangan zaman, terutama menghadapi penyelenggaraan pemerintahan dalam rangka pelayanan publik sangat memerlukan Good Governance yang siap menjamin transparansi, efisiensi dan efektivitas penyelenggaraan pemerintahan melalui Sistem Informasi (SI).
                            Sebagai informasi kepada masyarakat sehubungan dengan telah aktifnya content subdomain kelurahan Antapani Kidul, kami berharap kedepan agar masyarakat memahami tentang keberadaan Kantor Kelurahan Antapani Kidul Kota Bandung yang telah membuat beberapa kebijakan, kegiatan, program serta rencana strategis yang disusun sesuai dengan kebutuhan untuk masyarakat di bidang teknologi informasi untuk pelayanan dalam rangka pengembangan dan penerapan e-Government sebagai bagian dari kebijakan dan strategi nasional pemerintah guna mewujudkan kepemerintahan yang baik (good governance).
                            Oleh karena itu, kritik dan saran yang positif dan membangun sangatlah kami harapkan, agar kita dapat mencapai apa yang telah direncanakan dan kita cita-citakan bersama, guna membangun daerah yang kita cintai ini agar lebih baik dan berkembang sebagaimana harapan kita bersama.”</small></p>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <a class="layanan" href="<?php base_url() ?>layanan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                        <h5 class="card-title mt-5">Informasi layanan</h5>
                        <p class="card-text">Dengan Informasi Layanan Warga Kelurahan Palmerah dapat melihat layanan yang tersedia di kelurahan Palmerah</p>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a class="layanan" href="<?php base_url() ?>terbaru">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                        <h5 class="card-title mt-5">Update Berita Terbaru</h5>
                        <p class="card-text">Warga dapat melihat Berita Terbaru dan Terhangat seputar Wilayah Lebak Bulus</p>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a class="layanan" href="<?php base_url() ?>home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                            <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                        </svg>
                        <h5 class="card-title mt-5">CS 24/7</h5>
                        <p class="card-text">Warga Lebak Bulus dapat bertanya seputar Informasi yang berada di Lebak Bulus</p>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a class="layanan" href="<?php base_url() ?>home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <h5 class="card-title mt-5">Live Chat</h5>
                        <p class="card-text">Warga Lebak Bulus dapat Berkomunikasi dengan Warga Lebak Bulus lainnya.</p>
                    </a>
                </div>

            </div>
        </div><br>
        <h1 class="card-title mt-sm-5">Info Terkini</h1>
        <div class=" accordion accordion-flush my-5" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
</div>