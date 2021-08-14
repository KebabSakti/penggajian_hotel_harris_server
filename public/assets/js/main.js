$(function () {
    let modal = $("#mainModal");

    modal.on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var link = button.data("link");
        var size = button.data("size");

        if (size != null) {
            $(".modal-dialog").addClass(size);
        }

        button.attr("disabled", true);

        $.get(link, function (response) {
            console.log(response);
            $(".modal-body").html(response);
            button.attr("disabled", false);
        });
    });

    modal.on("hidden.bs.modal", function () {
        $(".modal-body").html("Loading...");
        $(".modal-dialog").removeClass("modal-lg");
        $(".modal-dialog").removeClass("modal-xl");
        $(".modal-dialog").removeClass("modal-sm");
    });

    $("body").on("click", ".confirm", function (e) {
        e.preventDefault();

        var form = $(this).parent("form");
        var message = $(this).data("message");
        Swal.fire({
            title: "Perhatian!!!",
            text: message ?? "Proses ini tidak dapat dikembalikan, lanjutkan ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Lanjutkan",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
