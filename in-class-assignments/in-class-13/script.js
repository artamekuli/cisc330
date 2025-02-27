$(document).ready(function() {
    $("#fetchData").click(function() {
        $.ajax({
            url: "data.php",
            type: "GET",
            success: function(response) {
                $("#response").text(response.message);
            },
            error: function() {
                $("#response").text("Error fetching data.");
            }
        });
    });
});
