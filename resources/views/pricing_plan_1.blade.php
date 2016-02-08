@extends('layouts.app')

@section('htmlheader_title')
    Apartat 1
@endsection



@section('main-content')

    <style>

        .pricing-container{
            display: flex;
            display: -webkit-flex;
            flex-flow: row wrap;
            -webkit-flex-flow: row wrap;
        }

        .columna1,
        .columna2,
        .columna3,
        .columna4 {
            width: 100%;
        }

        @media (min-width: 600px) {

            .columna1,
            .columna2 {
                width: 50%;
            }
            .columna3,
            .columna4 {
                width: 50%;
            }
        }
        @media (min-width: 800px) {
            .columna1,
            .columna2,
            .columna3,
            .columna4 {
                width: 25%;
            }
            .container{
                width: 800px;
                margin-right: auto;
                margin-left: auto;
            }
        }

        .pricing-card {
            background: white;
            padding: 10px;
            margin: 10px;
            border: black solid 1px;
            border-radius: 25px;

        }

        .card-header {
            text-align: center;
            border: black solid 1px;
            border-radius: 25px;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .bck-red {
            background: red;
        }

        .bck-blue {
            background: blue;
        }

        .bck-orange {
            background: orange;
        }

        .bck-green {
            background: green;
        }


        .card-body {
            margin: 10px;
        }

        .card-footer {
            text-align: center;
            border: black solid 1px;
            border-radius: 25px;
            color: white;

        }

        .pricing-link {
            color: white;
            font-weight: bold;
        }

        ul.pricing-list {
            list-style-image: url("/img/tick.gif");
        }

        li.not-avaliable {
            list-style-image: url("/img/no_tick.gif");
        }

        .price {
            font-size: 15px;
        }

    </style>

    <div class="pricing-container">
        <section class="columna1">

            <div class="pricing-card">

                <div class="card-header bck-red">
                    Pricing plan 1
                    <p class="price">30€/Month</p>
                </div>

                <div class="card-body">
                    <ul class="pricing-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                        <li class="not-avaliable">Animi at eligendi exercitationem illum modi quidem, voluptatem.</li>
                        <li class="not-avaliable">Enim est magnam nisi ullam veniam? Amet, quidem?</li>
                        <li class="not-avaliable">Animi consectetur exercitationem modi molestiae nihil ratione recusandae.</li>
                    </ul>
                </div>

                <div class="card-footer bck-red">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>

        <section class="columna2">

            <div class="pricing-card">

                <div class="card-header bck-blue">
                    Pricing plan 2
                    <p class="price">40€/Month</p>
                </div>

                <div class="card-body">
                    <ul class="pricing-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                        <li>Animi consectetur exercitationem modi molestiae nihil ratione recusandae.</li>
                        <li>Animi at eligendi exercitationem illum modi quidem, voluptatem.</li>
                        <li class="not-avaliable">Enim est magnam nisi ullam veniam? Amet, quidem?</li>
                        <li class="not-avaliable">Animi consectetur exercitationem modi molestiae nihil ratione recusandae.</li>
                    </ul>
                </div>

                <div class="card-footer bck-blue">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>

        <section class="columna3">

            <div class="pricing-card">

                <div class="card-header bck-orange">
                    Pricing plan 3
                    <p class="price">50€/Month</p>
                </div>

                <div class="card-body">
                    <ul class="pricing-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                        <li>Animi at eligendi exercitationem illum modi quidem, voluptatem.</li>
                        <li class="not-avaliable">Enim est magnam nisi ullam veniam? Amet, quidem?</li>
                    </ul>
                </div>

                <div class="card-footer bck-orange">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>

        <section class="columna4">

            <div class="pricing-card">

                <div class="card-header bck-green">
                    Pricing plan 4
                    <p class="price">60€/Month</p>
                </div>

                <div class="card-body">
                    <ul class="pricing-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Dolorem ducimus enim eum ipsam modi, non. Sint!</li>
                        <li>Animi at eligendi exercitationem illum modi quidem, voluptatem.</li>
                        <li>Enim est magnam nisi ullam veniam? Amet, quidem?</li>
                        <li>Animi consectetur exercitationem modi molestiae nihil ratione recusandae.</li>
                    </ul>
                </div>

                <div class="card-footer bck-green">
                    <a class="pricing-link" href="#">BUY</a>
                </div>

            </div>

        </section>


    </div>

@endsection
