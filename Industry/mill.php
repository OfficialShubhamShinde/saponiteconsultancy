<?php $currentPage = 'industry'; ?>
<?php include("_header.php"); ?>
<title>Mill Products</title>

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
</style>
<section class="about-faq sec-padd py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>
                Mill Products
            </h2>
            <p class="mt-3">Today, resiliency and sustainability are crucial to success in the mill products industry –
                and metals, pulp and paper, packaging, and textiles manufacturers are under extreme pressure to adapt.
                Digital modernization is key to achieving this goal and more.</p>
        </div>
        <img src="../img/mill.jpg" class="img-fluid" alt="...">
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
                <h3 class="fs-2 text-body-emphasis">Pulp and paper industry</h3>
                <p>Paper manufacturers – including producers of paper pulp and graphical, brown, and hygiene paper –
                    must deal with frequent supply shocks, rising costs, and labor shortages. Manufacturers must be able
                    to control paper mill costs while ensuring on-time customer delivery – adapting quickly to source
                    new suppliers and transport options as needed.
                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Sustainable packaging industry</h3>
                <p>Packaging manufacturers are under pressure to balance costs – from procurement to manufacturing to
                    transport – across plastic, recyclable, compostable, or biodegradable packaging. Manufacturers must
                    manage physical assets for peak efficiency, create quotes fast, and complete orders as expected to
                    please customers while meeting sustainability goals.

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
                <h3 class="fs-2 text-body-emphasis">Textile industry
                </h3>
                <p>With pressure from eco-conscious consumers, textile manufacturers – including carpet and rug, yarn,
                    and fabric manufacturing companies – are moving to the circular economy. To meet sustainability and
                    customer delivery commitments, manufacturers need responsive supply chains to help handle natural
                    resource and materials shortages.


                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Metals industry
                </h3>
                <p>To thrive in today's uncertain world, metal manufacturers need full visibility – from sourcing raw
                    materials to securing spare parts for repair to transportation. Whether for aluminum, sheet metal,
                    steel, or custom metal fabrication, manufacturers must maneuver through shortages and take steps to
                    mitigate the cost and risk of future disruptions.

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
                <h3 class="fs-2 text-body-emphasis">Sustainable industrial materials

                </h3>
                <p>
                    The global focus on emissions, waste reduction, and a circular economy is driving a major shift in
                    industrial materials manufacturing. Low-carbon products, such as green steel and aluminum, are among
                    the eco-friendly materials now in demand. To ensure sustainable production, companies must manage an
                    adequate supply of recycled and green materials.
                </p>

            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle"></use>
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Wire and cable manufacturing

                </h3>
                <p>In both wire manufacturing and cable manufacturing, real-time insight is crucial. Companies must be
                    able to check availability for sales instantly, track progress against plans, and see when customer
                    demand changes while knowing when machines are below capacity, quality is off, or trucks are delayed
                    by pinpointing and analyzing exceptions.
                </p>

            </div>

        </div>
        <br>
    </div>

</section>

<div class="container">
    <div class="section-title text-center mb-4">
        <h2>Explore how we can help your mill products business run better</h2>
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
                    style="background-color: white; color: black;">Business Planning</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab2"
                    style="background-color: white; color: black;">Manufacturing and <br> Asset Operations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab3" style="background-color: white; color: black;">
                    Digital <br> Logistics</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab4" style="background-color: white; color: black;">
                    Sustainability </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab5" style="background-color: white; color: black;">
                    Customer Relationships <br> and Experience </a>
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

                            <p>Transform your supply chain into a demand-driven network by aligning strategic,
                                financial, commercial, and operational goals. You can plan inventory and supply through
                                cross-functional collaboration, analysis, and optimization of demand signals, supply
                                constraints, and financial considerations – then translate the plan into actionable
                                targets for execution systems.
                            </p>
                            <ul>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Demand management and insights


                                </li>

                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>Sales,
                                    inventory, and operations planning

                                </li>

                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Response and supply planning


                                </li>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Portfolio and project management
                                </li>
                                <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                    Product development and configuration
                                </li>
                            </ul>

                        </div>


                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/mill1.jpg"
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

                        <p>Respond to customer demand, manage physical assets to improve asset health, promote
                            collaboration, and accelerate asset performance. By using Industry 4.0, you can develop
                            real-time visibility of manufacturing operations, optimize manufacturing processes, and
                            collaborate in global networks while lowering total manufacturing costs.
                        </p>
                        <ul>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Industrial insights

                            </li>

                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Manufacturing networks, operations, and execution

                            </li>

                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Asset operations, performance, and maintenance


                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Asset collaboration


                            </li>
                        </ul>

                    </div>


                </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/industry4o.png"
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

                        <p>Balance customer service, sustainability, and delivery costs through efficient digital
                            logistics and order fulfillment. By gaining the visibility needed to make efficient
                            logistics and order fulfillment decisions, you can optimize freight, shipping, and warehouse
                            operations.
                        </p>
                        <ul>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>Yard and
                                warehouse management


                            </li>

                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Transportation management

                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Track and trace and logistics networks

                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Order promising

                            </li>



                        </ul>

                    </div>


                </div>
                <!-- </div> -->
                <!--  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/industry4o.png"
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
                        <p>Reduce your environmental footprint by product, plant, and company level by making strategic
                            decisions based on sustainability-related data, establishing a unified approach to
                            sustainability risk assessment, and managing operational risk and compliance by using
                            standardized, workflow-enabled processes to record incidents and trigger investigations.

                        </p>
                        <ul>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Corporate sustainability

                            </li>

                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>Holistic
                                steering and reporting


                            </li>



                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Environmental footprint management


                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Environment, health, and safety

                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>Secondary
                                material acquisition


                            </li>
                        </ul>

                    </div>


                </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/industry4o.png"
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
                        <p>Enable sustainable sales with 360-degree customer insights, sales order commitment, and
                            fulfillment, and empower companies to exceed the expectations of digitally connected
                            customers, win customer loyalty, and drive revenue and profitability through in-context
                            customer experiences across digital and traditional channels.

                        </p>
                        <ul>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Omnichannel commerce and customer service


                            </li>

                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>Configure,
                                price, and quote to cash
                            </li>



                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Sales force automation
                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Sales performance management
                            </li>
                            <li><span class="checkmark" style="color: orange; font-size: 24px;">&check;</span>
                                Marketing as a growth driver
                            </li>
                        </ul>

                    </div>


                </div>
                <!-- </div> -->
                <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                    <div id="main">

                        <div class="accordion" id="faq">

                            <img src="../img/industry4o.png"
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>


<?php include("_footer.php"); ?>