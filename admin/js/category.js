// add
$(document).ready(function ($) {
    // on submit...
    $("#add_cat").click(function (e) {

        e.preventDefault();

        //category name required
        var category_name = $("#category_name").val();
        if (category_name == "") {
            alert("category_name is required");
            $("input#category_name").focus();
            return false;
        }

        $.ajax({
            type: "POST",
            url: "process.php",
            data: {
                action: "createCategory",
                category_name: $("#category_name").val(),

            }, // get all form field value in form
            beforeSend: function () {
                $("#add_cat").val("Processing...");
            },
            success: function (response) {
                if (response == true) {
                    alert("Successful. Last Inserted Role is " +
                        response);
                    // $(location).attr('href', 'login.html');
                    $("#add_cat").val("Submit");
                    $("#category_name").val("");

                } else if (response == false) {
                    alert("Error, Incorrect Details" + response);
                    $("#add_cat").val("Submit");
                }
            },
        });
    });
    return false;
});


//search
$("#searchinput").on("keyup", function () {
    const searchText = $(this).val();
    if (searchText.length > 1) {
        $.ajax({
            url: "process.php",
            type: "GET",
            dataType: "json",
            data: {
                searchQuery: searchText,
                action: "searchQ"
            },
            success: function (players) {

            },
            error: function () {
                console.log("something went wrong");
            },
        });
    }
});
