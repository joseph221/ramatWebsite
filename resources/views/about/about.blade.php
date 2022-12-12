@extends('layouts.app')
@section('content')
     <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row" style="background-image: url('{{ asset('assets/images/downloads/slider1.jpg') }}')">
        <div class="container">
            <div class="row ">
                <h2 class="text-white">About Our Charity</h2>
                <ul>
                    <li> <a href="{{ route('home') }}" class="text-white"><i class="fas fa-home text-white"></i> Home</a></li>
                    <li class="text-white"><i  class="fas fa-angle-double-right text-white"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>


    <!--  ************************* About Us Starts Here ************************** -->    
    
    <div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our Charity</h2>
                <p>RAMAT TANZANIA ORGANISATION (RATO)</p>
                <p> Ramat Tanzania is a non governmental organisation that was established in 2019.</p>

                <p>Among other objectives, Ramat Tanzania aims to unite all social and environmental conscious people of Tanzania in joining efforts to create balance between 
                    human activities and the environment by minimizing the impact excreted today. Also, Ramat Tanzania intend  to act as an  instrument of solving and addressing social issues that it represent, dealing with human activities in relation to well being of flora and fauna which surrounds mankind, 
                    to preserve nature and natural heritage and to carry out research projects in providing solutions to the current global crisis on environment. </p>
                <p>In brief, Ramat Tanzania has some specific objectives such 
                    as promotion of environmental conservation, resource tenure security and 
                    sustainable resource management, to identify, assist and participate in rural development 
                    progress for any activity aimed at improving the equality of life of people regardless of 
                    their tribe, sex, religion etc. 
                    But also we aim to promote education on its diversity.</p>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                        <i class="fas fa-user"></i>
                            <p>Becom a Volunteer</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                        <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundrais</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                        <i class="fas fa-donate yell"></i>
                            <p>Giv Donation</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-qcard ">
                        <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>     



    <!-- ################# Mission Vision Start Here #######################--->

    <section id='miss&viss' class="container-fluid mission-vision">
    <div class="container">
        <div class="row mission">
            <div class="col-md-6 mv-det">
                <h1>Our Mission</h1>
                <p>Organization’s mission is to build cooperative communities and to end environmental problems, hunger and poverty and educated children for better future.</p>
            </div>
            <div class="col-md-6 mv-img">
                <img src="{{ asset('assets/images/downloads/mission.jpg') }}" alt="">
            </div>
        </div>
        <div class="row vision">
            <div class="col-md-6 mv-img">
                <img src="{{ asset('assets/images/downloads/vission.jpg') }}" alt="">
            </div>
            <div class="col-md-6 mv-det">
                <h1>Our Vision</h1>
                <p>Organization envision for happy and poverty free rural communities in Tanzania.</p>
            </div>
        </div>
    </div>
    </section>  

   <!-- ################# team Start Here #######################--->
   <div class="bound-narrow" id="ourteam">


    <div id="block_eaf5a154f5e42c26598b971bf7b9e8ee" class="nmc-block nmc-block--introduction alignfull">
        <div class="bound-layout">
            <h2 class="block-title">Meet RATAO team</h2>
            <div class="intro-text">
                <p>The RATAO movement is made up of passionate and determined people from all walks of
                    life who are committed to promote environmental friendly ways and raise awareness on economy, health, 
                    education, political, culture, moral, tradition and its impact on environment base on daily human life. 
                </p>

                <div class="block-button">
                    <a href="#" class="btn">Work With Us</a>
                </div>
            </div>
        </div>
    </div>



    <hr class="wp-block-separator has-css-opacity">




    <div id="block_f3af5c263ffa8b675b81390b9328d10e" class="nmc-block nmc-block--people alignfull">
        <div class="bound-layout">
            <h2 class="block-title">Leadership Team</h2>
            <div class="people">
                <div class="person">
                    <h3 class="person-name">Leonard Josephat Kileo</h3>
                    <div class="person-title">Executive Director  </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Joseph Kasaine Ole Sanguyani</h3>
                    <div class="person-title">Administrative Coordinator</div>
                </div>
                <div class="person">
                    <h3 class="person-name">Aloyce Charles Bukwimba</h3>
                    <div class="person-title">Program Manager..</div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="block_6b3b63f60bf93e9d016d024bc92e421c" class="nmc-block nmc-block--people alignfull">
        <div class="bound-layout">
            <h2 class="block-title">Marketing Team</h2>
            <div class="people">
                <div class="person">
                    <h3 class="person-name">Brandon Worth</h3>
                    <div class="person-title">Vice President of Digital Fundraising and Marketing</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-illinois.svg"
                                alt="illinois">
                        </div>
                        <div class="person-location_text">
                            Chicago
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Eric Donley</h3>
                    <div class="person-title">Director, Salesforce Products and Program Data</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-california.svg"
                                alt="california">
                        </div>
                        <div class="person-location_text">
                            Oakland
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Srijan Tamrakar</h3>
                    <div class="person-title">Senior Graphic Designer</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-california.svg"
                                alt="california">
                        </div>
                        <div class="person-location_text">
                            Oakland
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Kristen Lawson</h3>
                    <div class="person-title">Director of Digital Marketing &amp; Fundraising</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-usa.svg" alt="usa">
                        </div>
                        <div class="person-location_text">
                            U.S.
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Wendy Herman</h3>
                    <div class="person-title">Director of Marketing</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-usa.svg" alt="usa">
                        </div>
                        <div class="person-location_text">
                            United States
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Caryn Bladt</h3>
                    <div class="person-title">Marketing Manager, buildOn Global</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-michigan.svg"
                                alt="michigan">
                        </div>
                        <div class="person-location_text">
                            Detroit
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Hollyanne Compton</h3>
                    <div class="person-title">Special Events Director</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-usa.svg" alt="usa">
                        </div>
                        <div class="person-location_text">
                            United States
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="block_77ab45e61c312f0abdae45757449d164" class="nmc-block nmc-block--people alignfull">
        <div class="bound-layout">
            <h2 class="block-title">buildOn Global Team</h2>
            <div class="people">
                <div class="person">
                    <h3 class="person-name">Rosann Jager</h3>
                    <div class="person-title">Chief Operating Officer, Global</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-michigan.svg"
                                alt="michigan">
                        </div>
                        <div class="person-location_text">
                            Detroit
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Djibril Ouattara</h3>
                    <div class="person-title">Chief Program Officer, Global</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-burkina-faso.svg"
                                alt="burkina-faso">
                        </div>
                        <div class="person-location_text">
                            Burkina Faso
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Suze Charles</h3>
                    <div class="person-title">Country Director, Haiti</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-haiti.svg" alt="haiti">
                        </div>
                        <div class="person-location_text">
                            Haiti
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Nirmala Chaudhary</h3>
                    <div class="person-title">Country Director, Nepal</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-nepal.svg" alt="nepal">
                        </div>
                        <div class="person-location_text">
                            Nepal
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">McDonald Chiputula</h3>
                    <div class="person-title">Country Director</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-malawi.svg" alt="malawi">
                        </div>
                        <div class="person-location_text">
                            Malawi
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Danilo Llanes Gutierrez</h3>
                    <div class="person-title">Global Regional Director, Americas</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-nicaragua.svg"
                                alt="nicaragua">
                        </div>
                        <div class="person-location_text">
                            Nicaragua
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Alhousseyni Maiga</h3>
                    <div class="person-title">Country Director, Mali</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-mali.svg" alt="mali">
                        </div>
                        <div class="person-location_text">
                            Mali
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Assane Ngom</h3>
                    <div class="person-title">Country Director, Senegal</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-senegal.svg"
                                alt="senegal">
                        </div>
                        <div class="person-location_text">
                            Senegal
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Jocelyne Tenkouano</h3>
                    <div class="person-title">Country Director, Burkina Faso</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-burkina-faso.svg"
                                alt="burkina-faso">
                        </div>
                        <div class="person-location_text">
                            Burkina Faso
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Carlos Zeledón Lanuza</h3>
                    <div class="person-title">Country Director, Nicaragua</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-nicaragua.svg"
                                alt="nicaragua">
                        </div>
                        <div class="person-location_text">
                            Nicaragua
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">John Sorek</h3>
                    <div class="person-title">Trek Director</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-new_york.svg"
                                alt="new_york">
                        </div>
                        <div class="person-location_text">
                            New York
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div id="block_4d27169e492aa6f9b63845e97170f0c3" class="nmc-block nmc-block--people alignfull">
        <div class="bound-layout">
            <h2 class="block-title">Finance </h2>
            <div class="people">
                <div class="person">
                    <h3 class="person-name">Zephania Elias Ngweni</h3>
                    <div class="person-title">Finance Manager </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="block_2cb5f3210ce4386f0349221a9d334314" class="nmc-block nmc-block--people alignfull">
        <div class="bound-layout">
            <h2 class="block-title">Human Resources</h2>
            <div class="people">
                <div class="person">
                    <h3 class="person-name">Jemar Ward</h3>
                    <div class="person-title">Global Director of HR and Equity, Diversity &amp; Inclusion
                    </div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-connecticut.svg"
                                alt="connecticut">
                        </div>
                    </div>
                </div>
                <div class="person">
                    <h3 class="person-name">Linda Marquez</h3>
                    <div class="person-title">Human Resources Manager</div>
                    <div class="person-location">
                        <div class="person-location_icon">
                            <img loading="lazy" src="./Staff _ buildOn_files/location-connecticut.svg"
                                alt="connecticut">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

@endsection