@extends('master')

@section('styles')
<style>
    html {
        scroll-behavior: smooth;
    }
    .navbar{
        background:  rgba(36, 36, 36, 0.3);
    }
    .img1 {
        background: url('img/img (10).jpg');
        height: 100vh;
        width: auto;
        /* padding-top: 10px; */
        background-repeat: no-repeat;
        background-position: center;
        /* Center the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
        /* background-image: linear-gradient(to bottom, #000000, #1d1d1d, #343434, #4d4d4d, #676767); */
    }

    .img2 {
        /* background-image: linear-gradient(to bottom, rgba(82, 80, 80, .7), rgba(75, 75, 75, 0.5)), url('img/img (10).jpg');  */
        background: url('img/img (6).jpg');
        height: 100vh;
        width: auto;
        /* padding-top: 10px; */
        background-repeat: no-repeat;
        background-position: center;
        /* Center the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
        /* background-image: linear-gradient(to bottom, #000000, #1d1d1d, #343434, #4d4d4d, #676767); */
    }

    .img3 {
        /* background-image: linear-gradient(to bottom, rgba(82, 80, 80, .7), rgba(75, 75, 75, 0.5)), url('img/img (10).jpg');  */
        background: url('img/img (13).jpg');
        height: 100vh;
        width: auto;
        /* padding-top: 10px; */
        background-repeat: no-repeat;
        background-position: center;
        /* Center the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
        /* background-image: linear-gradient(to bottom, #000000, #1d1d1d, #343434, #4d4d4d, #676767); */
    }

    .navbar {
        padding-left: 10%;
        padding-right: 10%;
    }

    .navbar-brand {
        font-size: 30px;
        font-weight: bold;
    }

    .navbar a:hover {
        color: red;
    }

    .navbar a:link {
        color: rgb(0, 0, 0);
    }

    /* visited link */
    .navbar a:visited {
        color: rgb(0, 255, 170);
    }

    /* mouse over link */
    .navbar-nav a:hover {
        color: hotpink;
        background: whitesmoke;
        border-radius: 20px;
    }

    /* selected link */
    .navbar a:active {
        color: rgb(90, 45, 197);
    }

    .nav-link {
        text-align: center;
    }

    .about{
    text-transform: uppercase;
	font-family: "Poppins", sans-serif;
	font-weight: 700;
    }

    .about:before{
        content: "";
        position: absolute;
        bottom: -179px;
        left: 50%;
        transform: translateX(-50%);
        width: 140px;
        height: 1px;
        background-color: #f70037;
    }

    .about:after {
        content: "";
        position: absolute;
        bottom: -180px;
        left: 50%;
        transform: translateX(-50%);
        width: 45px;
        height: 3px;
        background-color: #f70037;
    }

    .about span {
        color: #f70037;
    }

    .contact{
    text-transform: uppercase;
	font-family: "Poppins", sans-serif;
	font-weight: 700;
    }

    .contact span{
        color: #f70037;
    }

    /* Contact */
    .submit-btn 
    {
        padding: 7px 35px;
        border-radius: 60px;
        display: inline-block;
        background-color: #4b8cfb;
        color: white;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
                0 2px 10px 0 rgba(0,0,0,0.07);
        -webkit-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .submit-btn:hover
    {
        transform: translateY(2px);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
                0 1px 1px 0 rgba(0,0,0,0.09);
    }

    form .form-control{
        width: 100%;
    }

    /* Services */
    a,p,h1,h2,h3,h4,ul {
	margin: 0;
	padding: 0;
}

.section-services {
	padding-top: 110px;
	padding-bottom: 120px;
	font-family: "Poppins", sans-serif;
	background-color: #211f24;
	color: #fff;
}

.section-services .header-section {
	margin-bottom: 35px;
}

.section-services .header-section .title {
	position: relative;
	margin-bottom: 40px;
	padding-bottom: 25px;
	text-transform: uppercase;
	font-weight: 700;
}

.section-services .header-section .title:before {
	content: "";
	position: absolute;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	width: 140px;
	height: 1px;
	background-color: #f70037;
}

.section-services .header-section .title:after {
	content: "";
	position: absolute;
	bottom: -1px;
	left: 50%;
	transform: translateX(-50%);
	width: 45px;
	height: 3px;
	background-color: #f70037;
}

.section-services .header-section .title span {
	color: #f70037;
}

.section-services .header-section .description {
	color: #6f6f71;
}

.section-services .single-service {
	margin-top: 40px;
	background-color: #24252a;
	box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
}

.section-services .single-service .part-1 {
	padding: 40px 40px 25px;
	border-bottom: 2px solid #1d1e23;
}

.section-services .single-service .part-1 i {
	margin-bottom: 25px;
	font-size: 50px;
	color: #f70037;
}

.section-services .single-service .part-1 .title {
	font-size: 17px;
	font-weight: 700;
	letter-spacing: 0.02em;
	line-height: 1.8em;
}

.section-services .single-service .part-2 {
	padding: 30px 40px 40px;
}

.section-services .single-service .part-2 .description {
	margin-bottom: 22px;
	color: #6f6f71;
	font-size: 14px;
	line-height: 1.8em;
}

.section-services .single-service .part-2 a {
	color: #fff;
	font-size: 14px;
	text-decoration: none;
}

.section-services .single-service .part-2 a i {
	margin-right: 10px;
	color: #f70037;
}

/* Services */
    .services-title{
        padding: 10px;
        font-weight: bold;
        color: white;
        text-align: center;
        font-size: 24px;
    }
/* footer */
.footer-bs {
    text-align: center;
    background-color: #24252A;
	padding: 60px 40px;
	color: rgba(255,255,255,1.00);
	margin-bottom: 20px;
	border-bottom-right-radius: 6px;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 6px;
}
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
.footer-bs .footer-brand h2 { margin:0px 0px 10px; }
.footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

.footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.pages li { padding:5px 0px;}
.footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
.footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
.footer-bs .footer-nav h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}

.footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.list li { padding:5px 0px;}
.footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
.footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }

.footer-bs .footer-social ul { list-style:none; padding:0px; }
.footer-bs .footer-social h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
}
.footer-bs .footer-social li { padding:5px 4px;}
.footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
.footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

.footer-bs .footer-ns h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}
.footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

@media (min-width: 768px) {
	.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
}

</style>
@endsection

@section('content')

<div class="img1 img-fluid">
    <div style="background-color: rgba(0, 0, 0, 0.7); height:100vh; margin-top:0px; padding-top:0;">
        @include('navbar');

        <div style="text-align: center; margin-top:10%;">
            <h1 style="font-family: 'Cinzel', serif; font-size:80px; text-shadow: 3px 2px #000000; color:white;">The
                Wedding Season</h1>
            <a href="random" class="btn btn-primary"
                style="border: 1px solid; padding: 10px; box-shadow: 5px 5px #000000; margin-top:5%;">Services</a>
        </div>
    </div>
</div>

@include('aboutus')

@include('service')
@include('services')

@include('contact')

@include('footer')



@endsection