<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MINIBITES</title>
        <!-- font awesome cnd link -->
        <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">
       <!-- custom css file -->
        <link rel="stylesheet" href="{{asset('nice/css/style.css')}}">
    </head>
    <body>



    <!-- header section starts -->

    @include('user.home.navbar')
     <!-- header section ends -->



     <!-- home section starts -->
    @include('user.home.main')

    <!--  footer section starts -->
    @include('user.home.footer')

    </body>
 </html>
