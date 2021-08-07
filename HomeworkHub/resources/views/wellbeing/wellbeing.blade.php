

@if(auth()->User()->role == 1)
    <div class="col-lg-4">
        <h4>Screen Time this Session</h4>
        <h5>Remember to log out once you're done to reset the timers</h5>

        <label id="progress20m"></label>
        <label>When this bar fills, that's 20 minutes. Rest your eyes for 20 seconds. Isn't that better?</label>
        <div class="progress" style="height: 30px;">
            <div class="progress-bar bg-primary text-dark" title="progress20m" role="progressbar" id="progressbar20m" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <label id="progress1h"></label>
        <label>When this bar fills, that's a whole hour. Go and stretch your legs.</label>
        <div class="progress" style="height: 30px;">
            <div class="progress-bar bg-primary text-dark" title="progress1h" role="progressbar" id="progressbar1h" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <label id="progress3h"></label>
        <label>When this bar fills, that's 3 hours passed! You should take a good long break.</label>
        <div class="progress" style="height: 30px;">
            <div class="progress-bar bg-primary text-dark" title="progress3h" role="progressbar" id="progressbar3h" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <h4 class="pt-5">Health and Wellbeing Links</h4>
        <a href="http://www.eyebreaks.com/20-20-20-rule" style="font-size: 18px">Eye Breaks</a>
        <h6>Eye Breaks are important in preventing dry eyes, headaches and even body aches. Follow the 20-20-20 rule and take regular breaks!</h6>

        <a class="pt-3" href="https://www.nhs.uk/live-well/eat-well/water-drinks-nutrition/" style="font-size: 18px">Drink!</a>
        <h6>It's easy to become dehydrated when you're so distracted by work! You should aim to get in 6 to 8 glasses of sugar free liquid a day.</h6>

        <a class="pt-3" href="https://www.nhs.uk/live-well/exercise/why-sitting-too-much-is-bad-for-us/" style="font-size: 18px">Stand!</a>
        <h6>Although there's no set limit on how long you're allowed to sit for, those in professions which involved sitting for long periods of time were
            TWICE as likely do develop heart attacks! So make sure to stand every once in a while.</h6>
    </div>
    @endif

    <script>
        var timer;
        var timerStart;
        var timeSpentOnSite = getTimeSpentOnSite();
        var tsparsed;
        var tsstring;
        var percent20m;
        var timer20;
        var tick20;
        var percent1h;
        var percent3h;

        function getTimeSpentOnSite(){
            timeSpentOnSite = parseInt(localStorage.getItem('timeSpentOnSite'));
            timeSpentOnSite = isNaN(timeSpentOnSite) ? 0 : timeSpentOnSite;
            return timeSpentOnSite;
        }

        function startCounting(){
            timerStart = Date.now();
            timer = setInterval(function(){
                timeSpentOnSite = getTimeSpentOnSite()+(Date.now()-timerStart);
                localStorage.setItem('timeSpentOnSite',timeSpentOnSite);
                timerStart = parseInt(Date.now());

                // Convert to seconds
                tsparsed = parseInt(timeSpentOnSite/1000);

                if(tsparsed > 1200){
                    var numfills20 = Math.floor(((100 / 1200) * tsparsed) / 100);
                    percent20m = (((100 / 1200) * tsparsed) - (100*numfills20));
                }
                else{
                    percent20m = (100 / 1200) * tsparsed;
                }

                if(tsparsed > 3600){
                    var numfills1h = Math.floor(((100 / 3600) * tsparsed) / 100);
                    percent1h = (((100 / 3600) * tsparsed) - (100*numfills1h));
                }
                else{
                    percent1h = (100 / 3600) * tsparsed;
                }

                if(tsparsed > 10800){
                    var numfills3h = Math.floor(((100 / 10800) * tsparsed) / 100);
                    percent3h = (((100 / 10800) * tsparsed) - (100*numfills3h));
                }
                else{
                    percent3h = (100 / 10800) * tsparsed;
                }

                document.getElementById('progressbar20m').style.width = percent20m + '%';

                document.getElementById('progressbar1h').style.width = percent1h + '%';

                document.getElementById('progressbar3h').style.width = percent3h + '%';
            },1000);
        }

        startCounting();
    </script>
