function refreshTable() {
    // Check if user is logged in
    if (isLoggedIn()) {
        // Fetch data from server
        $.ajax({
            url: "testtest.php",
            success: function (data) {
                // Update table
                $("#table-container").html(data);
                // Add click handler to delete buttons
                $(".delete-button").click(function () {
                    $(this).closest("tr").remove();
                });
            }
        });
    } else {
        // Redirect to login page
        window.location.href = "login.html";
    }
}

function isLoggedIn() {
    // Check if user is logged in (e.g., by checking for a valid session cookie)
    return true; // Replace with your own check
}