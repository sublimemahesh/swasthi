<?php
$captchacode = rand();

?>               

<img src="guest-comments-form/Generate_Captcha_Code.php?rand=<?php echo $captchacode; ?>" id='captchaimg'  style=" margin-top: 35px;">  

<a href='javascript: refreshCaptcha();' class="contact-detail">
    <div class="refreshbox">
        <div class="refresh-img">        
            <img style="border:none;" src="guest-comments-form/img/refresh.png" title="Click to change the code"/>
        </div>
    </div>
</a>

<script language='JavaScript' type='text/javascript'>

    function refreshCaptcha() {
        var img = document.images['captchaimg'];
        var c = Math.round(Math.random() * 10000);
        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + c;
    }

</script>
