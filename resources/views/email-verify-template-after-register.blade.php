<!-- <!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

     
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #1f2428; margin: 0 !important; padding: 0 !important;">

<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> We're thrilled to have you here! Get ready to dive into your new account. </div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">

    <tr>
        <td bgcolor="#e5d6a0" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#e5d6a0" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                        <h1 style="font-size: 48px; font-weight: 400; margin: 2px;">Добро пожаловать !</h1> <img src=" https://img.icons8.com/clouds/100/000000/handshake.png" width="125" height="120" style="display: block; border: 0px;" />
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#1f2428" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 0;">Мы очень рады, что вы приступили к работе. Во-первых, вам необходимо подтвердить свою учетную запись ( почту ). Просто нажмите кнопку ниже.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="border-radius: 3px;" bgcolor="#e5d6a0"><a href="{{ route('verify_email_after_register',['token'=>$token,'email'=>$email]) }}" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #e5d6a0; display: inline-block;">Confirm Account</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 0;">Если у вас есть вопросы, просто ответьте на это письмо - мы всегда рады помочь.</p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 0;">С уважением`  Команда Drafter</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>
 -->



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
        <p class="text1">Подтвердите адрес электронной почты</p>
       <img class='svg_block' src="https://drafter.ru/website/images/mail.png">

    
        <p class="text2">
            Спасибо, что зарегистрировались в DRAFTER! Чтобы настроить учетную запись, подтвердите свой электронный адрес, нажав кнопку ниже.
        </p>

        <a href="{{ route('verify_email_after_register',['token'=>$token,'email'=>$email]) }}" class="reset">Подтвердить</a>

        <div class="text3_wrapper">
            <p>Если вы не регистрировались на нашей платформе, пожалуйста, проигнорируйте это уведомление или <a href="https://drafter.ru/" style="color: #E5D6A0" href="">свяжитесь с нами.</a></p>
            
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