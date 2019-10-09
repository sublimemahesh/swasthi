$(document).ready(function () {

    jQuery("#txtFullName").blur(function () {
        validateEmpty("txtFullName", "spanFullName");
    });

    jQuery("#txtTitle").blur(function () {
        validateEmpty("txtTitle", "spanTitle");
    });

    jQuery("#txtProfileImg").blur(function () {
        validateEmpty("txtProfileImg", "spanProfileImg");
    });


    jQuery("#captchacode").blur(function () {
        validateEmpty("captchacode", "capspan");
    });


    $('#btnSubmit').click(function (e) {

        e.preventDefault();
        if (!validate()) {
            return;
        }

        jQuery("#checking").show();


        var formData = new FormData($('#guestcomment')[0]);

        $.ajax({
            url: "ajax/create-guest-comment.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (mess)
            {
                var msg = mess.message;
                jQuery("#checking").hide();
                if (msg == "error") {

                    jQuery("#dismessage").html('There was an error. Please try again.').delay(1000).show(1000);
                    jQuery("#checking").fadeOut(2000);

                } else if (msg == "success") {
                    jQuery("#checking").hide();
                    jQuery("#dismessage").html('Your feedback was sent for the approval').delay(1000).show(1000);

                    jQuery('#txtFulltName').val("");
                    jQuery('#txtTitle').val("");
                    jQuery('#txtProfileImg').val("");
                    jQuery('#txtMessage').val("");
                    jQuery('#captchacode').val("");

                }

            },
            cache: false,
            contentType: false,
            processData: false
        });

    });
});
function validate() {

    if (
            validateEmpty("txtFullName", "spanFullName") &
            validateEmpty("txtTitle", "spanTitle") &
            validateEmpty("txtProfileImg", "spanProfileImg") &
            validateEmpty("captchacode", "capspan")

            )
    {
        return true;
    } else {

        return false;
    }
}

function validateEmpty(field, validatorspan)

{

    if (jQuery('#' + field).val().length != 0)
    {

        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");

        return true;
    } else
    {

        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");

        return false;
    }
}


