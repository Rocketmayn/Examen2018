<script type="text/javascript">
    function get_action() {  // captcha script
        var v = grecaptcha.getResponse();
        if (v == '') { // if else statement voor de captcha
            document.getElementById('captcha').innerHTML = "Voer een Captcha in";
            return false;
        }
        else {
            document.getElementById('captcha').innerHTML = "Captcha geslaagd";
            return true;
        }
    }
</script>
