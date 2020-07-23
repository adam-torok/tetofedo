var request;
$("#footer__form").submit(function(event){
    event.preventDefault();
    if (request) {
        request.abort();
    }
    var $form = $(this);

    var $inputs = $form.find("input");

    var serializedData = $form.serialize();

    $inputs.prop("disabled", true);

    request = $.ajax({
        url: "./sendMail.php",
        type: "post",
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR){
        alert("Sikeres üzenetküldés!")
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
      alert("Sikertelen üzenetküldés!")

        console.error(
            "A következő hiba lépett fel."+
            textStatus, errorThrown
        );
    });

    request.always(function () {
        $inputs.prop("disabled", false);
    });

});

var srequest;
$("#contact-form").submit(function(event){
    event.preventDefault();
    if (srequest) {
        srequest.abort();
    }
    var $form = $(this);

    var $inputs = $form.find("input");

    var serializedData = $form.serialize();

    $inputs.prop("disabled", true);

    srequest = $.ajax({
        url: "./sendContactMail.php",
        type: "post",
        data: serializedData
    });

    srequest.done(function (response, textStatus, jqXHR){
        alert("Sikeres üzenetküldés!")
    });

    srequest.fail(function (jqXHR, textStatus, errorThrown){
      alert("Sikertelen üzenetküldés!")

        console.error(
            "A következő hiba lépett fel."+
            textStatus, errorThrown
        );
    });

    srequest.always(function () {
        $inputs.prop("disabled", false);
    });

});

var ssrequest;

$("#contact-form-2").submit(function(event){
    event.preventDefault();
    if (ssrequest) {
        ssrequest.abort();
    }
    var $form = $(this);

    var $inputs = $form.find("input");

    var serializedData = $form.serialize();

    $inputs.prop("disabled", true);

    ssrequest = $.ajax({
        url: "./sendLandingContactMail.php",
        type: "post",
        data: serializedData
    });

    ssrequest.done(function (response, textStatus, jqXHR){
        alert("Sikeres üzenetküldés!")
    });

    ssrequest.fail(function (jqXHR, textStatus, errorThrown){
    alert("Sikertelen üzenetküldés!")

        console.error(
            "A következő hiba lépett fel."+
            textStatus, errorThrown
        );
    });

    ssrequest.always(function () {
        $inputs.prop("disabled", false);
    });
});


