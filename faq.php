<?php
function time_elapsed_string($ptime)
{
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
        30 * 24 * 60 * 60  =>  'month',
        24 * 60 * 60  =>  'day',
        60 * 60  =>  'hour',
        60  =>  'minute',
        1  =>  'second'
    );
    $a_plural = array( 'year'   => 'years',
        'month'  => 'months',
        'day'    => 'days',
        'hour'   => 'hours',
        'minute' => 'minutes',
        'second' => 'seconds'
    );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
}
?>
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
    <script type="text/javascript" src="assets/js/floatlabels.min.js"></script>

    <title>Insanity Party - FAQ</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


</head>
<body>

<div class="dotts" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tile-home">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6 col-md-offset-5 col-sm-offset-4 col-xs-offset-3">
                            <img src="assets/img/logo.png" class="img-responsive">
                            <h4><a href="home.php">Return Home</a></h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                    <div class="tile-questions">
                        <div class="row">
                            <h2>Questions and Answers</h2>
                            <div class="split-small"></div>
                            <div class="questions row">
                                <div class="col-md-12">
                                    <div class="question big">
                                        <b>When is the event?</b>
                                        <p>Insanity will be running from 9PM to midnight on 13th May 2016.</p>
                                    </div>
                                    <div class="question big">
                                        <b>Where is the event?</b>
                                        <p>69 Girdle Ridge Rd, Katonah NY, 10536.</p>
                                    </div>
                                    <div class="question big">
                                        <b>Is Alcohol Allowed?</b>
                                        <p>No, if seen it will be seized. Same with any illegal substances.</p>
                                    </div>
                                    <div class="question big">
                                        <b>Are some schools not allowed?</b>
                                        <p>All local high schools, or those closely affiliated with the high schools are allowed IE recent graduates. </p>
                                    </div>
                                    <div class="question big">
                                        <b>Will the parents be home?</b>
                                        <p>Yes, along with 6 Security personnel. </p>
                                    </div>
                                    <div class="question big">
                                        <b>How do we contact you?</b>
                                        <p>You can email Contact@insanityparty.com or text/call me at 9144868563. </p>
                                    </div>
                                    <div class="question big">
                                        <b>Do I need to bring money?</b>
                                        <p>No, this party is 100% free. All food, drink, and accessories will be provided for you.</p>
                                    </div>

                                    <h4><a href="home.php">Return Home</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <script type="text/javascript" src="assets/js/app.js"></script>

            <script type="text/javascript">

                window.onresize = function(event)
                {
                    $(".tile").center();
                }
                $( document ).ready(function() {
                    $(".tile-wrapper").tileWrapper();
                });
            </script>
        </div>

</body>
</html>
