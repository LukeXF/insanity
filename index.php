<!DOCTYPE html>
<html lang="en" class="no-js insanity">
<head>
    <meta charset="UTF-8"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="assets/js/jquery.interactive_bg.js"></script>

    <title>Insanity Party NYC</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


</head>
<body>

    <div class="bg" data-ibg-bg="assets/img/bg.jpg">

        <div class="dotts">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="tile">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 col-md-offset-0">
                                    <img src="assets/img/logo.png" class="img-responsive">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h1>INSANITY</h1>
                                    <div class="split"></div>
                                    <div id="clockdiv" class="row">
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <span class="days"></span>
                                            <div class="smalltext">Days</div>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <span class="hours"></span>
                                            <div class="smalltext">Hours</div>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <span class="minutes"></span>
                                            <div class="smalltext">Mins</div>
                                        </div>
                                        <div class="col-md-2 col-sm-3 hidden-xs visible-sm-block visible-sm visible-md visible-lg">
                                            <span class="seconds"></span>
                                            <div class="smalltext">Secs</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <a href="https://twitter.com/InsanityPrty" target="_blank" class="twitter hidden-sm hidden-xs visible-md-block visible-md visible-lg">
                                <i class="fa fa-twitter fa-2x"></i>
                            </a>
                        </div>
                        <div class="click">Enter Site</div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(".bg").interactive_bg();
            $(".tile").center();
            window.onresize = function(event)
            {
                $(".tile").center();
            }

        </script>

        <script type="text/javascript" src="assets/js/app.js"></script>
    </div>

</body>
</html>
