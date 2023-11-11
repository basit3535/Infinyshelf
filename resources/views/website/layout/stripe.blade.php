<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images\sms-logo.png') }}" />
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        .container {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        img {
            width: 100%;
            max-width: 50%;
        }

        .card {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .form-control {
            border: none;
        }

        input {
            border: none;
            padding-left: 4px;
            background-color: rgb(62, 62, 123);
            font-size: 15px;
        }

        .card-body {
            border-top: 2px solid rgb(62, 62, 123);
            background-color: #fff;
        }

        .btn-success {
            background-color: rgb(62, 62, 123) !important;
            border-color: rgb(62, 62, 123) !important;
            color: white;
        }

        .button:hover {
            cursor: pointer;
            background-color: rgb(62, 62, 123) !important;
        }

        .numbr {
            border-bottom: 1px solid rgb(62, 62, 123);
            padding-bottom: 8px;
        }

        input.focus,
        input:focus {
            outline: 0;
            box-shadow: none !important;
        }

        .numbr.numbr.hover,
        .numbr:hover {
            border-bottom: 1px solid rgb(62, 62, 123);
        }
    </style>
</head>

<body>
    <div class='container'>
        <div class="card mx-auto col-md-5 col-8 mt-3 p-0">
            <img class='mx-auto pic' src="{{ asset('images/stripe-logo.png') }}" />

            <div class="stripe-errors mb-3 mt-3"></div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('plan.process') }}" method="POST" id="subscribe-form">
                @csrf

                <div class="card-body">
                    <p class="text-muted font-weight-bold">Your payment details</p>


                    <input type="hidden" name="id" value="{{ $plan->id }}">
                    <input type="hidden" name="user_id" value="{{ $data->id }}">
                    <input type="hidden" name="plan_id" value="{{ $plan->plan_id }}">
                    <div class="form-group">
                        <label for="card-holder-name" class="form-label text-muted font-weight-bold">Card Holder
                            Name</label>
                        <input id="card-holder-name" type="text" name="name" value="{{ $data->name }}"
                            class="form-control text-uppercase" readonly>
                    </div>

                    <div class="form-group">
                        <label for="card-element" class="form-label text-muted font-weight-bold">Credit or debit
                            card</label>
                        <div id="card-element" class="numbr" class="form-control"></div>
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <button id="card-button" data-secret="{{ $intent->client_secret }}" type="submit"
                        class="btn btn-block btn-success p-2">Subscribe Now</button>
                </div>
            </form>

        </div>

    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe(
            'pk_test_51NDpHvHIYu6FmMQqBTodeE7iwVtMW52LyhqJrtQtHe60jf46VY4ICccOuAdI6XXRpJM2bwcA6fefDSDZ5jDQmcVz00pB5O7V7s'
        );
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            hidePostalCode: true,
            style: style
        });
        card.mount('#card-element');
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();
            console.log("attempting");
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                paymentMethodHandler(setupIntent.payment_method);
            }
        });

        function paymentMethodHandler(payment_method) {
            var form = document.getElementById('subscribe-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>
</body>

</html>
