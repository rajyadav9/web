<?php
date_default_timezone_set('UTC');
?>
<style>
        div { 
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
</style>
    <script>
        var d = new Date(<?php echo time() * 1000 ?>);
    
        function digitalClock() 
        {
            d.setTime(d.getTime() + 1000);
   
            var hrs = d.getHours();
            var mins = d.getMinutes();
            var secs = d.getSeconds();
    
            mins = (mins < 10 ? "0" : "") + mins;
            secs = (secs < 10 ? "0" : "") + secs;
    
            var apm = (hrs < 12) ? "AM" : "PM";
            hrs = (hrs > 12) ? hrs - 12 : hrs;
            hrs = (hrs == 0) ? 12 : hrs;
    
            var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
            document.getElementById("clock").firstChild.nodeValue = ctime;
        }
    
        window.onload = function() 
        {
            digitalClock();
            setInterval('digitalClock()', 1000);
        }
    </script>
<div id="clock" style="font-size: 100px; "> </div>

