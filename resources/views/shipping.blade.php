@extends('layouts.appbase')

@section('content')
    @include('layouts.breadcrumbs')

    <div id="content">
        <div class="container">
            <div class="row">
                <div id="checkout" class="col-lg-9">
                    <div class="box">
                        <form method="get" action="shop-checkout3.html">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item"><a href="shop-checkout1.html" class="nav-link"> <i
                                            class="fa fa-map-marker"></i><br>Address</a></li>
                                <li class="nav-item"><a href="shop-checkout2.html" class="nav-link active"><i
                                            class="fa fa-truck"></i><br>Delivery Method</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled"><i
                                            class="fa fa-money"></i><br>Payment Method</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Order
                                        Review</a></li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">
                                            <h4>USPS Next Day</h4>
                                            <p>Get it right on next day - fastest option possible.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="delivery" value="delivery1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">
                                            <h4>USPS Next Day</h4>
                                            <p>Get it right on next day - fastest option possible.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="delivery" value="delivery2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">
                                            <h4>USPS Next Day</h4>
                                            <p>Get it right on next day - fastest option possible.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="delivery" value="delivery3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                                <div class="left-col"><a href="shop-checkout1.html" class="btn btn-secondary mt-0"><i
                                            class="fa fa-chevron-left"></i>Back to addresses</a></div>
                                <div class="right-col">
                                    <button type="submit" class="btn btn-template-main">Continue to Payment Method<i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div id="order-summary" class="box mb-4 p-0">
                        <div class="box-header mt-0">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted text-small">Shipping and additional costs are calculated based on the
                            values you have entered.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Order subtotal</td>
                                    <th>$446.00</th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <th>$10.00</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0.00</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$456.00</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.calltoaction')

@endsection
