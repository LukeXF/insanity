function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

jQuery.fn.center = function () {
    var window2 = $(window).height();
    var width = $(window).width();
    var tile = $(".tile").height() + 100;
    var split = (window2 - tile) / 2;
    this.css("margin-top", split + "px");
    $(".twitter").css("top", split + "px");
    $(".ibg-bg").css("height", window2 + "px");
    $(".ibg-bg").css("width", width + "px");
    return this;
};


jQuery.fn.tileWrapper = function () {

    var twitter = $("#twitter").height();
    var updates = $("#updates").height();

    if (twitter > updates) {
        var height = twitter + 100;
    } else {
        var height = updates + 100;
    }
    $(this).css("min-height", height);
};
var deadline = new Date(Date.parse(new Date("2016-05-13T20:00:00")));
initializeClock('clockdiv', deadline);

$('.click').click(function(){
    window.location = "home.php";
});