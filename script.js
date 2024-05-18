$(document).ready(function () {
    var pages = ["home.html", "library.php", "gallery.html", "photos.html", "review.html", "about.html", "contact.html"];

    var currenPageIndex = 0;

    $("#content").load(pages[currenPageIndex]);

    $("ul li a").click(function () {
        var page = $(this).attr("href");

        currenPageIndex = pages.indexOf(page);

        $("#content").fadeOut(350, function () {
            $("#content").load(page);
            $("#content").fadeIn(350);
        });

        return false;
    });
});
