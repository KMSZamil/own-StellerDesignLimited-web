@extends('layouts.frontend.master')

@section('page_title')
    Steller Design Ltd
@endsection

@section('main_section')
    <div class="bgded overlay" style="background-image:url('{{ asset('storage/Banner.jpg') }}');">
        <div id="pageintro" class="hoc clear">
            <article>
                <h3 class="heading">Stellar Designs Ltd</h3>
                <p>Stellar Designs Ltd is a leading apparel sourcing company based in Dhaka,
                    Bangladesh.</p>
                <footer><a class="btn" href="#about">Read More</a></footer>
            </article>
        </div>
    </div>
    <div class="wrapper row3" id="about">
        <main class="hoc container clear">
            <!-- main body -->
            <section class="group shout">
                <article>
                    <h1><strong>Company History</strong></h1>
                    <p><b>Stellar Designs Ltd</b> is a leading apparel sourcing company based in Dhaka,
                        Bangladesh. Over the years it has culminated notable experience in producing
                        ready-made garments consisting of both knit and woven wear to renowned clothing
                        brands and importers in the US, Canadian and European markets.</p>
                    <p>The team of Stellar consists of the perfect mix of talented, experienced and dynamic
                        employees who can cater to the needs of its clients by pledging the best workmanship
                        and on-time shipment of quality merchandise along with offering its customers the
                        most competitive prices. Hence, the notable difference between Stellar Designs and
                        other apparel companies in Bangladesh can be witnessed in its quality of work and the
                        overall work practice which makes it easy for the clients to handle their business
                        overseas.</p>
                    <p>The team of Stellar Designs Ltd is classed into two divisions: the knit division and the
                        woven division. The company operations is headed by Mr. Gamini Perera, the CEO of
                        Stellar Designs Ltd, a man who many in this field deem as a pioneer in establishing the
                        ready-made garments sector in Bangladesh due to the pivotal roles he had played
                        while serving in top managerial positions in some of the most renowned ready-made
                        garment manufacturing and sourcing companies, in both Bangladesh and Sri Lanka.
                        The man with 30 years of experience under his belt, is a task enforcer and firmly
                        believes in the moto – “Customer is King” by which he enables and motivates the
                        team of Stellar to achieve the impossible.</p>
                </article>
            </section>
            <div class="clear"></div>
            {{-- <section class="group shout">
                <figure class="one_half first"><img src="{{ asset('assets/frontend/images/demo/546x356.png') }}"
                        alt="">
                    <figcaption class="heading"><a href="#">Accumsan placerat</a></figcaption>
                </figure>
                <figure class="one_half"><img src="{{ asset('assets/frontend/images/demo/546x356.png') }}" alt="">
                    <figcaption class="heading"><a href="#">Scelerisque etiam</a></figcaption>
                </figure>
            </section> --}}
            <!-- / main body -->
        </main>
    </div>

    <div class="wrapper coloured">
        <section id="testimonials" class="hoc container clear">
            <div class="sectiontitle">
                <p class="nospace font-xs">WE STRIVE TO MAKE
                    SUSTAINABILITY
                    THE CORE OF
                    EVERY BUSINESS
                    WE UNDERTAKE.</p>
                <h6 class="heading font-x2">Our Mission</h6>
            </div>
            <article>
                <blockquote>The mission is to provide value added service and quality to our customers for every
                    cent they spend when sourcing their ready-made garments from us, as well as
                    offering the most competitive prices. The team of Stellar is also very particular about
                    maintaining liaison and round the clock unhindered communication with its buyers, for
                    which it has always been appreciated.</blockquote>
            </article>
        </section>
    </div>

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <section class="group shout">
                <figure class="one_half first"><img src="{{ asset('assets/frontend/images/collected/ceo.jpg') }}"
                        alt="">
                    <figcaption class="heading">Gamini Perera<br>Chairman and CEO</figcaption>
                </figure>
                <article class="one_half">
                    <h1 class="heading"><b>Message from the CEO</b></h1>
                    <p>The Bangladesh ready-made garments sector is going through its golden era is what I
                        would say. This is the best time for apparel buyers from all over the world to start
                        thinking of sourcing their garments and other apparel merchandise from Bangladesh.</p>
                    <p>Bangladesh offers the lowest labor cost compared to any other garments producing
                        country in the world, which is why we will be able to offer our clients the most
                        competitive prices and maximize the profitability of our customers.</p>
                </article>
            </section>
            <div class="clear"></div>
        </main>
    </div>
    <div class="wrapper row3" style="background-color: #DEDEDE">
        <main class="hoc container clear">
            <!-- main body -->
            <section class="group shout">
                <article class="one_half first">
                    <h1 class="heading"><b>Message from the Managing Director</b></h1>
                    <p>The Bangladesh ready-made garments sector is going through its golden era is what I
                        would say. This is the best time for apparel buyers from all over the world to start
                        thinking of sourcing their garments and other apparel merchandise from Bangladesh.</p>
                    <p>Bangladesh offers the lowest labor cost compared to any other garments producing
                        country in the world, which is why we will be able to offer our clients the most
                        competitive prices and maximize the profitability of our customers.</p>
                </article>
                <figure class="one_half"><img src="{{ asset('assets/frontend/images/collected/md.jpg') }}" alt="">
                    <figcaption class="heading">Ashiq Seraj<br>Managing Director</figcaption>
                </figure>
            </section>
            <div class="clear"></div>
        </main>
    </div>

    <div class="wrapper row3">
        <section class="hoc container clear">
            <section id="introblocks">
                <ul class="nospace group elements elements-four">
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-check-circle"></i></a>
                            <h6 class="heading">Quality Control & Assurance</h6>
                            <p>Our quality control & assurance is
                                headed by a highly skilled
                                individual, with more than two
                                decades of experience in handling
                                the quality of big brands like Lidl,
                                Aldi, Carrefour and Walmart to
                                name a few.</p>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-file-medical-alt"></i></a>
                            <h6 class="heading">Research & Development</h6>
                            <p>Not many apparel sourcing offices in
                                the country have adopted R&D into
                                their core activity, whereas R&D has
                                been an integral part of Stellar since
                                its inception. We constantly develop
                                new products and dispatch them to
                                our respected clients.</p>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-user-friends"></i></a>
                            <h6 class="heading">Merchandising</h6>
                            <p>With several years of prolific
                                experience in the field, the
                                merchandisers at Stellar Designs
                                Ltd. are thoroughly acquainted with current
                                market trends. We are also highly proficient
                                with the ERP system.</p>
                        </article>
                    </li>
                </ul>
            </section>
            {{-- <div class="sectiontitle">
                <p class="nospace font-xs">Rutrum erat nec mollis augue mauris</p>
                <h6 class="heading font-x2">Ac pede phasellus commodo</h6>
            </div>
            <ul class="pr-charts nospace group center">
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="25"><i></i></div>
                    <p>Porttitor</p>
                </li>
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="50"><i></i></div>
                    <p>Condimentum</p>
                </li>
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="75"><i></i></div>
                    <p>Sollicitudin</p>
                </li>
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="100"><i></i></div>
                    <p>Venenatis</p>
                </li>
            </ul> --}}
        </section>
    </div>

    <div class="wrapper coloured" id="services">
        <section class="hoc container clear">
            <article class="one_third first">
                <h1><b>The Stellar Team</b>
                    <h1>
            </article>
            <article class="one_third">
                Our management team consists of four
                directors with a collective accumulated
                experience of forty five years in the RMG
                sector, they have a profound knowledge in
                the areas of merchandising, quality control
                and assurance, product pricing and
                development.
            </article>
            <article class="one_third">
                They play an active role in maintaining
                liaison with the customers through
                unhindered communication. The employees
                working at Stellar Designs Ltd are
                classified into different departments based
                on their field of expertise.
            </article>
        </section>
    </div>


    <div style="background-color: #DEDEDE">
        <section id="services" class="hoc container clear">
            <ul class="nospace group elements elements-three">
                <li class="one_third">
                    <article><a><i class="fas fa-chart-line"></i></a>
                        <h6 class="heading">Business Development</h6>
                        <p>Stellar Designs Ltd employs a
                            business development manager
                            who is tasked with sourcing new
                            clients and to constantly maintain
                            liaison with the customers and
                            address their issues.</p>
                    </article>
                </li>
                <li class="one_third">
                    <article><a><i class="fas fa-clipboard-list"></i></a>
                        <h6 class="heading">Commercial & Logistics</h6>
                        <p>The commercial and logistics
                            department is bestowed with the
                            responsibility of handling the
                            commercial aspects of the business,
                            such as dealing with banks, L/Cs and
                            dealing with the freight forwarders.</p>
                    </article>
                </li>
                <li class="one_third">
                    <article><a><i class="fas fa-braille"></i></a>
                        <h6 class="heading">Sourcing Department</h6>
                        <p>This department is tasked with
                            sourcing new suppliers,
                            be it for fabrics, trims and all the
                            relevant auxiliaries
                            needed to make a garment.</p>
                    </article>
                </li>
            </ul>
        </section>
    </div>

    <div class="wrapper coloured">
        <section class="hoc container clear">
            <article class="one_half first">
                <figure class="one_half first"><img src="{{ asset('assets/frontend/images/collected/bdm.jpg') }}"
                        alt="">
                    <figcaption class="heading">Prem Jith<br>Business Development Manager</figcaption>
                </figure>
            </article>
            <article class="one_half">
                "At Stellar, we are firm believers that
                a company’s stronghold is its customers.
                Without satisfied customers, a business
                may never thrive. Hence, we consider
                our customers as the greatest asset.
                After all, a satisfied customer is always
                the best business strategy.
                Prem Jith
                Business Development Manager
                Sourcing Department
                This department is tasked with
                sourcing new suppliers,
                be it for fabrics, trims and all the
                relevant auxiliaries
                needed to make a garment.
                Commercial & Logistics
                The commercial and logistics
                department is bestowed with the
                responsibility of handling the
                commercial aspects of the business,
                such as dealing with banks, L/Cs and
                dealing with the freight forwarders.
                Stellar Designs Ltd employs a
                business development manager
                who is tasked with sourcing new
                clients and to constantly maintain
                liaison with the customers and
                address their issues."
            </article>
        </section>
    </div>

    <div style="background-color: #DEDEDE" id="clients">
        <section id="testimonials" class="hoc container clear">
            <div class="sectiontitle">
                <h6 class="heading font-x2" style="color: black">Our Clients</h6>
            </div>
            <article class="one_quarter first">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/lidl.png') }}" alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/auchan.png') }}" alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/jcpenney.png') }}" alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/ferever21.png') }}"
                        alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/walmart.png') }}"
                        alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/lotto.png') }}" alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/jammers.png') }}"
                        alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/kohls.png') }}" alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/ebi.png') }}" alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/carrefour.png') }}"
                        alt="">
                </figure>
            </article>
            <article class="one_quarter">
                <figure class="clear"><img src="{{ asset('assets/frontend/images/client/ife.png') }}" alt="">
                </figure>
            </article>
        </section>


        <div class="wrapper row3" id="suppliers">
            <main class="hoc container clear">
                <section class="group shout">
                    <article>
                        <h1 class="heading"><b>Our Suppliers</b></h1>
                        <p>Our manufacturing units are fully compliant with BSCI, SEDEX, WRAP, ACCORD,
                            ALLIANCE,Oeko-tex. All of them are vertically set and leading manufactures in
                            Bangladesh in respect of woven and knits. The factories we work with are all in line
                            with the buyers’ requirements and the aforementioned compilances. Compliance
                            requirements vary from customer to customer and we do the compliance audit as
                            per the buyers’ requirement before placing orders. Besides, the manufacturing
                            units we work with are capable of producing huge volumes of garments around the
                            year. Our sourcing is tasked with the responsibilities of sourcing factories and
                            performing factory audits.</p>

                        <section class="group shout">
                            <article class="one_quarter first">
                                <figure class="clear"><img
                                        src="{{ asset('assets/frontend/images/suppliers/wrap.png') }}" alt="">
                                </figure>
                            </article>
                            <article class="one_quarter">
                                <figure class="clear"><img
                                        src="{{ asset('assets/frontend/images/suppliers/bsci.png') }}" alt="">
                                </figure>
                            </article>
                            <article class="one_quarter">
                                <figure class="clear"><img
                                        src="{{ asset('assets/frontend/images/suppliers/sedex.png') }}" alt="">
                                </figure>
                            </article>
                            <article class="one_quarter">
                                <figure class="clear"><img
                                        src="{{ asset('assets/frontend/images/suppliers/okeotex.png') }}" alt="">
                                </figure>
                            </article>
                        </section>
                        <p><b>Stellar Designs Ltd</b> is also an associate member of the leading and most
                            prestigious trade body of Bangladesh, the Bangladesh Garments and Exporters
                            Manufacturers Association (BGMEA).</p>
                    </article>
                </section>
                <div class="clear"></div>
            </main>
        </div>


        <div class="wrapper gradient" id="directors">
            <div class="hoc container clear">
                <div class="sectiontitle">
                    <h6 class="heading font-x2">Board of Directors</h6>
                </div>
                <ul class="nospace group team">
                    <li class="one_quarter first">
                        <figure><a><img src="{{ asset('assets/frontend/images/collected/d3.jpg') }}"
                                    alt="Gamini Perera"></a>
                            <figcaption><strong>Gamini Perera</strong> <em>Chairman and CEO</em></figcaption>
                        </figure>
                    </li>
                    <li class="one_quarter">
                        <figure><a><img src="{{ asset('assets/frontend/images//collected/d2.jpg') }}"
                                    alt="Ashiq Seraj"></a>
                            <figcaption><strong>Ashiq Seraj</strong> <em>Managing Director</em></figcaption>
                        </figure>
                    </li>
                    <li class="one_quarter">
                        <figure><a><img src="{{ asset('assets/frontend/images//collected/d1.jpg') }}"
                                    alt="Imayan V. Rajah"></a>
                            <figcaption><strong>Imayan V. Rajah</strong> <em>Director</em></figcaption>
                        </figure>
                    </li>
                    <li class="one_quarter">
                        <figure><a><img src="{{ asset('assets/frontend/images/collected/d2.jpg') }}"
                                    alt="Raafi Zakaria"></a>
                            <figcaption><strong>Raafi Zakaria</strong> <em>Director</em></figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>

        <div class="wrapper row2" id="contactus">
            <section id="ctdetails" class="hoc container clear">
                <div class="sectiontitle">
                    <h6 class="heading font-x2">Contact US</h6>
                </div>
                <figure>
                    <ul class="nospace group team">
                        <li class="one-third first"><a><i class="fas fa-map-marker-alt"></i></a>
                            <span><strong>Address:</strong> House 531/2
                                Road 11
                                Baridhara DOHS
                                Dhaka 1206
                                Bangladesh</span></li>
                        <li class="one-third"><a><i class="fas fa-envelope"></i></a> <span><strong>Send
                                    us a
                                    mail:</strong> i.director@stellardesignsltd.com ||
                                info@stellardesignsltd.com</span></li>
                        <li class="one-third"><a><i class="fas fa-mobile-alt"></i></a>
                            <span><strong>Phone:</strong> +880 199 780 0054</span>
                        </li>
                    </ul>
                </figure>
            </section>
        </div>
    @endsection
