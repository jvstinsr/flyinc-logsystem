function readNavHeight() {
    var navDiv = document.getElementById("navbar");
    if (navDiv) {
        var result = navDiv.getBoundingClientRect();
        var navHeight = result.height + "px";
    }
    return navHeight;
}
$('.counter-count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1500,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});