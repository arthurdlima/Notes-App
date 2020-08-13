//form submit call
$("#signUpForm").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    let dataToPost = $(this).serializeArray();
    console.log(dataToPost);
    //send data to signup.php using ajax
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: dataToPost,
        success: function(data){
            if(data){
                $("#signUpMessage").html(data);
            }
        },
        error: function() {
            $("#signUpMessage").html("<div class='alert alert-danger'>Ocorreu um erro com a requisição Ajax. Tente novamente mais tarde.</div>");
        }
    });
});


//form login call
$("#loginForm").submit(function(event){
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    let dataToPost = $(this).serializeArray();
    console.log(dataToPost);
    //send data to signup.php using ajax
    $.ajax({
        url: "login.php",
        type: "POST",
        data: dataToPost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            } else {
                $("#loginMessage").html(data);
            }
        },
        error: function() {
            $("#loginMessage").html("<div class='alert alert-danger'>Ocorreu um erro com a requisição Ajax. Tente novamente mais tarde.</div>");
        }
    });

});
