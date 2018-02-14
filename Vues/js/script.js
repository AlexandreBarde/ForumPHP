document.getElementById("itemTable").addEventListener("mouseover", transformMouse);
document.getElementById("itemTable").addEventListener("mouseout", transformMouseBack);

function transformMouse()
{
    document.body.style.cursor = "pointer";
}

function transformMouseBack()
{
    document.body.style.cursor = "initial";
}

$(function () {
    $(".table-row").click(function () {
        window.location = $(this).attr("data-href");
    });
});
