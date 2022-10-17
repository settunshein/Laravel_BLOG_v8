@extends('layouts.frontend.master')

@section('content')
<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>Register</h2>
                                </div>
                                <div class="content">
                                    <form id="contact" action="{{ route('register') }}" method="POST">
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="name" type="text" placeholder="Enter Your Name">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="text" placeholder="Enter Your Email Address">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="password" type="password" placeholder="Enter Your Password">
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="password_confirmation" type="password" placeholder="Confirm Your Password">
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="main-button">Register</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="sidebar-item contact-information">
                                <div class="sidebar-heading">
                                    <h2>contact information</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <h5>090-484-8080</h5>
                                            <span>PHONE NUMBER</span>
                                        </li>
                                        <li>
                                            <h5>info@company.com</h5>
                                            <span>EMAIL ADDRESS</span>
                                        </li>
                                        <li>
                                            <h5>123 Aenean id posuere dui,
                                                <br>Praesent laoreet 10660
                                            </h5>
                                            <span>STREET ADDRESS</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="col-lg-12">
                <div id="map">
                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>--}}
        </div>
    </div>
</section>
@endsection