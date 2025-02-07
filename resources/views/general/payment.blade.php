@extends('template.master')
@section('title', 'PAYMENT | ' . Config::get('app.name'))
@section('content')

    <!-- PayPal SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AanrjRuJo8YEgNAVTmHteO9kxWweyLZVf531FkfMuXYaRPsjCiAzUR7kqjh1VsTVdkW5znQgMwurnMsl&currency=USD"></script>

    <!-- Load External Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/countries.js') }}"></script>

    <!-- Custom Styling -->
    <style>
        /* General Card Styling */
        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Titles */
        .card h3 {
            font-size: 24px;
            font-weight: 600;
            color: #007bff;
        }

        /* Order Details */
        .order-details p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        /* Green Text */
        .text-success {
            color: #28a745 !important;
            font-weight: 600;
        }

        /* Order Image */
        .order-image img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        /* Form Styling */
        .form-control, .form-select {
            padding: 12px 15px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>

    <!-- Breadcrumb Section -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/breadcumb-bg.jpg')}}" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="{{asset('assets/img/bg/breadcumb_shape_1_1.png')}}"></div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ trans('messages.payment') }}</h1>



            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Left Column: Order Details -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card shadow-sm border-light rounded p-4 text-center">
                    <h3 class="text-primary mb-4">{{ trans('messages.your_order') }}</h3>
                    <div class="order-details mb-4">
                        <p>
                            <strong class="fw-bold">{{ trans('messages.product') }}</strong>
                            <span id="product-name">{{ request()->get('product', '12 Months') }}</span>
                        </p>
                        <p>
                            <strong class="fw-bold">{{ trans('messages.quantity') }}</strong>
                            <span>x1</span>
                        </p>
                        <p>
                            <strong class="fw-bold">{{ trans('messages.total') }}</strong>
                            <span class="text-success" id="total-amount">${{ request()->get('price', '49.99') }}</span></p>


                        </p>
                    </div>
                </div>
                <div class="order-image text-center">
                    <img src="{{asset('assets/img/normal/wcu_1_1.png')}}" alt="Product Image" class="img-fluid rounded shadow-sm">
                </div>
            </div>

            <!-- Right Column: Customer Information Form -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-light rounded p-4">
                    <h3 class="text-primary mb-4">{{ trans('messages.customer_information') }}</h3>
                    <form id="payment-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                {{ trans('messages.name') }} <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="name" name="name" class="form-control shadow-sm" placeholder="{{ trans('messages.enter_your_full_name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                {{ trans('messages.email_address') }} <span class="text-danger">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="form-control shadow-sm" placeholder="{{ trans('messages.enter_your_email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">
                                {{ trans('messages.country') }} <span class="text-danger">*</span>
                            </label>
                            <select id="country" name="country" class="form-select shadow-sm" required>
                                <!-- Dynamically Loaded From countries.js -->
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                {{ trans('messages.phone') }} <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="phone" name="phone" class="form-control shadow-sm" placeholder="{{ trans('messages.enter_your_phone_number') }}" required>
                        </div>

                        <!-- PayPal Checkout Button -->
                        <div id="paypal-button-container" class="mb-3"></div>

                        <p id="result-message" class="text-danger"></p>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- PayPal Payment Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const totalAmountElement = document.getElementById("total-amount");
            const nameInput = document.getElementById("name");
            const emailInput = document.getElementById("email");
            const phoneInput = document.getElementById("phone");
            const resultMessage = document.getElementById("result-message");

            paypal.Buttons({
                createOrder: function(data, actions) {
                    let priceText = totalAmountElement ? totalAmountElement.textContent.trim() : "0";
                    priceText = priceText.replace(/[^\d.]/g, '');
                    const price = parseFloat(priceText) || 0;

                    if (isNaN(price) || price <= 0) {
                        console.error("Invalid price:", price);
                        resultMessage.innerText = "Invalid price detected.";
                        return Promise.reject(new Error("Invalid price"));
                    }

                    return actions.order.create({
                        purchase_units: [{
                            amount: { value: price.toFixed(2) },
                            description: `Payment for ${document.getElementById("product-name").textContent}`
                        }]
                    });
                }
            }).render('#paypal-button-container');
        });
    </script>

    @include('components.brand')

@endsection
