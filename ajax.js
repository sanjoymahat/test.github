
    $(document).ready(function () {
        function loadTable() {
            $.ajax({
                url: "php_files/user_php.php",
                type: "POST",
                success: function (data) {
                    $("#all_table").html(data);
                }
            });
        }

        loadTable();
        // Add your other scripts here

        $("#useradd").on("click", function (e) {
            e.preventDefault();
            var fname = $("#f_name").val();
            var lname = $("#l_name").val();
			var username = $("#username").val();
            var email = $("#email").val();
            var mobile = $("#mobile").val();
            var city = $("#city").val();
            var user_role = $("#user_role").val();
			if(fname == ""||lname==""||email==""||mobile==""||city==""||username==""||user_role==""){
				$("#error-message").html("all fields are required").slideDown();
				$("#success-message").slideUp();
			}else{
				$.ajax({
                url: "php_files/add_user.php",
                type: "POST",
                data: { f_name: fname, l_name: lname,username:username, email: email, mobile: mobile, city: city, user_role: user_role },
                success: function (data) {
                    if (data == 1) {
                        loadTable();
						$("$addform").trigger('reset');
						$("#success-message").html("successfully submit your data").slideDown();
				$("#error-message").slideUp();
                    } else {
						$("#error-message").html(" Can't data Save").slideDown();
						$("#success-message").slideUp();
                    }
                }
            });
			}
        });
        
    });
