@extends('master')

@section('styles')
<style>
    body {
        background: black;
        margin-top: 50px;
    }

    .service-tabs {
        background: rgb(114, 114, 114);
        padding: 30px;
        box-shadow: 1px 1px 5px white;
        border-radius: 10px;
        margin: 5px;
    }

    .services-title{
        font-weight: bold;
        color: white;
        text-align: center;
        font-size: 20px;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .item {
        width: 32%;
        padding-bottom: 32%; /* Same as width, sets height */
        margin-bottom: 2%; /* (100-32*3)/2 */
        position: relative;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="item">
        <div class="service-tabs">
            <h2 class="services-title">Budget Management For Your Wedding</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                alias, a perferendis nulla dolor itaque?</p>
            <button>Read More</button>
        </div>
    </div>
    <div class="item">
        <div class="service-tabs">
            <h2 class="services-title">Wedding Photography</h2><br>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                alias, a perferendis nulla dolor itaque?</p>
            <button>Read More</button>
        </div>
    </div>
    <div class="item">
        <div class="service-tabs">
            <h2 class="services-title">Videography/ Cinematography</h2><br>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                alias, a perferendis nulla dolor itaque?</p>
            <button>Read More</button>
        </div>
    </div>
    
    <div class="item">
        <div class="service-tabs">
            <h2 class="services-title">Budget Management For Your Wedding</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                alias, a perferendis nulla dolor itaque?</p>
            <button>Read More</button>
        </div>
    </div>
    <div class="item">
        <div class="service-tabs">
            <h2 class="services-title">Wedding Photography</h2><br>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                alias, a perferendis nulla dolor itaque?</p>
            <button>Read More</button>
        </div>
    </div>
    <div class="item">
        <div class="service-tabs">
            <h2 class="services-title">Videography/ Cinematography</h2><br>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                alias, a perferendis nulla dolor itaque?</p>
            <button>Read More</button>
        </div>
    </div>
  </div>


















<div class="container" style="margin-top: 1500px;">
    <div class="row">
        <div class="col-md-4 ">
            <div class="service-tabs">
                {{-- <div class="services-title"></div> --}}
                <h2 class="services-title">Budget Management For Your Wedding</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                    alias, a perferendis nulla dolor itaque?</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-tabs">
                <h2 class="services-title">Wedding Photography</h2><br>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                    alias, a perferendis nulla dolor itaque?</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-tabs">
                <h2 class="services-title">Videography/ Cinematography</h2><br>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                    alias, a perferendis nulla dolor itaque?</p>
                <button>Read More</button>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-4 ">
            <div class="service-tabs">
                {{-- <div class="services-title"></div> --}}
                <h2 class="services-title">Wedding Menu Planning</h2><br>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                    alias, a perferendis nulla dolor itaque?</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-tabs">
                <h2 class="services-title">Design & Decor</h2><br>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                    alias, a perferendis nulla dolor itaque?</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-tabs">
                <h2 class="services-title">Bridal Styling: Makeup & Hair</h2><br>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis fuga doloribus natus iusto
                    alias, a perferendis nulla dolor itaque?</p>
                <button>Read More</button>
            </div>
        </div>
    </div>

</div>
@endsection