$(function () {
    $(".table-row").click(function () {
        window.location = $(this).attr("data-href");
    });
});
