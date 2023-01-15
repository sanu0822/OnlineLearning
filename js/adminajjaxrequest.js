function checkAdminLogin() {
    console.log("Button Clicked");
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();
    $.ajax({
        url: "admin/admin.php",
        method: "POST",
        data: {
            checkLogemail: "checklogemail",
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success: function (data) {
            if(data==0) {
                $("#statusAdminLogMsg").html(
                    '<small class="alert-danger">Invalid email id or password!</samll>'
                );
            }else if(data==1) {
                $("#statusAdminLogMsg").html(
                    '<small class="alert-success">Success Loading........</samll>'
                );
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }
        },
    });
}