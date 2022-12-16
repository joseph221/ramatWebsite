
@extends('layouts.app')
@section('content')
<style>
    .image-div{
        height: 100px;
        width: 100px;
        border: 2px solid black;
        border-radius: 50%;
        overflow: hidden;
        justify-content: center;
    }

</style>
     <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Ramat</h2>
                <ul>
                    <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
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
   <section id="ourteam">
    <div class="bound-layout p-5">
        <h2 class="block-title">Meet RATAO team</h2>
        <div class="intro-text">
            <p>The RATAO movement is made up of passionate and determined people from all walks of
                life who are committed to promote environmental friendly ways and raise awareness on economy, health, 
                education, political, culture, moral, tradition and its impact on environment base on daily human life. 
            </p>

            {{-- <div class="block-button">
                <a href="#" class="btn">Work With Us</a>
            </div> --}}
        </div>
     </div>
   
    <hr>

    <div class="bound-layout p-5">
        <h2 class="block-title">Leadership Team</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="image-div">
                    <img src="{{ asset('assets/images/downloads/poorstudent.jpg') }}" height="100" width="100" alt="" srcset="">
                </div>
                <h6>Leonard Josephat Kileo</h6>
                <div >Executive Director  </div>
            </div>
            <div class="col-md-4">
                <div class="image-div">
                    <img src="{{ asset('assets/images/downloads/poorstudent.jpg') }}" height="100" width="100" alt="" srcset="">
                </div>
                <h6 >Joseph Kasaine Ole Sanguyani</h6>
                <div >Administrative Coordinator</div>
            </div>
            <div class="col-md-4">
                <div class="image-div">
                    <img src="{{ asset('assets/images/downloads/poorstudent.jpg') }}" height="100" width="100" alt="" srcset="">
                </div>
                <h6 >Aloyce Charles Bukwimba</h6>
                <div>Program Manager..</div>
            </div>
        </div>
    </div>

    <div class="bound-layout p-5">
        <h2 class="block-title ">Finance </h2>
        <div class="row ">
            <div class="col-md-4 justify-content-center">
                <div class="image-div">
                    <img src="{{ asset('assets/images/downloads/poorstudent.jpg') }}" height="100" width="100" alt="" srcset="">
                </div>
                <h6 class="person-name">Zephania Elias Ngweni</h3>
                <div class="person-title">Finance Manager </div>
            </div>
        </div>
      
    </div>
   </section>


    <section id="patners">
        <center><h4 style="color: rgb(162,216,35)">Patner With Us</h4></center>
        <div class="container p-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="imgP">
                        <a href="https://cordstanzania.org/">
                            <img src="{{ asset('assets/images/CORD.png') }}" height="200" width="400" alt="" srcset="">
                        </a>
                       
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="imgP">
                        <a href="https://aylftanzania.org/">
                            <img src="{{ asset('assets/images/AYLF-Tanzania-Logo.jpg') }}" alt="" srcset="">
                        </a>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="imgP">
                        <a href="https://cordstanzania.org/">
                            <img src="{{ asset('assets/images/CORD.png') }}" height="200" width="400" alt="" srcset="">
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
      
    </section>
@endsection