<footer class="clearfix">
    <div class="clearfix">
        <div class="clearfix">

            <div class=" sub-footer">
                <div class="">
                    <div class="color-primary">
                        <ul class="footlinks">
                            <li><a href="../" class="white-text">Home</a></li>
                            <li><a href="courses" class="white-text">Courses</a></li>
                            <li><a href="about-us" class="white-text">About Us</a></li>
                            <li><a href="contact-us" class="white-text">Contact Us</a></li>
                            <li><a href="feedback" class="white-text">Feedback</a></li>
                        </ul> 
                    </div>
                    <p style="text-align: center; text-shadow: 0 0 2px #848484" class="down-20 white-text">Accreditation, Affiliation and Franchise.</p>
                    <br />
                </div>
                <div class="flex-container">
                    <div class="flex-item">
                        <a href="http://abma.uk.com/" alt="abma" target="_blank"><img src="images/abma-logo.gif" alt="" class="institution-logo shadow hoverable"/></a>
                    </div>
                    <div class="flex-item">                     
                        <a href="http://www.cityandguilds.com/" alt="city" target="_blank"><img src="images/city-logo.gif" alt="" class="institution-logo shadow hoverable"/></a>
                    </div>
                    <div class="flex-item">
                        <a href="http://abeuk.com/" alt="abma" target="_blank"><img src="images/abe-logo.gif" alt="" class="institution-logo shadow hoverable"/></a>
                    </div> 
                    <div class="flex-item">
                        <a href="http://www.bqa.org.bw/" alt="abma" target="_blank"><img src="images/bota-3.jpg" alt="" class="institution-logo shadow hoverable"/></a>
                    </div> 
                    <div class="flex-item">
                        <a href="http://www.zim.ac.zw/" alt="zim" target="_blank"><img src="images/zim-logo.gif" alt="" class="institution-logo shadow hoverable"/></a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</footer>
<?php
if (isset($_GET['msg'])) {
    echo '<script>'
    . 'setTimeout(function(){'
    . '$(function(){'
    . '$(".notification").slideUp()'
    . '});'
    . '}, 10000);'
    . '</script>';
}
?>
</body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
    webshims.setOptions('waitReady', false);
    webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)
    {
        //Do Firefox-related activities
        $(function () {
            $('input[type="date"]').css('width', '90%');
        });
    }

</script>