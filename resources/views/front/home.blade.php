@extends('layouts.front')

@section('section')
    <section id="home" class="pt-page page-layout light-text home-section has-bg-img"
             style="background-image:url({{asset('front/images/site/fondo1.png')}})">
        <!-- .content -->
        <div class="content">
            <div style="top: -20%;">
                <style>
                    @font-face {
                        font-family: 'Bebas';
                        /* Antes de descargar el archivo, le decimos al buscador
                        que intente buscar en local la fuente con nombre
                        Cabin, Cabin Regular o Cabin-Regular */
                        src: local('Bebas'),
                        local('Cabin Regular'),
                        local('Cabin-Regular'),
                        url(./css/BebasNeue.otf) format('woff');
                    }

                    .bebas {
                        font-family: 'Bebas';
                        text-shadow: 3px 3px 2px #111;
                    }

                    .bebas2 {
                        font-family: 'HelveticaWorl';
                        text-shadow: black 0.1em 0.1em 0.2em

                    }
                    .bebas3 {
                        font-family: 'HelveticaWorl';
                        text-shadow: black 0.1em 0.1em 0.2em

                    }
                    .f{


                    }
                    .g{

                    }

                    @media screen and (max-width: 1024px) {
                        #delay_demo {
                          display: none;
                        }
                    }
                    @media screen and (min-width: 1800px) {
                        #delay_demo {
                            display: none;
                        }
                    }
                    #delay_demo {
                        position: relative;
                        width: 900px;
                        height: 700px;
                        margin:0 auto;
                        padding: 50px;
                        margin-left: 10%;
                    }
                    #dd_main {
                        width: 100px;
                        height: 100px;
                        position:relative;
                        top: 40vh;
                        left: 40vw;
                        border-radius: 50px;
                        -webkit-transition: all 2s ease-in-out;
                        transition: all 2s ease-in-out;
                        background: #EEE url(http://www.clker.com/cliparts/M/9/l/f/D/3/full-moon.svg) no-repeat;
                        background-size: 160% 150%;
                    }
                    #delay_demo .center {
                        /* width: 100vw;*/
                        position: absolute;
                        bottom:20px;
                    }

                    #v1{
                        width: 24px;
                        height: 24px;
                        border-radius: 25% !important;
                        position:relative;
                        top: 17%;
                        left: 42%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;

                    }
                    #v2{
                        width: 30px;
                        height:30px;

                        border-radius: 25% !important;;
                        position:relative;
                        top: 17%;
                        left: 46%;

                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v3{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;;
                        position:relative;

                        top: 14%;
                        left: 55%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }

                    #a1{
                        width: 30px;
                        height: 30px;
                        border-radius: 15% !important;
                        position:relative;
                        top: 15%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 53%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a2{
                        width: 30px;
                        height: 30px;
                        border-radius: 15% !important;  position:relative;
                        top: 10%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 48%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v4{
                        width: 28px;
                        height: 28px;
                        border-radius: 15% !important;  position:relative;
                        top: 30px;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 58%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a3{
                        width: 50px;
                        height: 50px;
                        border-radius: 15% !important;  position:relative;
                        top: 7%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 56%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v5{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -1%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 52%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a4{
                        width: 40px;
                        height: 40px;
                        border-radius: 15% !important;  position:relative;
                        top: -9%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 64%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v6{
                        width: 24px;
                        height: 24px;
                        border-radius: 15% !important;  position:relative;
                        top: -7.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 64%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v7{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -5.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 64%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v8{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -8.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 60%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a5{
                        width: 50px;
                        height: 50px;
                        border-radius: 15% !important;  position:relative;
                        top: -16%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 69%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v9{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -14%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 68%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a6{
                        width: 40px;
                        height: 40px;
                        border-radius: 15% !important;  position:relative;
                        top: -19%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 61%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a7{
                        width: 30px;
                        height: 30px;
                        border-radius: 15% !important;  position:relative;
                        top: -24%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 55%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }

                    #v10{
                        width: 70px;
                        height: 18px;
                        border-radius: 15% !important;  position:relative;
                        top: -40%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 29%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        /* transform: scale(1,1) rotate(-95deg) ; */
                    }
                    #a8{
                        width: 40px;
                        height: 40px;
                        border-radius: 15% !important;  position:relative;
                        top: -21%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 49%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v11{
                        width: 50px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -43%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 36%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        /* transform: scale(1,1) rotate(-95deg) ; */
                    }
                    #v12{
                        width: 200px;
                        height: 30px;
                        border-radius: 15% !important;
                        position: relative;
                        top: -55%;
                        -ms-transform: rotate(7deg);
                        left: 40%;
                        /* background: #a5bf0a no-repeat; */
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        /* transform: scale(1,1) rotate(-95deg); */
                    }
                    #v13{
                        width: 50px;
                        height: 22px;
                        border-radius: 15% !important;  position:relative;
                        top: -51%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 65%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        /*transform: scale(1,1) rotate(-95deg) ; */
                    }
                    #a9{
                        width: 50px;
                        height: 50px;
                        border-radius: 15% !important;  position:relative;
                        top: -35%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 38%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v14{
                        width: 60px;
                        height: 23px;
                        border-radius: 15% !important;  position:relative;
                        top: -63%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 71%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        /*transform: scale(1,1) rotate(-95deg) ; */
                    }
                    #v15{
                        width: 25px;
                        height: 25px;
                        border-radius: 15% !important;  position:relative;
                        top: -42%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 46.5%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a10{
                        width: 50px;
                        height: 50px;
                        border-radius: 15% !important;  position:relative;
                        top: -46%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 51%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a11{
                        width: 40px;
                        height: 40px;
                        border-radius: 15% !important;  position:relative;
                        top: -48%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 44.5%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a12{
                        width: 30px;
                        height: 30px;
                        border-radius: 15% !important;  position:relative;
                        top: -51%;

                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 56%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #a13{
                        width: 28px;
                        height: 28px;
                        border-radius: 15% !important;  position:relative;
                        top: -56.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 61%;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v16{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -76%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 53%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v17{
                        width: 20px;
                        height: 20px;
                        border-radius: 15% !important;  position:relative;
                        top: -69%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 59%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v18{
                        width: 25px;
                        height: 25px;
                        border-radius: 15% !important;  position:relative;
                        top: -67%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 51%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v19{
                        width: 22px;
                        height: 22px;
                        border-radius: 15% !important;  position:relative;
                        top: -65%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 63%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v20{
                        width: 19px;
                        height: 19px;
                        border-radius: 15% !important;  position:relative;
                        top: -68%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 67%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #v21{
                        width: 21px;
                        height: 21px;
                        border-radius: 15% !important;  position:relative;
                        top:-69%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 58%;
                        background: #a5bf0a00 no-repeat;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                        transform: scale(1,1) rotate(-95deg) ;
                    }
                    #letrai1{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;  position:relative;
                        top: -50.3%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 43%;
                        color:#fff;
                        font-size: 85px;
                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);

                    }
                    #letrap1{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;
                        position:relative;
                        top: -54.6%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 51%;
                        color:#fff;

                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letrap2{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;
                        position:relative;
                        top: -59%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 57%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letray{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;  position:relative;
                        top: -63.30%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 62%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letrat{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;
                        position:relative;
                        top: -67.8%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 69.2%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letrat2{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;  position:relative;
                        top: -72.6%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 68.5%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letrae{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;
                        position:relative;
                        top: -77.2%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 74.5%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letrac{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;
                        position:relative;
                        top: -81.8%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 80.5%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #letrah{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;
                        position:relative;
                        top: -86.3%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 86.5%;
                        color:#fff;
                        font-size: 85px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #teg{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;  position:relative;
                        top: -85.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 52%;
                        color: #ffffff;
                        font-size: 28px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #e{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;  position:relative;
                        top: -85.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 65%;
                        color:#0e76bc;
                        font-size: 28px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #imno{
                        width: 27px;
                        height: 27px;
                        border-radius: 15% !important;  position:relative;
                        top: -85.5%;
                        -ms-transform: rotate(7deg); /* IE 9 */
                        left: 69%;
                        color: #a4cd39;
                        font-size: 28px;

                        -webkit-transition: all 2s ease-in-out;
                        transition-durationion: all 2s ease-in-out;  /* Ensures that the element is being transformed in the 3d context so that hw acceleration kicks in where appropriate. */
                        -webkit-transform: translate3d(0,0,0);
                        transform: translate3d(0,0,0);
                    }
                    #imno {-webkit-transition-delay: 2s;transition-delay: 2s;}
                    #e {-webkit-transition-delay: 1.5s;transition-delay: 1.5s;}
                    #teg {-webkit-transition-delay: 0s;transition-delay: 0s;}
                    #letrai1 {-webkit-transition-delay: 0.1s;transition-delay: 0.1s;}
                    #letrap1 {-webkit-transition-delay: 0.2s;transition-delay: 0.2s;}
                    #letrap2 {-webkit-transition-delay: 0.3s;transition-delay: 0.3s;}
                    #letray {-webkit-transition-delay: 0.4s;transition-delay: 0.4s;}
                    #letrat {-webkit-transition-delay: 0.5s;transition-delay: 0.5s;}
                    #letrat2 {-webkit-transition-delay: 0.6s;transition-delay: 0.6s;}
                    #letrae {-webkit-transition-delay: 0.7s;transition-delay: 0.7s;}
                    #letrac{-webkit-transition-delay: 0.8s;transition-delay: 0.8s;}
                    #letrah {-webkit-transition-delay: 0.9s;transition-delay: 0.9s;}
                    #v1,#v2,#v3,#v4,#v5,#v6,#v7,#v8,#v9,#v10,#v11,#v12,#v13,#v14,#v15,#v16,#v17,#v18,#v19,#v20
                    ,#v21,#v22 {-webkit-transition-delay: 0.1s;transition-delay: 0.1s;}
                    #a1,#a2,#a3,#a4,#a5,#a6,#a7,#a8,#a9
                    ,#a10,#a11,#a12,#a13 {-webkit-transition-delay: 0.1s;transition-delay: 0.1s;}



                    #delay_demo:hover #imno, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-394px);
                    }

                    #delay_demo:hover #e, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-367px);
                    }


                    #delay_demo:hover #teg, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-340px);
                    }

                    #delay_demo:hover #letrat, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }

                    #delay_demo:hover #letrat2, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }

                    #delay_demo:hover #letrae, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }

                    #delay_demo:hover #letrac, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }

                    #delay_demo:hover #letrah, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }


                    #delay_demo:hover #letrap1, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }
                    #delay_demo:hover #letrap2, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }
                    #delay_demo:hover #letray, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }

                    #delay_demo:hover #letrai1, #delay_demo.hover_effect #letra {
                        -webkit-transform: translate(-4000px,-4400px);
                        transform: translate(-0px,-400px);
                    }

                    #delay_demo:hover #v1, #delay_demo.hover_effect #v1 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg);
                    }
                    #delay_demo:hover #v2, #delay_demo.hover_effect #v2 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg);

                    }
                    #delay_demo:hover #v3, #delay_demo.hover_effect #v3 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg);
                    }
                    #delay_demo:hover #a1, #delay_demo.hover_effect #a1 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg);
                    }
                    #delay_demo:hover #a2, #delay_demo.hover_effect #a2 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg) ;
                    }
                    #delay_demo:hover #v4, #delay_demo.hover_effect #v4 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg) ;
                    }
                    #delay_demo:hover #a3, #delay_demo.hover_effect #a3 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v5, #delay_demo.hover_effect #v5 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0) rotate(-5deg) ;
                    }
                    #delay_demo:hover #v6, #delay_demo.hover_effect #v6 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a4, #delay_demo.hover_effect #a4 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v7, #delay_demo.hover_effect #v7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v8, #delay_demo.hover_effect #v8 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v9, #delay_demo.hover_effect #v9 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }

                    #delay_demo:hover #a5, #delay_demo.hover_effect #a5 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a6, #delay_demo.hover_effect #a6 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a7, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a8, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a9, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a10, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a11, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a12, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a13, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }

                    #delay_demo:hover #a14, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a15, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #a16, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v10, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-300px,12px);
                        transform: translate(-300px,12px)rotate(-5deg);
                    }
                    #delay_demo:hover #v11, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-300px,5px);
                        transform: translate(-300px,5px)rotate(-5deg);
                    }
                    #delay_demo:hover #v12, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-300px,0);
                        transform: translate(-300px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v13, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-300px,-30px);
                        transform: translate(-300px,-30px)rotate(-5deg);
                    }
                    #delay_demo:hover #v14, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-300px,-35px);
                        transform: translate(-300px,-35px)rotate(-5deg);
                    }
                    #delay_demo:hover #v15, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v16, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v17, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v18, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v19, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }

                    #delay_demo:hover #v20, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }
                    #delay_demo:hover #v21, #delay_demo.hover_effect #a7 {
                        -webkit-transform: translate(-250px,0);
                        transform: translate(-250px,0)rotate(-5deg);
                    }

                </style>

                <div style=" width: 100%!important; overflow: hidden;" id="delay_demo" class="shadow hover">

                    <div class="f" id="v1"></div>
                    <div class="f" id="v2"></div>
                    <div class="f" id="v3"></div>
                    <div class="f" id="a1"></div>
                    <div class="f" id="a2"></div>
                    <div class="f" id="v4"></div>
                    <div class="f" id="a3"></div>
                    <div class="f" id="v5"></div>
                    <div class="f" id="a4"></div>
                    <div class="f" id="v6"></div>
                    <div class="f" id="v25"></div>
                    <div class="f" id="v7"></div>
                    <div class="f" id="v8"></div>
                    <div class="f" id="a5"></div>
                    <div class="f" id="v9"></div>
                    <div class="f" id="a6"></div>
                    <div class="f" id="a7"></div>
                    <div class="g"  id="a8"></div>
                    <div class="f" id="v10">
                        <img width="70px" src="front/images/site/signo1.png">
                    </div>
                    <div class="f" id="v11">
                        <img width="50px" src="front/images/site/signo2.png">
                    </div>
                    <div  class="f" id="v12">
                        <img width="100%" src="front/images/site/mano.png">
                    </div>
                    <div class="f" id="v13">
                        <img width="50px" src="front/images/site/signo3.png">
                    </div>
                    <div class="g" id="a9"></div>
                    <div class="f" id="v14">
                        <img width="60px" src="front/images/site/signo4.png">
                    </div>
                    <div class="f" id="v15"></div>
                    <div class="g" id="a10"></div>
                    <div class="g" id="a11"></div>
                    <div class="g" id="a12"></div>
                    <div class="g" id="a13"></div>
                    <div class="f" id="v16"></div>
                    <div class="f" id="v17"></div>
                    <div class="f" id="v18"></div>
                    <div class="f" id="v19"></div>
                    <div class="f" id="v21"></div>
                    <div class="f" id="v20"></div>

                    <div class="bebas"  id="letrai1">H</div>
                    <div class="bebas"  id="letrap1">E</div>
                    <div class="bebas"  id="letrap2">A</div>
                    <div class="bebas"  id="letray">V</div>
                    <div class="bebas"  id="letrat">Y</div>
                    <div class="bebas"  id="letrat2"></div>
                    <div class="bebas"  id="letrae"></div>
                    <div class="bebas"  id="letrac"></div>
                    <div class="bebas"  id="letrah"></div>
                    <div class="bebas2"  id="teg">Developer</div>
                </div>

            </div>
            <!-- .layout-medium -->
            <div class="layout-medium">

                <h4>Hola, soy</h4>
                <h2>Yonathan Suarez</h2>
                <h4>Soy <strong id="typist-element" data-typist="desarrollador de software profesional">programador</strong></h4>

            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : HOME -->


    <!-- PAGE : ABOUT -->
    <section id="about" class="pt-page page-layout">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">


                <!-- page-title -->
                <h1 class="page-title">
                    <i class="pe-7s-user"></i>Acerca de mí
                </h1>
                <!-- page-title -->


                <!-- SERVICES -->

                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>servicios</i>
                    </h2>
                </div>
                <!-- section-title -->

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-sm-6 col-md-3">

                        <!-- service -->
                        <div class="service">
                            <!--<i class="pe-7s-glasses"></i>-->
                            <img src="{{ asset('front/images/site/icon_1.svg') }}" alt="image"/>
                            <h4>Aplicaciones Web</h4>
                            <p>Desarrollo sistemas multiplataforma, a medida. Capaces de cumplir los más exigentes requerimientos.</p>
                        </div>
                        <!-- service -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-sm-6 col-md-3">

                        <!-- service -->
                        <div class="service">
                            <!--<i class="pe-7s-joy"></i>-->
                            <img src="{{ asset('front/images/site/icon_2.svg') }}" alt="image"/>
                            <h4>Aplicaciones Moviles</h4>
                            <p>Me especializo en el desarrollo de aplicaciones híbridas, modernas y ágiles en corto periodo de tiempo.</p>
                        </div>
                        <!-- service -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-sm-6 col-md-3">

                        <!-- service -->
                        <div class="service">
                            <!--<i class="pe-7s-rocket"></i>-->
                            <img src="{{ asset('front/images/site/icon_3.svg') }}" alt="image"/>
                            <h4>Optimizacion</h4>
                            <p>Mis sitios web siempre cumple los estándares web, GTMetrix, PageSpeed, garantizando velocidad he indexación.</p>
                        </div>
                        <!-- service -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-sm-6 col-md-3">

                        <!-- service -->
                        <div class="service">
                            <!--<i class="pe-7s-scissors"></i>-->
                            <img src="{{ asset('front/images/site/icon_4.svg') }}" alt="image"/>
                            <h4>Seguridad</h4>
                            <p>Me enfoco en seguridad informática, y en el desarrollo MVC con control de versiones.</p>
                        </div>
                        <!-- service -->

                    </div>
                    <!-- col -->

                </div>
                <!-- row -->
                <!-- SERVICES -->


                <!-- PROCESS -->

                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>¿como trabajo?</i>
                    </h2>
                </div>
                <!-- section-title -->


                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">

                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-chat"></i>
                            <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            <h4>CONVERSAR</h4>
                        </div>
                        <!-- process -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">

                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-light"></i>
                            <h4>IDEA</h4>
                        </div>
                        <!-- process -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">

                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-vector"></i>
                            <h4>DISEÑO</h4>
                        </div>
                        <!-- process -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">

                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-network"></i>
                            <h4>DESARROLLO</h4>
                        </div>
                        <!-- process -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">

                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-browser"></i>
                            <h4>PRUEBAS</h4>
                        </div>
                        <!-- process -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-sm-2">

                        <!-- process -->
                        <div class="process">
                            <i class="pe-7s-rocket"></i>
                            <h4>LANZAMIENTO</h4>
                        </div>
                        <!-- process -->

                    </div>
                    <!-- col -->

                </div>
                <!-- row -->
                <!-- PROCESS -->


                <!-- CLIENTS -->

                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>clientes</i>
                    </h2>
                </div>
                <!-- section-title -->

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://1amanager.com/" target="_blank">
                                <img src="{{asset('front/images/clients/amanager.png')}}" alt="1amanager">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://www.tecnirollos.com/" target="_blank">
                                <img src="{{asset('front/images/clients/tecni.png')}}" alt="Tecnirollos">
                            </a>
                        </div>
                        <!-- client -->

                    </div>


                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://ziim.es/" target="_blank">
                                <img src="{{asset('front/images/clients/ziim.png')}}" alt="ZIIM APP">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://c3software-ca.com/" target="_blank">
                                <img src="{{asset('front/images/clients/c3.png')}}" alt="c3software c.a">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="https://mochileros.com.mx/" target="_blank">
                                <img src="{{asset('front/images/clients/mochileros.png')}}" alt="Mochileros.com.mx">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://colombiaconstruye.com" target="_blank">
                                <img src="{{asset('front/images/clients/colombia_con.png')}}" alt="Colombiaconstruye.com">
                            </a>
                        </div>
                        <!-- client -->

                    </div>

                    <!-- col -->

                </div>

                <div class="row">

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://www.zippyttech.com/" target="_blank">
                                <img src="{{asset('front/images/clients/zipi.png')}}" alt="zippyttech">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://cejasymas.es/" target="_blank">
                                <img src="{{asset('front/images/clients/cejasymas.png')}}" alt="cejas y mas">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->

                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://www.c3software-ca.com/dondequeda/" target="_blank">
                                <img src="{{asset('front/images/clients/donde.png')}}" alt="DondeQueda App">
                            </a>
                        </div>
                        <!-- client -->

                    </div>

                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://esproarq.com.ve/" target="_blank">
                                <img src="{{asset('front/images/clients/expro.png')}}" alt="EsproArq">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://leangasoftware.es/" target="_blank">
                                <img src="{{asset('front/images/clients/leanga.png')}}" alt="Leanga Software">
                            </a>
                        </div>
                        <!-- client -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-4 col-md-2">

                        <!-- client -->
                        <div class="client">
                            <a href="http://agroquimicosvenezuela.com.ve/" target="_blank">
                                <img src="{{asset('front/images/clients/agro.png')}}" alt="AgroQuimicos ve.">
                            </a>
                        </div>
                        <!-- client -->

                    </div>

                    <!-- col -->

                </div>
                <!-- row -->
                <!-- CLIENTS -->


                <!-- FUN FACT -->

                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>diversión</i>
                    </h2>
                </div>
                <!-- section-title -->

                <!-- row -->
                <div class="row">

                    <!-- col -->
                  {{--  <div class="col-xs-6 col-sm-3">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-map-2"></i>
                            <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            <h4>2 Paises visitados</h4>
                        </div>
                        <!-- fun-fact -->

                    </div>--}}
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-6 col-sm-4">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-play"></i>
                            <h4>6 Videos en  Youtube</h4>
                        </div>
                        <!-- fun-fact -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-6 col-sm-4">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-coffee"></i>
                            <h4><stroke>20.000</stroke> Tazas de cafe </h4>
                        </div>
                        <!-- fun-fact -->

                    </div>
                    <!-- col -->

                    <!-- col -->
                    <div class="col-xs-6 col-sm-4">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-light"></i>
                            <h4>Infinitas Ideas</h4>
                        </div>
                        <!-- fun-fact -->

                    </div>
                    <!-- col -->

                </div>
                <!-- row -->
                <!-- FUN FACT -->
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : ABOUT -->


    <!-- PAGE : RESUME -->
    <section id="resume" class="pt-page page-layout">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">


                <!-- page-title -->
                <h1 class="page-title">
                    <i class="pe-7s-id"></i>Resumen
                </h1>
                <!-- page-title -->


                <!-- row -->
                <div class="row">


                    <!-- col -->
                    <div class="col-sm-7">


                        <div class="event">
                            <h2>Historial</h2>
                            <p>
                                <i class="pe-7s-ribbon"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            </p>
                        </div>

                        <div class="event">
                            <h3>Marzo 2017 - Actualmente</h3>
                            <h4>Developer Fron end</h4>
                            <h5><a href="https://mochileros.com.mx/">Mochileros.co.mx </a></h5>
                            <p>Actualmente trabajo para mochileros en donde mis capacidades estan aumentado cada día. He desarrollado desde Back y Front.</p>
                        </div>

                        <div class="event">
                            <h3>Agosto 2017 - Actualmente</h3>
                            <h4>Full Stack Developer</h4>
                            <h5><a href="http://ziim.es">ziim.com</a></h5>
                            <p>Trabajo  desarrollando su  Aplicacion Movil, Ademas del panel administrativo  donde trabajo en todo el Back y Front.</p>
                        </div>


                        <div class="event">
                            <h3>Julio 2017 - Actualmente</h3>
                            <h4>Desarrollo Web, Freelancer</h4>
                            <h5><a href="http://leangasoftware.es">Leangasoftware S L</a></h5>
                            <p>Son varios los proyectos en los que he participado, me enfoco en el desarrollo frond end y aplicaciones en ionic2.</p>
                        </div>

                        <div class="event">
                            <h3>Diciembre 2016 - Junio 2017</h3>
                            <h4>Developer Fron end</h4>
                            <h5><a href="http://www.zippyttech.com/">zippyttech C.A </a> </h5>
                            <p>forme parte en Varios proyectos, colaborando en la implementación de nuevos módulos en los diversos sistemas que ellos ofrecen.</p>
                        </div>

                        <div class="event">
                            <h3>Septiembre 2015 - Diciembre 2016</h3>
                            <h4> Full Stack Developer</h4>
                            <h5>NOVA</h5>
                            <p>Realice varios aportes a esta empresa, las mas resaltantes fueron 2 aplicaciones moviles.</p>
                        </div>

                        <div class="event">
                            <h3>Agosto 2015 - Diciembre 2016</h3>
                            <h4>Fundador y  Full Stack Developer</h4>
                            <h5><a href="http://www.c3software-ca.com">c3software C.A</a></h5>
                            <p>Fundamos esta empresa justo después de graduarme de la universidad,  en asosiación con 4 compañeros mas, con los cuales gane mucha experiencia y valiosos clientes.</p>
                        </div>

                        <div class="event">
                            <h2>EDUCACIÓN</h2>
                            <p>
                                <i class="pe-7s-study"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            </p>
                        </div>

                        <div class="event">
                            <h3>2015</h3>
                            <h4>Ingeniería Informática</h4>
                            <h5>Instituto de Técnologia</h5>
                            <p>Táchira - Venezuela</p>
                        </div>

                        <div class="event">
                            <h3>2013</h3>
                            <h4>Técnico Superior en Informática</h4>
                            <h5>Instituto de Técnologia</h5>
                            <p>Táchira - Venezuela</p>
                        </div>

                        <div class="event">
                            <h3>2010</h3>
                            <h4>Bachiller en Ciencias</h4>
                            <h5>Liceo Dr. vicente Davila</h5>
                            <p>Táchira - Venezuela</p>
                        </div>
                        @foreach($setting as  $set)
                            @if($set->name == 'download_cv')
<!--                                 <p><a href="{{$set->value}}" target="_blank" class="button"><i class="pe-7s-download"></i>Descargar CV</a></p> -->
                            @endif
                        @endforeach


                    </div>
                    <!-- col -->


                    <!-- col -->
                    <div class="col-sm-5">


                        <!-- section-title -->
                        <div class="section-title center">
                            <h2>
                                <i>habilidades</i>
                            </h2>
                        </div>
                        <!-- section-title -->


                        <!-- .skill-unit -->
                        <div class="skill-unit">
                            <h4>HTML5 <a href="https://www.workana.com/workers/certification/6a579e40a84fd02d0ab04a3b56b946d2/html-5-intermedio/9159" target="_blank">Ver</a></h4>
                            <div class="bar" data-percent="87">
                                <div class="progress"></div>
                            </div>
                        </div>
                        <!-- .skill-unit -->

                        <!-- .skill-unit -->
                        <div class="skill-unit">
                            <h4>CSS3 <a href="https://www.workana.com/workers/certification/6a579e40a84fd02d0ab04a3b56b946d2/css-basico/9122" target="_blank">Ver</a></h4>
                            <div class="bar" data-percent="73">
                                <div class="progress"></div>
                            </div>
                        </div>

                        <div class="skill-unit">
                            <h4>Ionic2</h4>
                            <div class="bar" data-percent="70">
                                <div class="progress"></div>
                            </div>
                        </div>
                        <!-- .skill-unit -->

                        <!-- .skill-unit -->
                        <div class="skill-unit">
                            <h4>AngularJs <a href="https://www.workana.com/workers/certification/6a579e40a84fd02d0ab04a3b56b946d2/angular-js/8878" target="_blank">Ver</a></h4>
                            <div class="bar" data-percent="73">
                                <div class="progress"></div>
                            </div>
                        </div>
                        <!-- .skill-unit -->

                        <!-- .skill-unit -->
                        <div class="skill-unit">
                            <h4>Wordpress <a href="https://www.workana.com/workers/certification/6a579e40a84fd02d0ab04a3b56b946d2/wordpress-intermediario/8954" target="_blank">Ver</a></h4>
                            <div class="bar" data-percent="70">
                                <div class="progress"></div>
                            </div>
                        </div>
                        <!-- .skill-unit -->

                        <!-- .skill-unit -->
                        <div class="skill-unit">
                            <h4>PHP <a href="https://www.workana.com/workers/certification/6a579e40a84fd02d0ab04a3b56b946d2/php-5-avanzado/9945" target="_blank">Ver</a></h4>
                            <div class="bar" data-percent="83">
                                <div class="progress"></div>
                            </div>
                        </div>
                        <!-- .skill-unit -->

                        <!-- .skill-unit -->
                        <div class="skill-unit">
                            <h4>Laravel</h4>
                            <div class="bar" data-percent="78">
                                <div class="progress"></div>
                            </div>
                        </div>

                        <div class="skill-unit">
                            <h4>MySQL</h4>
                            <div class="bar" data-percent="75">
                                <div class="progress"></div>
                            </div>
                        </div>

                        <div class="skill-unit">
                            <h4>PostgreSQL</h4>
                            <div class="bar" data-percent="70">
                                <div class="progress"></div>
                            </div>
                        </div>




                        <!-- .skill-unit -->

                        <!-- Testimonial -->
                        <div class="testo">
                            <img src="{{asset('front/images/site/leifer.jpg')}}" alt="someone">
                            <h4><a href="https://www.linkedin.com/in/leifermendez/" target="_blank">Leifer Mendez</a></h4>
                            <h5>Developer.</h5>
                            <p>Excelente profesional, Va al directo al objetivo y aporta nuevas ideas </p>

                        </div>
                        <!-- Testimonial -->

                        <!-- Testimonial -->
                        <div class="testo">
                            <img src="{{asset('front/images/site/germany.jpg')}}" alt="someone">
                            <h4><a href="https://www.workana.com/e/72e417a19520da7db7b6217815b933ae" target="_blank">Jorge Vega</a></h4>
                            <h5>CEO / Mochileros</h5>
                            <p>Gran calidad de código, a tiempo y excelente servicio. Hizo siempre más de lo que le pedí y mejoró siempre la idea. 100% recomendable !</p>

                        </div>
                        <!-- Testimonial -->

                        <!-- Testimonial -->
                        <div class="testo">
                            <img src="{{asset('front/images/site/luisr.jpg')}}" alt="someone">

                            <h4><a href="https://www.linkedin.com/in/luis-fernando-pe%C3%B1a/" target="_blank">Luis Peña</a></h4>
                            <h5>Developer</h5>
                            <p>Excelente comunicacion y velocidad. profesional altamente recomendable.</p>

                        </div>

                        <div class="testo">
                            <img src="{{asset('front/images/site/adrian.jpg')}}" alt="someone">

                            <h4><a href="https://www.linkedin.com/in/ladriangb/" target="_blank">Luis Adrian</a></h4>
                            <h5>CTO</h5>
                            <p>Buen desarrollador Fron End, trabajé  con el y cumplió los objetiovos en el tiempo acordado.</p>

                        </div>

                        <div class="testo">
                            <img src="{{asset('front/images/site/antonio.jpg')}}" alt="someone">

                            <h4><a href="https://www.linkedin.com/in/antonio-george-hajjat-nassour-982534b8/" target="_blank">Antonio Hajjat </a></h4>
                            <h5>Independiente</h5>
                            <p>Excelente Profecional muy versatil y comunicativo, trabajo actualmente con el y espero seguir haciendolo .</p>

                        </div>

                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div style="text-align: center">
                            <div class="g-ytsubscribe" data-channelid="UCbLCjrhCC1jl68lxNbSHw0g" data-layout="full" data-count="default"></div>
                        <!-- Testimonial -->
                        </div>


                    </div>
                    <!-- col -->


                </div>
                <!-- row -->


            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : RESUME -->


    <!-- PAGE : PORTFOLIO -->
    <section id="portfolio" class="pt-page page-layout portfolio">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">


                <!-- page-title -->
                <h1 style="color: #ffffff;" class="page-title">
                    <i class="pe-7s-glasses"></i>Mis trabajos
                </h1>
                <!-- page-title -->


                <!--FILTERS-->
                <ul id="filters" class="filters">
                    <li class="current">
                        <a href="#" data-filter="*">all</a>
                    </li>
                    @foreach($categories as $category)
                        <li>
                            <a href="#" data-filter=".{{$category->id}}">{{$category->name}}</a>
                        </li>
                    @endforeach

                </ul>
                <!--FILTERS-->


                <!-- PORTFOLIO -->
                <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">

                    @foreach($works as $work)
                        <!-- portfolio-item -->
                            <div class="media-cell {{$work->category_id}} hentry">

                                <div class="media-box">
                                    @if($work->feature_img)
                                        <img src="{{config("app.url")}}/image/{{$work->feature_img->id}}/305/230" alt="portfolio-post">
                                    @endif
                                    <div class="mask"></div>
                                    <a href="work/{{$work->id}}" class="ajax"></a>
                                </div>

                                <div class="media-cell-desc">
                                    <h3>{{$work->name}}</h3>
                                    <p class="category">{{$work->category}}</p>
                                </div>

                            </div>
                            <!-- portfolio-item -->
                    @endforeach



                </div>
                <!-- PORTFOLIO -->


            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : PORTFOLIO -->


    <!-- PAGE : BLOG -->
    <section id="blog" class="pt-page page-layout">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">


                <!-- page-title -->
                <h1 style="color: #fff;" class="page-title">
                    <i class="pe-7s-cloud-download"></i>Descargas
                </h1>
                <!-- page-title -->
                <ul id="filters" class="filters">
                    <li class="current">
                        <a href="#" data-filter="*">all</a>
                    </li>
                    @foreach($categories as $category)
                        <li>
                            <a href="#" data-filter=".{{$category->id}}">{{$category->name}}</a>
                        </li>
                    @endforeach

                </ul>
                <!--FILTERS-->

                <!-- PORTFOLIO -->
                <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">

                @foreach($des as $work)
                    <!-- portfolio-item -->
                        <div class="media-cell {{$work->category_id}} hentry">

                            <div class="media-box">
                                @if($work->feature_img)
                                    <img src="{{config("app.url")}}/image/{{$work->feature_img->id}}/305/230" alt="portfolio-post">
                                @endif
                                <div class="mask"></div>
                                <a href="download/{{$work->id}}" class="ajax"></a>
                            </div>

                            <div class="media-cell-desc">
                                <h3>{{$work->name}}</h3>
                                <p class="category">{{$work->category}}</p>
                            </div>

                        </div>
                        <!-- portfolio-item -->
                    @endforeach



                </div>

                <div class="entry-content">
                    <p style="color: #ffffff"> Todos los proyectos tienen su base de datos y estan libres para que los usen como plascan.</p>
                </div>
            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : BLOG -->


    <!-- PAGE : CONTACT -->
    <section id="contact" class="pt-page page-layout contact light-text">
        <!-- .content -->
        <div class="content">
            <!-- .layout-medium -->
            <div class="layout-medium">


                <!-- page-title -->
                <h1 class="page-title">
                    <i class="pe-7s-call"></i>Contacto
                </h1>
                <!-- page-title -->


                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>Redes</i>
                    </h2>
                </div>
                <!-- section-title -->

                <!-- SOCIAL -->
                <ul class="social">
                    <li><a class="facebook" href="https://www.facebook.com/yonathan.suarez.583" target="_blank"></a></li>
                    <li><a class="twitter" href="https://twitter.com/jond_14" target="_blank"></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/in/yonathan-suarez-a357a6136/" target="_blank"></a></li>
                    <li><a class="instagram" href="https://www.instagram.com/yonathan.s.c/" target="_blank"></a></li>
                    <li><a class="youtube" href="https://www.youtube.com/channel/UCbLCjrhCC1jl68lxNbSHw0g?view_as=subscriber" target="_blank"></a></li>
                </ul>
                <!-- SOCIAL -->


                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>Contáctame</i>
                    </h2>
                </div>
                <!-- section-title -->


                <!-- row -->
                <div class="row">

                    <!-- column 3/12 -->
                    <div class="col-xs-12 col-sm-4">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-map-marker"></i>
                            <!--<img src="images/site/icon-03.png" alt="image"/>-->
                            <h4>Madrid, España</h4>
                        </div>
                        <!-- fun-fact -->

                    </div>
                    <!-- column 3/12 -->

                    <!-- column 3/12 -->

                    <div class="col-xs-12 col-sm-4">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-mail"></i>
                            @foreach($setting as  $set)
                                @if($set->name == 'email')
                                    <h4>{{$set->value}}</h4>
                                @endif
                            @endforeach
                        </div>
                        <!-- fun-fact -->

                    </div>

                    <div class="col-xs-12 col-sm-4">

                        <!-- fun-fact -->
                        <div class="fun-fact">
                            <i class="pe-7s-call"></i>
                            @foreach($setting as  $set)
                                @if($set->name == 'phone')
                                    <h4>Tel : {{$set->value}}</h4>
                                @endif
                            @endforeach

                        </div>
                        <!-- fun-fact -->

                    </div>




                </div>
                <!-- row -->


                <!-- section-title -->
                <div class="section-title center">
                    <h2>
                        <i>Escribeme</i>
                    </h2>
                </div>
                <!-- section-title -->


                <!-- .contact-form -->
                <div class="contact-form" style="height: 500px">

                    <form id="contact-form" class="validate-form" method="post" action="{{url('send')}}">

                        <!-- enter mail subject here -->
                        <input type="hidden" name="subject" id="subject"
                               value="You have a new message from Photographer!">

                        <p>
                            <label for="name">NOMBRE</label>
                            <input type="text" name="name" id="name" class="required">
                        </p>

                        <p>
                            <label for="email">EMAIL</label>
                            <input type="text" name="email" id="email" class="required email">
                        </p>

                        <p class="antispam">Leave this empty if you are a human :
                            <br/><input name="url"/>
                        </p>

                        <p>
                            <label for="message">MENSAJE</label>
                            <textarea name="message" id="message" class="required"></textarea>
                        </p>
						<p>
                    	</p>
                        <div data-theme="dark" requred class="g-recaptcha" data-sitekey="6Lfn60UUAAAAAC8W_zn0N4EVwCbKmxIyACPM7vly">
                    	</div>
                        <button style="float: right;" class="submit button ">Enviar</button>
                    

                    </form>

                </div>
                <!-- .contact-form -->


                <!-- GOOGLE MAP -->
                <div class="map" style="background-image: url({{asset("front/images/site/map.png")}})">

                </div>
                <!-- GOOGLE MAP -->


            </div>
            <!-- .layout-medium -->
        </div>
        <!-- .content -->
    </section>
    <!-- PAGE : CONTACT -->
@endsection
