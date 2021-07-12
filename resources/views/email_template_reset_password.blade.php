<!DOCTYPE html>
<html>
<head>
     <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
        }
        .wrapper {
            max-width: 600px;
            margin: 0 auto;
            background: #0D151E;
        }
        header{
            width: 100%;
            height: 56px;
            background: black;
           /* display: flex;
            justify-content: center;
            align-items: center;*/
            margin-bottom: 80px;
            box-sizing: border-box;
            padding-top: 8px;
        }

        header img {
            width: 145.63px;
            height: 40px;
            display: block;
            margin:0 auto;
        }

        .text1{
            font-weight: bold;
            font-size: 24px;
            line-height: 33px;
            text-align: center;
            color:  #DADADA;
        }

        .svg_block{
            margin: 0 auto;
            display: block;
            margin-top: 32px;
        }

        .text2{
            max-width: 450px;
             font-family: 'Inter', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            letter-spacing: -0.011em;
            color: #DADADA;
            margin: 0 auto;
            margin-top: 24px;
        }

        .reset{
            width: 190px;
            height: 56px;
            text-align: center;
            background: #E5D6A0;
            text-decoration: none;
            color: #1F2326!important;
            margin:0 auto;
            margin-top: 51px;
           font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 600;
            font-size: 15px;
            display: block;
            padding-top: 17px;
            box-sizing: border-box;
            margin-bottom: 80px;
        }

        .text3_wrapper{
            max-width: 560px;
            border-top: 1px solid #84909A;
            padding-top: 16px;
            margin: 0 auto;
        }

        .text3_wrapper p{
             font-family: 'Inter', sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 13px;
            line-height: 24px;
            text-align: center;
            letter-spacing: -0.011em;
            color: #84909A;
            margin-bottom: 24px;
        }

        footer{
            height: 56px;
            background: black;
            box-sizing: border-box;
            padding-top: 12px;
        }

        .footer_wrapper{
            width: 77px;
            margin: 0 auto;
        }

        .footer_wrapper a{
            text-decoration: none;
        }


        .reset:hover{
            border: 1px solid #E5D6A0;
            background: transparent;
            color: #E5D6A0!important;
        }



         @media(max-width: 450px) {
            .text2{
                max-width: 300px;
            }
        }


    </style>
</head>

<body style="background: #525252;">

    <div class="wrapper">
        <header>
            <img src="https://drafter.ru/public/website/images/logo.jpg">
        </header>
        <p class="text1">Восстановление пароля</p>
       <img class='svg_block' src="https://drafter.ru/website/images/lock.png">

    
        <p class="text2">
            Вы запросили восстановление пароля. Для установки нового пароля и продолжения работы нажмите на кнопку ниже.
        </p>

        <a href="{{ route('verify_password.email',['token'=>$token,'user'=>$user]) }}" class="reset">Восстановить</a>

        <div class="text3_wrapper">
            <p>Если Вы не запрашивали изменение пароля, пожалуйста, проигнорируйте данное сообщение или <a href="https://drafter.ru/" style="color: #E5D6A0" href="">свяжитесь с нами.</a></p>
            
        </div>


        <footer>
            <div class="footer_wrapper">
                <a href="/" style="margin-right: 24px">
                    <img src="https://drafter.ru/public/website/images/vk.png">
                </a>

                <a href="/">
                    <img src="https://drafter.ru/public/website/images/inst.png">
                </a>
            </div>
        </footer>


    </div>

</body>
</html>