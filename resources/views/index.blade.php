@extends('layouts.app')
@section('content')
<style>
    .try{
        width: 100%;  
        position: relative;
        /* z-index: 0; */
        height: 100vh; 
        /* display: flex; */
        overflow: hidden; 
        /* justify-content: center; */
        /* align-items: flex-end; */
        background-size: cover;
        /* animation: ani1 24s ease-out forwards; */
        /* background-image: url({{ url('assets/images/RIVERS2.jpg') }}); */
        background-color: rgb(44,103,42)
    }
    .patten{
        z-index: 0;
        position: absolute;
    }
    .home-page {
        top: 0;
        width: 100%; 
        height: 600px; 
        border-bottom-left-radius: 25%;
        border-bottom-right-radius: 25%;
        background: red;
        overflow: hidden;
        z-index: 1;
        /* display: grid;
        grid-template-rows: 14vh max-content 18vh;  */
    }
    .back-video{
        z-index: 0;
        width: 100%;
        position: absolute;
        
    }

    /* .home-page::before {
        content:"";
        position:absolute;
        z-index: 1;
        top:0;
        left:0;
        right:0;
        bottom:0;
        height: 70vh;
        background-image: linear-gradient(215deg, #2b963d, #a8c0ff);
        border-bottom-left-radius: 50% 75px;
        border-bottom-right-radius: 50% 75px;
    } */
    .hexagon{
        position: absolute;
        width: 400px;
        height: 280px;
        background: transparent;
        top: 25%;
        left: 10%;
        transform: translate(-10%,-15%) rotate(120deg);
        border-radius: 50%;
        overflow: hidden;
    }
    .hexagon-inner{
        width: 100%;
        height: 100%;
        background: transparent;
        transform: rotate(-60deg);
        border-radius: 50%;
        overflow: hidden;
    }
    .hexagon-inner-in{
        width: 100%;
        height: 100%;
        transform: rotate(-60deg);
        border-radius: 50%;
        overflow: hidden;
        background-size: 60%;
        background-position-x: 50%;
        background-image: url({{ url('assets/images/logo.jpeg') }});
        
    }

    .wrap-text{
        text-align: center;
        font-size: 45px;
        line-height: 55px;
        font-family: poppins;
        /* margin-left: 20%; */
        /* margin-bottom: 50px; */
        z-index:1;
        opacity: 0;
        animation: ani2 0.5s ease-out forwards;
        /* box-shadow: 0 5px 15px rgba(0,0,0, .5); */
        padding: 50px;
    }
    .wrap-text h3{
        opacity: 0;
        margin: 0;
        font-size: 80px;
        color: #fff;
        font-weight: 600;
        transition: 0.5s;
    }

    .wrap-text h3:hover{
        -webkit-text-stroke: 2px #fff;
        color: transparent;
    }
    .wrap-text a {
        text-decoration: none;
        display: inline-block;
        color: #fff;
        font-size: 30px;
        border: 2px solid #fff;
        padding: 14px 70px;
        border-radius: 50px;
        font-weight: 300;
    }
    .wrap-text h3{
        animation: 0.75s ease-out 3s forwards;
    }
    .wrap-text h3.hi{
        animation: ani2 0.75s ease-out 2s forwards;
    }
    .wrap-text h3.hii{
        animation: ani2 0.75s ease-out 4s forwards;
    }
    .wrap-text h3.hiii{
        animation: ani2 0.75s ease-out 6s forwards;
    }
    @keyframes ani2{
        100%{
            opacity: 1;
        }
    }
    @keyframes ani1{
        100%{
            transform: scale(1.55);
        }
    }

.overlay-text {
    transform: translateX(-20%);
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontptour.jpg') }});
    height: 300px;
    width: 300px;
}
.top{
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontour2.jpeg') }});
    z-index: 1;
    margin-top: 150px;
    height: 250px;
    width:  250px;
    margin-left: 10px;
}
.overlay-text {
    transform: translateX(-20%);
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontptour.jpg') }});
    height: 300px;
    width: 300px;
}
.top{
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontour2.jpeg') }});
    z-index: 1;
    margin-top: 150px;
    height: 250px;
    width:  250px;
    margin-left: 10px;
}
.top-young {
    transform: translateX(-20%);
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontptour.jpg') }});
    height: 300px;
    width: 300px;
}
.bottom-young{
    
    z-index: 1;
    margin-top: 150px;
    height: 250px;
    width:  250px;
    margin-left: 10px;
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontour2.jpeg') }});
}
.overlay-text {
    transform: translateX(-20%);
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontptour.jpg') }});
    height: 300px;
    width: 300px;
}
.top{
    z-index: 1;
    margin-top: 150px;
    height: 250px;
    width:  250px;
    margin-left: 10px;
    background-repeat: no-repeat;
    background-image: url({{ url('assets/images/ontour2.jpeg') }});
}
.section-text{
    top: 25%;
    margin-bottom: 50px;
    background: #000;
}
</style>
    <div class="masthead">
       
        <div class="try">
            <svg width="100%" height="100%" class="patten">
   
                <!-- Define the pattern -->
                <pattern id="pattern-chevron" x="0" y="0" patternUnits="userSpaceOnUse" width="100" height="180" viewBox="0 0 10 18"> 
                  
                  <!-- Group the chevron shapes -->
                  <g id="chevron">
                    <!-- Chevron consists of two shapes, a left and a right to form a `v` -->
                    <!-- We'll apply the `fill` in the CSS for flexibility -->
                    <path class="left" d="M0 0l5 3v5l-5 -3z" />
                    <path class="right" d="M10 0l-5 3v5l5 -3" />
                  </g>
                 
                  <!-- Apply the shapes -->
                  <!-- `y="9"` narrows the space between rows  -->
                  <use x="0" y="9" xlink:href="#chevron" />
                
                </pattern>
                
                <!-- The canvas for our pattern -->
                <rect x="0" y="0" width="100%" height="100%" fill="url(#pattern-chevron)" />
               
             </svg>
            <div class="home-page">
                <div class="row">
                    <div class="col">
                        <video autoplay loop  plays-inline class="back-video">
                            <source  src="{{ asset('assets/images/video2.mp4') }}" type="video/mp4">
                        </video>
                        <div class="wrap-text">
                            <h3 class="hi">Lets Create Balance</h3>
                            <h3 class="hii"> Between </h3> 
                            <h3 class="hiii"> Human Activies &amp; Environment </h3> 

                            <a href="#">Donate</a>
                        </div>
                    </div>
                    {{-- <div class="col">
                        <div class="wrap-text">
                            <h3 class="hi" style="color: rgb(162,216,35)">Lets Create Balance</h3>
                            <h3 class="hii" style="color: rgb(162,216,35)"> Between </h3> 
                            <h3 class="hiii" style="color: rgb(162,216,35)"> Human Activies &amp; Environment </h3> 
                        </div>
                    </div> --}}
                </div>
                
                
                
               
            </div>
        </div>
        
        <!-- ******************** Slider Starts Here ******************* -->
    {{-- <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{ asset('assets/images/downloads/slider1.png') }}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">WASTE MANAGEMENT</h1>
                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('assets/images/downloads/slider2.png') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">WOMEN EMPOWERMENT IN TOURISM AND PROTECTED AREAS</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('assets/images/downloads/slider3.png') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title"> HEALTHY ENVIRONMENT IN SCHOOL</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>  --}}
    </div>
    <!--  ************************* About Us Starts Here ************************** -->    
    <div class="about-us">
        <div class="container">
            <div class="session-title">
                <p>Help us to Achieve our Goal</p>
                <h2>About Our Organization</h2>
            </div>
            <div class="about-row row">
                <div class="col-md-8">
                    <div class="abut-detail">
                         <h4>BUILDING SCHOOL IN AFRICAN COMMUNITIES.</h4>
                        <p>In brief, Ramat Tanzania has some specific objectives such as promotion of environmental conservation, resource tenure security and sustainable resource management, to identify, assist and participate in rural development progress for any activity aimed at improving the equality of life of people regardless of their tribe, sex, religion etc. But also we aim to promote education on its diversity.</p>
                    </div>
                    {{-- <div class="row diag-ro">
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                <h5>$500</h5>
                                <p>Raised by your help</p>
                            </div>
                        </div>
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                <h5>$1000</h5>
                                <p>Immediate Need</p>
                            </div>
                        </div>
                        <div class="about-diag">
                            <div class="icon"><i class="fas fa-arrow-right"></i></div>
                            <div class="tex">
                                <h5>$5000</h5>
                                <p>Our initial target</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-4">
                    <img src="assets/images/about_img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="wedo">
        <center><h4 style="color: rgb(162,216,35)">What We Do</h4></center>
        <section class="prog-section pt-2">
            <div class="row p-5">
              <div class="col-3 bottom-waste w-100">
                
              </div>
              <div class="col-3 top-waste">
               
              </div>
              <div class="col-5">
                <h3>WASTE MANAGEMENT</h3>
              <P>Waste management or waste disposal includes the processes and actions required to manage waste from its inception to its final disposal.This includes the collection, transport, treatment and disposal of waste, together with monitoring and regulation of the waste management process and waste-related laws, technologies, economic mechanisms.Waste can be solid, liquid, or gases and each type has different methods of disposal and management. Waste management deals with all types of waste, including industrial, biological, household, municipal, organic, biomedical, radioactive wastes. We (RAMAT) are intended to reduce adverse effects of waste on human health, the environment, planetary resources and aesthetics. <a href="{{ route('waste') }}" style="font-size: 50px; font-weight:300; border:none"> &#8594;</a> </P>
              </div>
            </div>
        </section>
        <section class="prog-section pt-5">
            <div class="row p-5">
              <div class="col-5">
                <h3>WOMEN EMPOWERMENT IN TOURISM AND PROTECTED AREAS</h3>
              <P>United Nations has defined empowerment as a very critical aspect of gender equality and defines both issues as “Gender equality implies a society in which women and men enjoy the same opportunities, outcomes, rights, and obligation in all spheres of life.</P>
              <p>Tourism is one of the growing industry that has an impact on lower as a well higher group of society. Tourism has been seen as one of the tools that can contribute in the women empowerment. Tourism has a strength of improving the lifestyle of people by eliminating poverty, ensuring and improving environmental sustainability and promoting gender equality and empowering women. It is a bit of sadness to say, but in the modern of today, there still is no place where women are treated as same as men be it political, social or economic issue. The gender gap has influenced the world as a whole, and tourism can be one of many tools to put control over this all. <a href="{{ route('women_empower') }}" style="font-size: 50px; font-weight:300; border:none"> &#8594;</a></p>
              </div>
              <div class="col-3 bottom-women w-100">
                
              </div>
              <div class="col-3 top-women">
               
              </div>
            </div>
        </section>
        <section class="prog-section pt-5">
            <div class="row p-5">
              <div class="col-3 bottom-young w-100 fit"></div>
              <div class="col-3 top-young"></div>
              <div class="col-5">
                <h3>YOUNG GENERATION IN TOURISM AND CONSERVATION</h3>
              <P>Access to education for girls is often fraught with difficulties. Families force girls into domestic roles. Schools lack proper hygiene provision, especially for menstrual cycles. And long distances pose high risks of abuse from bus drivers, shopkeepers, and other adults. Tanzania Development Trust funds programs that discourage unwarranted male aggression, reduce burdens of domestic work, and increase opportunities for activities. <a href="{{ route('young_generation') }}" style="font-size: 50px; font-weight:300; border:none"> &#8594;</a></P>
              </div>
            </div>
        </section>
        <section class="prog-section pt-5">
            <div class="row p-5">
              <div class="col-5">
                <h3>HEALTHY ENVIRONMENT IN SCHOOL</h3>
              <P>Access to education for girls is often fraught with difficulties. Families force girls into domestic roles. Schools lack proper hygiene provision, especially for menstrual cycles. And long distances pose high risks of abuse from bus drivers, shopkeepers, and other adults. Tanzania Development Trust funds programs that discourage unwarranted male aggression, reduce burdens of domestic work, and increase opportunities for activities. <a href="{{ route('healthy_ev_school') }}" style="font-size: 50px; font-weight:300; border:none"> &#8594;</a></P>
              </div>
              <div class="col-3 bottom-health w-100">
               
              </div>
              <div class="col-3 top-health">
               
              </div>
            </div>
        </section>
    </div>
@endsection

   
