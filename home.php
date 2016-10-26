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

    <title>Insanity Party - Home</title>
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
                            <div class="col-md-2 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 col-md-offset-0">
                                <img src="assets/img/logo.png" class="img-responsive">
                            </div>
                            <div class="col-md-10 col-sm-10" id="clockdiv">
                                <div class="split" style="margin-top: 20px;"></div>
                                <h1 style="margin: 10px 0;">INSANITY IN <span class="days"></span> DAYS</h1>
                                <div class="split"></div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="tile-wrapper">
                        <div class="tile-home" id="updates">
                            <div class="row">
                                <h2>UPDATES</h2>
                                <div class="split-small"></div>
                                <div class="updates row">
                                    <div class="col-md-12">
                                        
                                        <div class="update">
                                            <b>Letter to the Concerned</b>
                                            <p>
                                                With 18 days left until the party, it’s important that we go over the details and rules. Let’s start this off by saying this letter is oriented to the parents, but we’ll be putting all of the important information at the beginning to minimize reading for the rest of you. 
                                            </p>
                                            <p>
                                                This party is 0 tolerance. We do not permit drugs or alcohol. There seems to be a misunderstanding that the previous party was a permissive environment for these activities, and I can tell you this understanding is incorrect. If alcohol was seen it was seized and thrown away. If drugs were seen they were seized and thrown away. If individuals seemed under the influence their parents were called. 
                                            </p>
                                            <p>
                                                Any gathering with teenagers, there is going to be a group that decides its “cool” to get drunk or high. That group is not welcome at this party. 
                                            </p>
                                            <p>
                                                There is 0 tolerance policy towards the use of alcohol or drugs. If seen they will be seized and thrown away and you will be asked to leave. There will be valet parking, and security on site who have strict instructions regarding the above.                                             
                                            </p>
                                            <p>
                                                We have even gone as far as to provide contact forms and information, to use our abilities to create this website. I understand your worry and concern, but understand this is not just some party. This is a coordinated safe event to celebrate the future that lays beyond for this group of kids. If you have concern or questions, please contact us. 

                                            </p>
                                            <p>
                                                contact@insanityparty.com<br>
                                                9144868563
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>Hey there!</b>
                                            <p>
                                                With 18 days left until the party, it’s important that we go over the details and rules. Let’s start this off by saying this letter is oriented to the parents, but we’ll be putting all of the important information at the beginning to minimize reading for the rest of you. 
                                            </p>
                                            <p>
                                                DATE – 5/13/16
                                                TIME – 9PM – 12AM
                                                LOCATION – 69 GIRDLE RIDGE RD, KATONAH NY
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>Note</b>
                                            <p>
                                                When the valet is full, the entrance to the party will be shut down. It is highly recommended that you arrive on time or early. All party goer’s must carpool or be dropped off. We will not allow individuals who arrive 1 per car. This party is for local high schooler’s; it is not open to all individuals. Please bring your student ID, as you may be asked to present it at the valet. All local high schools are welcome.
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>RULES</b>
                                            <p>
                                                NO ALCOHOL -
                                                NO ILLEGAL SUBSTANCES (WEED) -
                                                RESPECT - 
                                                ENJOY -
                                            </p>
                                            <p>
                                                All Alcohol and Illegal substances will be seized if seen. If you disrespect security as they do so you may be asked to leave. If you do not have a ride home, you will be driven. If you appear under the influence you will not be allowed to drive. 
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>A Great Track Record</b>
                                            <p>
                                                The first Insanity party took place last Halloween. We had over 300 arrivals, and not a single fight, destruction of property, or police incident. Every single person arrived home safely, and that’s how we’re going to keep it for Insanity II.
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>Security &amp; Personal</b>
                                            <p>
                                                The party will have 6 securities personal, 5 Valet drivers and one Valet administrator. The local authorities and neighbors have been notified we are having this party, and fully support the safe regulated environment. 
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>Food &amp; Drink</b>
                                            <p>
                                                Catering will be provided by Cameron’s Deli. Food and drink include – Sandwiches, Wings, Salad, Chips, Dr. Pepper, Coke, Diet Coke, Sprite, Redbull and Water. 
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>A Final Note</b>
                                            <p>
                                                It’s been a great childhood in this community, and although not a typical route – I’m glad I spent it with some of you. A lot of us are going away to college, or pursuing our career’s, so enjoy this last hoorah, the end of chapter 1, and the start of the rest of our lives. 
                                            </p>
                                        </div>
                                        <div class="update">
                                            <b>Contact</b>
                                            <p>
                                                If you or your parents have any questions comments or concerns please contact us at
                                                <a style="color:white" href="mailto:CONTACT@INSANITYPARTY.COM" target="_blank">CONTACT@INSANITYPARTY.COM</a>
                                                You can also text or call
                                                <a style="color:white" href="tel:914-486-8563" target="_blank">914-486-8563</a> for immediate contact. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tile-wrapper">
                        <div class="tile-home" id="twitter">
                            <div class="row">
                                <h2>TWITTER</h2>
                                <div class="split-small"></div>
                                <div class="tweets row">
                                    <div class="col-md-12">

<?php
    date_default_timezone_set('America/New_York');
    $i = 0;
    $url = "http://insanityparty.com/assets/twitter.php";
    $tweets = json_decode(file_get_contents($url));

    while ($i < count($tweets)) {
        $tweetUrl = 'https://twitter.com/' . $tweets[$i]->user->screen_name . '/status/' . $tweets[$i]->id_str;
        $datetime = new DateTime($tweets[$i]->created_at);
        $datetime = $datetime->format('U');

        echo '
            <div class="tweet">
                <b>' . time_elapsed_string($datetime) . '</b>
                <p>
                    <a href="' . $tweetUrl . '" target="_blank" class="twitter-message">
                        ' . $tweets[$i]->text . '
                    </a>
                </p>
           </div>
        ';
        $i++;
    }
    echo '<span class="follow">follow <a href="https://twitter.com/' . $tweets[0]->user->screen_name . '" target="_blank">@' . $tweets[0]->user->screen_name. '</a> on Twitter</span>';
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tile-questions">
                        <h2>QUESTIONS</h2>
                        <div class="split-small"></div>
                        <div class="questions">
                            <div class="question question-info">
                                <b>Got Questions?</b>
                                <p>whether you're a parent or just interesting in knowing more about the Insanity event</p>
                                <p>we've collected a list of useful questions and answers to help you.</p>
                            </div>
                            <a id="submit" name="submit" class="btn btn-primary" href="faq.php" style="margin-bottom: 15px;">Visit FAQ</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tile-contact">

                        <h2>Contact</h2>
                        <div class="split-small"></div>
                        <form class="form-horizontal" id="contact_form">
                            <fieldset>
                                <!-- Text input-->
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input id="name" name="name" type="text" placeholder="Your Name" class="form-control input-md" required="" data-label="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control input-md" required="" data-label="Email">
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="msg" placeholder="Your Message" name="msg" cols="6" rows="6" data-label="Message"></textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button id="submit" name="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                </div>


                <script type="text/javascript">
                    jQuery(function($)
                    {
                        $("#contact_form").submit(function()
                        {
                            var email = $("#email").val(); // get email field value
                            var name = $("#name").val(); // get name field value
                            var msg = $("#msg").val(); // get message field value
                            $.ajax(
                                {
                                    type: "POST",
                                    url: "https://mandrillapp.com/api/1.0/messages/send.json",
                                    data: {
                                        'key': 'f3aumBm_dMe6Inv3vTWD7w',
                                        'message': {
                                            'from_email': email,
                                            'from_name': name,
                                            'headers': {
                                                'Reply-To': email
                                            },
                                            'subject': 'Insanity Contact Form Submission',
                                            'text': msg + " (sent from TNY.net)",
                                            'to': [
                                                {
                                                    'email': 'Contact@insanityparty.com',
                                                    'name': 'Insanity',
                                                    'type': 'to'
                                                }]
                                        }
                                    }
                                })
                                .done(function(response) {
                                    document.getElementById('submit').innerHTML = 'Message Sent!';
                                    document.getElementById('submit').className += '';
                                    document.getElementById('submit').className += ' btn-success';

                                    $("#name").val(''); // reset field after successful submission
                                    $("#email").val(''); // reset field after successful submission
                                    $("#msg").val(''); // reset field after successful submission
                                })
                                .fail(function(response) {
                                    document.getElementById('submit').innerHTML = 'Error :(';
                                    document.getElementById('submit').className += '';
                                    document.getElementById('submit').className += ' btn-danger';
                                });
                            return false; // prevent page refresh
                        });
                    });

                    $(document).ready(function () {

                        $('.form-control').floatlabel({
                            transitionDuration: 0.5,
                            transitionEasing: 'ease'
                        });

                    });

                </script>



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
