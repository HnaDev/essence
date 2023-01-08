@extends('master_user')
@section('receipt')
    <!-- banner shop -->
    <div class="banner-shop">
        <div class="container h-100">
            <div class="row flex_center h-100">
                <div class="col-12">
                    <h2>checkout</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- banner shop end -->
    <div class="checkout_area padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area">

                        <div class="cart-page-heading mb-3">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="first_name">Full name <span>*</span></label>
                                    <input type="text" class="form-control" id="" value="" required="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email_address">Email <span>*</span></label>
                                    <input type="email" class="form-control" id="" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input type="number" class="form-control" id="" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Address</label>
                                    <input type="text" class="form-control" id="" value="">
                                </div>
                                <div class=" col-12 mb-3">
                                    <label for="" class="form-label">Order notes</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                                <div class=" col-12 mb-3">
                                    <label for="" class="form-label">Order notes</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                                <div class="col-12 mb-3 select-box">
                                    <label for="">Payment</label>
                                    <select class="form-control" name="select" id="">
                                        <option value="1">Cash on delievery</option>
                                        <option value="2">Credit card</option>
                                        <option value="3">Direct bank transfer</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Product</span> <span>Total</span></li>
                            <li><span>Cocktail Yellow dress</span> <span>$59.90</span></li>
                            <li><span>Subtotal</span> <span>$59.90</span></li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <li><span>Total</span> <span>$59.90</span></li>
                        </ul>
                        <a href="#" class="btn essence-btn check-btn">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection