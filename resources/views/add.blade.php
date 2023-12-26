<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Add</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <style>
        * {
            box-sizing: border-box !important;
            transition: ease all 0.5s;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: #666666;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            line-height: 1.80857;
            font-weight: normal;
            overflow-x: hidden;
        }

        a {
            color: #1f1f1f;
            text-decoration: none !important;
            outline: none !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            letter-spacing: 0;
            font-weight: normal;
            position: relative;
            padding: 0 0 10px 0;
            font-weight: normal;
            line-height: normal;
            color: #111111;
            margin: 0
        }

        h1 {
            font-size: 24px
        }

        h2 {
            font-size: 22px
        }

        h3 {
            font-size: 18px
        }

        h4 {
            font-size: 16px
        }

        h5 {
            font-size: 14px
        }

        h6 {
            font-size: 13px
        }

        *,
        *::after,
        *::before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: #212121;
            text-decoration: none!important;
            opacity: 1
        }

        button:focus {
            outline: none;
        }

        ul,
        li,
        ol {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        p {
            margin: 20px;
            font-weight: 300;
            font-size: 15px;
            line-height: 24px;
        }

        a {
            color: #222222;
            text-decoration: none;
            outline: none !important;
        }

        a,
        .btn {
            text-decoration: none !important;
            outline: none !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        :focus {
            outline: 0;
        }

        .paddind_bottom_0 {
            padding-bottom: 0 !important;
        }

        .btn-custom {
            margin-top: 20px;
            background-color: transparent !important;
            border: 2px solid #ddd;
            padding: 12px 40px;
            font-size: 16px;
        }

        .lead {
            font-size: 18px;
            line-height: 30px;
            color: #767676;
            margin: 0;
            padding: 0;
        }

        .form-control:focus {
            border-color: #ffffff !important;
            box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
        }

        .navbar-form input {
            border: none !important;
        }

        .badge {
            font-weight: 500;
        }

        blockquote {
            margin: 20px 0 20px;
            padding: 30px;
        }

        button {
            border: 0;
            margin: 0;
            padding: 0;
            cursor: pointer;
        }

        .full {
            float: left;
            width: 100%;
        }

        .layout_padding {
            padding-top: 100px;
            padding-bottom: 0px;
        }

        .padding_0 {
            padding: 0px;
        }





        /* contact section start */

        .contact_section {
            width: 100%;
            float: left;
        }

        .contact_taital {
            width: 100%;
            float: left;
            font-size: 40px;
            color: #252525;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }

        .contact_section_2 {
            width: 100%;
            float: left;
            padding-top: 55px;
        }

        .padding_left_0 {
            padding-left: 0px;
        }

        .mail_section_1 {
            width: 50%;
            margin: 0 auto;
        }

        .mail_text {
            width: 100%;
            float: left;
            font-size: 16px;
            color: #2e2e2d;
            border: 0px;
            background-color: #efefef;
            padding: 11px 20px;
            margin-top: 20px;
            border-radius: 40px;
            font-family: 'Poppins', sans-serif;
        }

        input.mail_text::placeholder {
            color: #2e2e2d;
        }

        .massage-bt {
            color: #2e2e2d;
            width: 100%;
            height: 110px;
            font-size: 18px;
            background-color: #efefef;
            padding: 40px 20px 0px 20px;
            border: 0px;
            height: 110px;
            margin-top: 20px;
            border-radius: 40px;
            font-family: 'Poppins', sans-serif;
        }

        textarea#comment.massage-bt::placeholder {
            color: #2e2e2d;
        }

        .send_bt {
            width: 170px;
            margin: 0 auto;
            text-align: center;
        }

        .send_bt a {
            width: 100%;
            text-align: center;
            font-size: 16px;
            color: #fefefd;
            background-color: #3459d1;
            padding: 10px;
            text-transform: uppercase;
            margin-top: 20px;
            display: block;
            font-weight: bold;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }

        .send_bt a:hover {
            color: #fefefd;
            background-color: #4a4949;
        }




        .margin_top90 {
            margin-top: 90px;
        }

    </style>
    
   </head>
   <body>

      <!-- contact section start -->
      <div class="contact_section layout_padding">

         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->

   </body>
</html>
