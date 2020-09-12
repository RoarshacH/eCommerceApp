@extends('layouts.main')

@section('contents')
<div class="section">
    <div class="container">
        <div class="row align-center">
            <div class="col-md-7 order-details">
                <div class="section-title text-center">
                    <h3 class="title">My Cart</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCT</strong></div>
                        <div><strong>TOTAL</strong></div>

                    </div>
                    <div class="order-products">
                        <div class="order-col">
                            <div>1x Product Name Goes Here</div>
                            <div>$980.00</div>
                        </div>
                        <div class="order-col">
                            <div>2x Product Name Goes Here</div>
                            <div>$980.00</div>
                        </div>
                    </div>
                    <div class="order-col">
                        <div>Shiping</div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">$2940.00</strong></div>
                    </div>
                </div>
                <a href="#" class="primary-btn order-submit">Proced to Checkout</a>
            </div>
        </div>

    </div>
</div>


<!-- /Order Details -->

@endsection
