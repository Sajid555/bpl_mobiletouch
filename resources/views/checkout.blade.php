@extends('layouts.checkoutApp')
@section('content')

<div id="main">
    <!--Header/Nav-->
    @include('frontInc.header')
    <!--Header/Nav-->
    <br>
    <!--Main Content-->
    <div class="main-content">
        <form action="{{route('checkoutProcess')}}" method="POST">

            @csrf
            <div class="main-content-inner">
                <div id="content">
                    <div class="container">
                        <div class="accordion accordion1">
                            <div class="accordion-title">Checkout Method</div>
                            <div class="accordion-title">Billing Information</div>
                            @include('forms.billing')
                            <div class="accordion-title">Shipping Information</div>
                            @include('forms.shipping')
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
                                data-amount="<?php echo Session::get('Total')?>"
                                data-name="Stripe Demo"
                                data-description="Online course about integrating Stripe"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-currency="usd">
                            </script>   
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>	 
        </form>

        <!--Footer Starts-->
            @include('frontInc.footer')
        <!--Footer End-->
    @endsection