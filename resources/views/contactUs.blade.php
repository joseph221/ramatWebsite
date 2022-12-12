@extends('layouts.app')
@section('content')
        <div  style="margin-top:0px;" class="row no-margin">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127451.1822618855!2d36.612954858203125!3d-3.386925399999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c88f2387383%3A0xbc1907f7ec497152!2sArusha!5e0!3m2!1sen!2stz!4v1667302054341!5m2!1sen!2stz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
        </div>
        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">
                    <div style="padding:20px" class="col-sm-7">
                        <h2 >Contact Form</h2> <br>
                        <div class="row cont-row">
                            <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" name="name" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary btn-sm">Send Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div style="margin:50px" class="serv">
                            <h2 style="margin-top:10px;">Address</h2>
                        Antonya Street, <br>
                            23/H-2, Building<br>
                            TA, AUS District<br>
                            Phone:+91 9159669599<br>
                            Email:support@smarteyeapps.com<br>
                            Website:www.smarteyeapps.com.com<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection