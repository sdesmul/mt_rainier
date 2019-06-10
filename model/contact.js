$("#deposit").on("click", function () {
    $("#message").load("http://sdesmul.greenriverdev.com/IT328/mt_rainier/model/deposit.html");

});

$("#waitlist").on("click", function () {
    $("#message").load("http://sdesmul.greenriverdev.com/IT328/mt_rainier/model/waitlist.html");
});
//put all of this in a document ready so it doesnt load