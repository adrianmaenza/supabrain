@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="container">

    <!-- open row div -->
    <div class="row white down-20 clearfix">
        <!-- include sidebar -->
        <resources></resources>

        <!-- open col -->
        <div class="col l8 s12">

            <!-- open main blanket -->
            <div class="main-blanket">

                <!-- open row -->
                <div class="row">
                    <!-- Welcome -->
                    <div class="white-background col s12">
                        <p class="content-title blue-title">
                            <marquee>Welcome to Supabrain College!</marquee>
                        </p>
                        <p class="down-20 justify">
                            {{ file_get_contents('docs/welcome.txt') }}
                        </p>
                    </div>
                
                    <div class="col s12">
                        <p class="content-title blue-title down-20">Vision</p>
                        <p class="down-20 justify">
                            {{ file_get_contents('docs/vision.txt') }}
                        </p>
                    </div>
                
                    <div class="col s12">
                        <p class="content-title blue-title down-20">Mission</p>
                        {!! file_get_contents('docs/mission.html') !!}
                    </div>
                
                    <div class="col s12">
                        <a href="/about-us" class="btn blue lighten-2"><em><strong>more</strong></em></a>
                    </div>
                    <br>
                </div>
                <!-- close row -->

            </div>
            <!-- close main blanket -->

        </div>
        <!-- close col -->


        <!-- open col -->
        <div class="col s12 hide-on-large-only no-padding">
            
                <div class="down-20" style="background-color: white;">
                    <!--<p class="content-title">Calender</p>-->
                    <p class="content-title blue-title">Resources</p>
                    <ul class="resources">
                        <li><a href="../docs/SUPABRAIN STUDENTS REGISTRATION FORM 2017 S1 V1.pdf">Registration form</a></li>
                        <li><a href="docs/SUPABRAIN COLLEGE - PROSPECTUS 2017 1 PDF.pdf">Current prospectus and Fees</a></li>
                        <li><a href="/register-online">Online Booking</a></li>
                        <!--                <li><a href="docs/sc2016_01.pdf">Short Courses</a></li>-->
                        <!--<li><a href="docs/vocational.pdf">Full Vocational Courses</a></li>-->
                        <li><a href="docs/SUPABRAIN FLYER FOR DOWNLOAD - 2017 PDF.pdf">Download Flyer</a></li>
                    </ul>
                </div>
                
                <div class="card">
                    <div class="card-image">
                        <img src="images/Nelson-Mandela-Quotes-Education2.jpg" alt="nelson"/>
                    </div>
                </div>

                <div class="card down-20">
                    <div class="card-image">
                        <img src="images/library.jpg" alt=""/>
                        <span class="card-title">
                            Knowledge
                        </span>
                    </div>
                    <div class="card-content">
                        Books hold a great deal of knowledge. It's up to us to tap into it.
                    </div>
                </div>
            
        </div>
        <!-- close col -->

    </div>
    <!-- close row div -->

</div>

@endsection