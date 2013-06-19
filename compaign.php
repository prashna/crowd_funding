    <div id="campaign" class="width1000">
        <div id="campaignTrail">
            <h3>On <span>The </span> Campaign Trail</h3>
            <div class="checkTheDates">Check the dates and see when we're in your town!</div>
            
            <div id="campaignSlides">
            
                <div class="slides_container">
                
                    <!-- Single slide -->
                    <div class="slide">
                        <a href="newsSingle.php">New York City</a>
                        <img src="images/tb/new_york_footer.jpg" alt="New York City">
                        <div class="caption">
                            <h4>New York City</h4>
                            <p>From July 16th to July 18th</p>
                        </div>
                    </div>
                    <!-- .Single slide -->

                    <div class="slide">
                        <a href="newsSingle.php">Chicago</a>
                        <img src="images/tb/chicago_footer.jpg" alt="Chicago">
                        <div class="caption">
                            <h4>Chicago</h4>
                            <p>From July 19th to July 21th</p>
                        </div>
                    </div>

                    <div class="slide">
                        <a href="newsSingle.php">Washington DC</a>
                        <img src="images/tb/washington_footer.jpg" alt="Washington DC">
                        <div class="caption">
                            <h4>Washington DC</h4>
                            <p>From July 22th to July 24th</p>
                        </div>
                    </div>

                    <div class="slide">
                        <a href="newsSingle.php">Seattle</a>
                        <img src="images/tb/seattle_footer.jpg" alt="Seattle">
                        <div class="caption">
                            <h4>Seattle</h4>
                            <p>From July 25th to July 27th</p>
                        </div>
                    </div>
                </div>
                
                <ul class="pagination">
                    <li><a href="#0">July 16</a></li>
                    <li><a href="#1">July 19</a></li>
                    <li><a href="#2">July 22</a></li>
                    <li><a href="#3">July 25</a></li>
                </ul>
            </div>
        </div>
     <div id="counter"></div>
<div class="desc">
<div class="desc_days">Days</div>
<div class="desc_hrs">Hours</div>
<div class="desc_mins">Minutes</div>
<div class="desc_secs">Seconds</div>
</div>

<!--     <div id="Countdown" class="hasCountdown"><span id="count_days">1</span> Days : <span id="count_hrs">1</span> Hours : <span id="count_mins">1</span> Minutes : <span id="count_secs">1</span> Seconds</div> -->
    </div>


    <script type="text/javascript">

  function dhm(t){
    var cd = 24 * 60 * 60 * 1000,
        ch = 60 * 60 * 1000,
        d = Math.floor(t / cd),
        h = '0' + Math.floor( (t - d * cd) / ch),
        m = '0' + Math.floor( (t - d * cd - h * ch) / 60000);
        s = '0' + Math.round( (t - d * cd - h * ch - m * 60000) / 1000);
    return [d, h.substr(-2), m.substr(-2), s.substr(-2)].join(':');
}

$(function() {
var currentDate = new Date();
var finalDate = new Date(2015, 5 - 1, 7, 0, 0, 0);
var total_time = dhm(finalDate-currentDate) ;  

// alert(finalDate-currentDate);
$('#counter').countdown({
image: 'images/digits.png',
format: 'dd:hh:mm:ss',
startTime: total_time
});

// $('#counter_2').countdown({
// startTime: '00:10',
// format: 'mm:ss',
// digitImages: 6,
// digitWidth: 53,
// digitHeight: 77,
// timerEnd: function() { },
// image: 'images/digits.png'
// });
});

    </script>