$(document).ready(function() {

    $("#signupsubmit").on('click', function() {
        var allfit = true;
        var errmsg = "";

        function seterr(msg) {
            allfit = false;
            errmsg += msg + "<br>";
        }

        if ($("#teamname").val().length <= 0) {
            seterr("<li>Enter Team Name</li>");
        }

        if ($("#pwd1").val().length <= 2 || $("#pwd2").val().length <= 2) {
            seterr("<li>Password length should be more than 2</li>");
        }

        if ($("#pwd1").val().localeCompare($("#pwd2").val()) != 0) {
            seterr("<li>Passwords do not match</li>");
        }

        if ($("#p1").val().length <= 0) {
            seterr("<li>Person 1 can not be empty</li>");
        }

        if (!/[5-9]{1}[0-9]{9}/.test($("#p1n").val())) {
            seterr("<li>Mobile Number can't be empty and must have 10 numbers</li>");
        }

        if ($("#mpwd").val().length <= 0) {
            seterr("<li>Master Password can't be empty</li>");
        }


        if (allfit) {

            $.ajax({
                url: 'signup.php',
                data: $("#signup").serialize(),
                type: "POST",
                success: function(data) {
                    if (data.localeCompare("1") == 0) {
                        BootstrapDialog.show({
                            title: 'Registration Completed.',
                            message: 'Please Login To Treasure Hunt.'
                        });
                    } else {
                        BootstrapDialog.show({
                            title: 'Registration Failed.',
                            message: 'Username already exists'
                        });
                    }
                },
                error: function() {
                    BootstrapDialog.show({
                        title: 'Internal Error',
                        message: 'Please Try again or contact Organizers.'
                    });
                }
            });

        } else {
            BootstrapDialog.show({
                title: 'Fix These!!',
                message: errmsg
            });
        }
    });

    $("#loginButton").on('click', function() {
        var allfit = true;
        var errmsg = "";

        function seterr(msg) {
            allfit = false;
            errmsg += msg + "<br>";
        }

        if ($("#tname").val().length <= 0) {
            seterr("<li>Enter Team Name</li>");
        }

        if ($("#pass").val().length <= 2) {
            seterr("<li>Password length should be more than 2</li>");
        }

        if (allfit) {

            $.ajax({
                url: 'login.php',
                data: $("#login").serialize(),
                type: "POST",
                success: function(data) {
                    if (data.localeCompare("1") == 0) {
                        window.location = "contest.php";
                    } else {
                        BootstrapDialog.show({
                            title: 'Login Failed.',
                            message: 'Incorrect Teamname Or Password'
                        });
                    }
                },
                error: function() {
                    BootstrapDialog.show({
                        title: 'Internal Error',
                        message: 'Please Try again or contact Organizers.'
                    });
                }
            });

        } else {
            BootstrapDialog.show({
                title: 'Fix These!!',
                message: errmsg
            });
        }

    });


    $("#answerSubmit").on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: "validateAns.php",
            data: $("#answerForm").serialize(),
            type: "POST",
            success: function(data) {
                if (data.localeCompare("1") == 0) {
                    window.location = "contest.php";
                } else {
                    $("#error").show();
                    $("#error").html("Wrong Answer, Keep Trying :)");
                }
            },
            error: function(data) {}
        });
    });

    $("#ans").keypress(function(e) {
        if (e.which == 13) {
            e.preventDefault();
            $.ajax({
                url: "validateAns.php",
                data: $("#answerForm").serialize(),
                type: "POST",
                success: function(data) {
                    if (data.localeCompare("1") == 0) {
                        window.location = "contest.php";
                    } else {
                        $("#error").show();
                        $("#error").html("Wrong Answer, Keep Trying :)");
                    }
                },
                error: function(data) {}
            });
        }
    });

    $("#pass").keypress(function(e) {
        if (e.which == 13) {
            e.preventDefault();
            var allfit = true;
            var errmsg = "";

            function seterr(msg) {
                allfit = false;
                errmsg += msg + "<br>";
            }

            if ($("#tname").val().length <= 0) {
                seterr("<li>Enter Team Name</li>");
            }

            if ($("#pass").val().length <= 2) {
                seterr("<li>Password length should be more than 2</li>");
            }

            if (allfit) {

                $.ajax({
                    url: 'login.php',
                    data: $("#login").serialize(),
                    type: "POST",
                    success: function(data) {
                        if (data.localeCompare("1") == 0) {
                            window.location = "contest.php";
                        } else {
                            BootstrapDialog.show({
                                title: 'Login Failed.',
                                message: 'Incorrect Teamname Or Password'
                            });
                        }
                    },
                    error: function() {
                        BootstrapDialog.show({
                            title: 'Internal Error',
                            message: 'Please Try again or contact Organizers.'
                        });
                    }
                });

            } else {
                BootstrapDialog.show({
                    title: 'Fix These!!',
                    message: errmsg
                });
            }

        }
    });

    var li = new Date(ts.li.replace(/-/g,"/"));
    var lo = new Date(ts.lo.replace(/-/g,"/"));
    var diff = lo.getTime() - li.getTime();
    minutes = diff / 1000;
    var display = $('#clock');
    var mins, seconds;
    setInterval(function() { 
        
        mins = parseInt(minutes / 60)
        seconds = parseInt(minutes % 60);
        seconds = (seconds < 10) ? "0" + seconds : seconds;
        mins = (mins < 10) ? "0" + mins : mins;
        display.text(mins + ":" + seconds);
        minutes--;

        if (minutes <= 0) {
            end();
        }
    }, 1000);

    function end() {
        
        window.location = "eoc.php";

    } 

});
