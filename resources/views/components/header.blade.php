<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .h_container{
        background-color:#009ad3;
        height: 100%;
        color:white;
    }
    .img_lpuno{
        width: 35%;
        height:95%;
    }
    .img_ldrtcp{
        width: 90%;
        height:60%;
        margin-top:7%;
    }
    .w_container{
        padding-top: 25px;
    }
    .w_container p{
        text-align: center;
        margin-bottom:7px;
        font-family: serif;
    }
    .p1{
        font-size: 19px;
    }
    .p2{
        font-size: 17px;
    }
    .p3{
        font-size: 15px;
    }
</style>
<center>
    <div class="row col-md-12 h_container">
        <div class="col-md-3">
            <a href="{{route('home')}}">
                <img class="img_lpuno" src="{{ asset('image/logopuno.png') }}" alt="Mi imagen">
            </a>
        </div>
        <div class="navar col-md-6 w_container" >
            <p class="p1"><b>DIRECCION REGIONAL DE TRANSPORTES Y COMUNICACIONES PUNO</b></p>
            <p class="p2"><b>DIRECCION DE CIRCULACION TERRESTRE</b></p>
            <p class="p3"><b>SUBDIRECCION DE FISCALIZACION</b></p>
        </div>
        <div class=" navar col-md-3">
            <img class ="img_ldrtcp" src="{{ asset('image/LOGO-DRTCP.png') }}" alt="Mi imagen" >
        </div>
    </div>
</center>
