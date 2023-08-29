$(document).ready(function () {
    // Untuk sunting
    $("#editrole").on("show.bs.modal", function (event) {
        var div = $(event.relatedTarget); // Tombol dimana modal di tampilkan
        var modal = $(this);

        // Isi nilai pada field
        modal.find("#id").attr("value", div.data("id"));
        modal.find("#slug").attr("value", div.data("slug"));
        modal.find("#name").attr("value", div.data("name"));
        modal.find("#description").html(div.data("description"));
    });
});
