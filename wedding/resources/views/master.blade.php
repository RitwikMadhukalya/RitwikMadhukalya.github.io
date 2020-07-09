<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding Season 2020</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Cinzel&family=Dancing+Script&family=Fondamento&family=Galada&family=Open+Sans+Condensed:ital,wght@0,300;1,300&family=Pacifico&family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <style>
        .back-to-top {
        position: fixed;
        bottom: 25px;
        right: 25px;
        display: none;
}
    </style>
    @yield('styles')
</head>
<body>
    @yield('content')
    <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fa fa-chevron-circle-up white-text" aria-hidden="true"></i></i></a>
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 400);
                    return false;
                });
        });
    </script>
</body>
</html>