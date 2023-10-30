<?php $currentPage = 'industry'; ?>
<?php include("_header.php"); ?>
<title>Automotive</title>
<style>
    .nav-link {
        position: relative;
        /* background-color: transparent !important; */
    }

    .nav-link.active::after {
        content: "";
        display: block;
        border-bottom: 2px solid #fd9b28;
        /* Color of the underline */
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;

    }

    .card {
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        z-index: 1;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }

    .col {
        flex: 1;
    }
</style>
<section class="about-faq sec-padd py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>Automotive</h2>
            <!-- <h4>Make Industry 4.0 your everyday reality</h4> -->
            <p class="mt-3">Carmakers, suppliers, and dealerships are under intense pressure to transform their
                businesses and prepare for the future of mobility. </p>
        </div>
        <img src="../img/automotive.jpg" class="img-fluid" alt="...">
    </div>
    <div class="container px-4" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#collection"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">EV manufacturing and adoption</h3>
                <p>The race is on to meet demand for plug-in, hybrid, and fuel cell EVs – boosting EV battery, vehicle,
                    and charging station manufacturing.
                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Connected cars and advanced driver assistance systems </h3>
                <p>Connected cars and ADAS systems are the future for carmakers, whose buyers will increasingly demand
                    seamless send-and-receive car data.
                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Mobility as a service (MaaS) and shared mobility
                </h3>
                <p>Auto OEMs are bringing new car sharing options to the shared mobility and e-hailing market – driving
                    sustainability and better value.
                </p>

            </div>
        </div>
        <div class="row g-4 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#collection"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Resilient automotive supply chains
                </h3>
                <p>More resilient automotive supply chains are needed to meet demand for EV components and combat car
                    battery and auto chip shortages.
                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Automotive digital retailing</h3>
                <p>Contactless car buying and online dealerships – pandemic necessities – are becoming preferred routes
                    for sales, trade-ins, and services.

                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">The drive to sustainability

                </h3>
                <p>Today’s buyers want sustainability in the automotive industry: low carbon footprints, ethical
                    sourcing, sustainable vehicles, and circularity.
                </p>
            </div>
        </div>
        <br>
    </div>
</section>

<div class="container">
    <div class="section-title text-center mb-4">
        <h2>Explore how we can help your automotive business run better</h2>
    </div>
    <!-- <div class="col-lg-10 text-center mx-auto">
        <p class="lead mb-5">SAP's supply chain management portfolio brings all the Industry 4.0 capabilities together
            across
            your ecosystem.
            Combine the power of digital manufacturing in factories and plants with end-to-end business process
            execution
            across
            the supply chain.</p>
    </div> -->

    <div class="d-flex justify-content-center mt-4">
        <ul class="nav nav-pills text-center">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#tab1"
                    style="background-color: white; color: black;">Research, Development, <br> & Engineering</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab2"
                    style="background-color: white; color: black;">Manufacturing & <br> Outbound Logistics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab3"
                    style="background-color: white; color: black;">Responsive Supply <br> Networks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab4" style="background-color: white; color: black;">Sales
                    & <br> Marketing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab5"
                    style="background-color: white; color: black;">Aftermarket <br> Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab6" style="background-color: white; color: black;">Smart
                    Mobility & <br> Transformation</a>
            </li>
        </ul>
    </div>
    <hr>

    <div class="tab-content">
        <div id="tab1" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-info">
                        <div class="text">

                            <p>Design innovative vehicle products and services – and get them to market first – with SAP
                                solutions. Collaborate with partners across the automotive ecosystem, accelerate product
                                development, and help ensure compliance with auto industry standards. </p>
                            <ul>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Innovations based on actual vehicle data, incidents, customer feedback, and market
                                    analysis
                                </li>

                                <li><span class="checkmark"
                                        style="color: orange; font-size: 24px;">&check;</span>What-if simulation for
                                    better decision-making – in auto engineering and downstream</li><br>

                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Integrated, collaborative, and agile product development
                                </li>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Global product safety management and compliance
                                </li>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Integrated everything – from R&D and manufacturing to aftermarket services and
                                    mobility
                                </li><br>
                            </ul>

                        </div>


                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/automotive1.jpg"
                                style="max-width: 100%; height: auto; display: block; margin: 0 auto;">

                        </div>

                    </div>
                </div>

            </div>
            <br>
            <br>
        </div>
        <div id="tab2" class="container tab-pane fade"><br>
            <div class="row">
                <!-- <div class="col-md-6 col-sm-12 col-xs-12"> -->
                    <div class="about-info">
                        <div class="text">

                            <p>Run agile, highly autonomous automotive manufacturing, production, and assembly processes
                                using Industry 4.0 and smart factory technologies from SAP. Combine business data with
                                industrial IoT data to maximize manufacturing efficiency, improve sustainability, and
                                cut costs.</p>
                            <ul>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Smart auto manufacturing systems in the cloud
                                </li><br>

                                <li><span class="checkmark"
                                        style="color: orange; font-size: 24px;">&check;</span>Modular production and
                                    Industry 4.0 scenarios</li><br>

                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Full visibility into shop-floor and top-floor operations
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Environment, health, and safety management
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Integration with the extended supply chain and outbound logistics network
                                </li><br>


                            </ul>

                        </div>


                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/automotive1.jpg"
                                style="max-width: 100%; height: auto; display: block; margin: 0 auto;">

                        </div>

                    </div>
                </div> -->

            </div>
            <br>
            <br>
        </div>
        <div id="tab3" class="container tab-pane fade"><br>
            <div class="row">
                <!-- <div class="col-md-6 col-sm-12 col-xs-12"> -->
                    <div class="about-info">
                        <div class="text">

                            <p>Create a fast, responsive, and resilient automotive supply chain. Our solutions support
                                collaborative supply chain planning; digitalized operations; and smart warehousing,
                                inventory, and logistics, enabling you to proactively sense disruptions, reduce your
                                carbon footprint, deliver ahead of demand, and more. </p>
                            <ul>
                                <li><span class="checkmark"
                                        style="color: orange; font-size: 24px;">&check;</span>Real-time demand
                                    management and order promising</li><br>

                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Response, supply, inventory, and operations planning
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Smart warehousing, transportation, and logistics
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Supply network collaboration
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Green and sustainable supply chain management
                                </li><br>


                            </ul>

                        </div>


                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/automotive1.jpg"
                                style="max-width: 100%; height: auto; display: block; margin: 0 auto;">

                        </div>

                    </div>
                </div> -->

            </div>
            <br>
            <br>
        </div>
        <div id="tab4" class="container tab-pane fade"><br>
            <div class="row">
                <!-- <div class="col-md-6 col-sm-12 col-xs-12"> -->
                    <div class="about-info">
                        <div class="text">
                            <p>Deliver personalized, differentiated automotive experiences that create customers for
                                life. Connect data from all sources – sales, service, marketing, and connected cars – to
                                get deeper insights and proactively meet customer needs on every channel, and leverage
                                solutions for real-time contextual marketing, omnichannel sales, billing, and more</p>
                            <ul>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    360-degree customer profiles and personalized engagements
                                </li><br>

                                <li><span class="checkmark"
                                        style="color: orange; font-size: 24px;">&check;</span>Digital automotive
                                    retailing and omnichannel sales</li><br>



                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Smooth billing and buying experiences

                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Robust sales performance management

                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Optimized vehicle distribution chains

                                </li><br>
                            </ul>

                        </div>


                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/automotive1.jpg"
                                style="max-width: 100%; height: auto; display: block; margin: 0 auto;">

                        </div>

                    </div>
                </div> -->

            </div>
            <br>
            <br>
        </div>
        <div id="tab5" class="container tab-pane fade"><br>
            <div class="row">
                <!-- <div class="col-md-6 col-sm-12 col-xs-12"> -->
                    <div class="about-info">
                        <div class="text">

                            <p>Grow revenue and drive brand loyalty by offering automotive aftermarket services that
                                exceed customer expectations. SAP solutions support omnichannel customer service, parts
                                management, warranty claims processing and complaint handling.</p>
                            <ul>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Omnichannel customer service management
                                </li><br>

                                <li><span class="checkmark"
                                        style="color: orange; font-size: 24px;">&check;</span>Aftermarket auto parts
                                    management </li><br>



                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Warranty claims management
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Complaint handling
                                </li><br>
                            </ul>

                        </div>


                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/automotive1.jpg"
                                style="max-width: 100%; height: auto; display: block; margin: 0 auto;">

                        </div>

                    </div>
                </div> -->

            </div>
            <br>
            <br>
        </div>
        <div id="tab6" class="container tab-pane fade"><br>
            <div class="row">
                <!-- <div class="col-md-6 col-sm-12 col-xs-12"> -->
                    <div class="about-info">
                        <div class="text">
                            <p>Create value and monetize new business models for autonomous, connected, electric, and
                                shared vehicles with SAP. Our solutions can help you personalize in-car services,
                                support subscription-based contracts, manage e-fleets, build and run EV charging
                                networks, and more. Embrace change in the industry and shift toward mobility as a
                                service (MaaS). </p>
                            <ul>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Connected vehicle data hub
                                </li><br>

                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>Urban
                                    and remote EV charge-point operations </li><br>



                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    End-to-end fleet management
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    IoT-based logistics and transportation management
                                </li><br>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Subscription billing and invoicing
                                </li><br>
                            </ul>

                        </div>


                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/automotive1.jpg"
                                style="max-width: 100%; height: auto; display: block; margin: 0 auto;">

                        </div>

                    </div>
                </div> -->

            </div>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <div class="section-title text-center mb-4">
        <h2>Explore how we can help your automotive business run better</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col">
            <div class="card h-100" style="background-color: #eaeaea;">
                <!-- <img src="../img/bmw-customer-logo.svg" height="100vh" class="card-img-top mt-3" alt="..."> -->
                <div class="card-body" style="padding-top: 50px;"><center>
                    <h3 class="card-title ">Research, Development, & Engineering</h3></center>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="background-color: #eaeaea;">
                <!-- <img src="../img/bmw-customer-logo.svg" height="100vh" class="card-img-top mt-3" alt="..."> -->
                <div class="card-body" style="padding-top: 50px;"><center>
                    <h3 class="card-title ">Manufacturing &
                        Outbound Logistics</h3></center>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="background-color: #eaeaea;">
                <!-- <img src="../img/bmw-customer-logo.svg" height="100vh" class="card-img-top mt-3" alt="..."> -->
                <div class="card-body" style="padding-top: 50px;"><center>
                    <h3 class="card-title ">Responsive Supply
                        Networks</h3></center>

                </div>

            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col">
            <div class="card h-100" style="background-color: #eaeaea;">
                <!-- <img src="../img/bmw-customer-logo.svg" height="100vh" class="card-img-top mt-3" alt="..."> -->
                <div class="card-body" style="padding-top: 50px;"><center>
                    <h3 class="card-title ">Sales &
                        Marketing</h3></center>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="background-color: #eaeaea;">
                <!-- <img src="../img/bmw-customer-logo.svg" height="100vh" class="card-img-top mt-3" alt="..."> -->
                <div class="card-body" style="padding-top: 50px;"><center>
                    <h3 class="card-title ">Aftermarket
                        Service</h3></center>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="background-color: #eaeaea;">
                <!-- <img src="../img/bmw-customer-logo.svg" height="100vh" class="card-img-top mt-3" alt="..."> -->
                <div class="card-body" style="padding-top: 50px;"><center>
                    <h3 class="card-title ">Smart Mobility &
                        Transformation</h3></center>

                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>


<?php include("_footer.php"); ?>