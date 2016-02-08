@extends('layouts.app')

@section('htmlheader_title')
    Apartat 1
@endsection



@section('main-content')

    <style>

        body{
            background:#EEEEEE;
        }

        .bronze {
            background-color: #B0C4DE;
        }

        .bronze-text {
            color: #B0C4DE;
        }

        .silver {
            color: #fff;
            background-color: #C0C0C0;
        }

        .gold {
            color: #fff;
            background-color: #FFD700;
        }

        .gold-text {
            color:#FFD700;
        }

        .content .plan {
            position:relative;
            top:30px;
            background:rgba(255,255,255,1);
            padding-top:40px;
            padding-bottom:40px;
            border-radius:7px;
            color:#777;
            box-shadow:5px 5px 0 rgba(0,0,0,0.05);
            -webkit-transition:all .3s ease-out;
            transition:all .3s ease-out;
        }

        .content .plan.featured {
            top:0;
            padding-top:50px;
            padding-bottom:50px;
        }

        .content .plan:hover,
        .content .plan.featured {
            background:#5CC9DF;
            color:#fff;
        }

        .content .plan h2 {
            font-size:28px;
            font-weight:700;
            margin-bottom:0;
            text-transform:uppercase;
        }

        .content .plan.featured h2 {
            margin-bottom:10px;
        }

        .content .plan p {
            margin-bottom:5px;
            font-weight:400;
        }

        .content .plan .icon {
            display:inline-block;
            margin-bottom:30px;
            width:120px;
            height:120px;
            border-radius:50%;
            font-size:48px;
            line-height:120px;
            -webkit-transition:all .3s ease-out;
            transition:all .3s ease-out;
        }

        .content .plan.featured .icon,
        .content .plan:hover .icon{
            color:#5cc9df;
            background:#fff;
        }

        .content .plan .btn-pricing {
            margin-top:20px;
            margin-bottom:0;
            font-size:16px;
            padding:10px 20px;
        }

        .content .plan.featured .btn-pricing,
        .content .plan:hover .btn-pricing {
            background: #fff;
            color:#5CC9DF;
        }

        .content .plan .price {
            font-size:48px;
            font-weight:100;
            line-height:48px;
            margin-bottom:30px;
        }

        .content .plan.featured .price {
            margin-bottom:40px;
        }

    </style>

    <div class="container bootstrap">
        <hr>
        <div class="row content">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="col-sm-4 text-center">
                    <div class="plan">
                        <p class="icon bronze">
                            <i class="fa fa-tablet fa-fw"></i>
                        </p>
                        <h2 class="bronze-text">Bronce</h2>
                        <p class="bronze-text price">$12</p>
                        <p>Single License</p>
                        <p>One Website</p>
                        <p>Basic Support</p>
                        <a class="btn btn-pricing" href="#" target="_blank">Order Now</a>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <div class="plan featured">
                        <p class="icon silver">
                            <i class="fa fa-laptop fa-fw"></i>
                        </p>
                        <h2>Silver</h2>
                        <p class="price">$24</p>
                        <p>Multiple Licenses</p>
                        <p>Unlimited Websites</p>
                        <p>Great Support</p>
                        <a class="btn btn-pricing" href="#" target="_blank">Order Now</a>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <div class="plan">
                        <p class="icon gold">
                            <i class="fa fa-desktop fa-fw"></i>
                        </p>
                        <h2 class="gold-text">Gold</h2>
                        <p class="gold-text price">$399</p>
                        <p>Extended License</p>
                        <p>Unlimited Websites</p>
                        <p>Premium Support</p>
                        <a class="btn btn-pricing" href="#" target="_blank">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
