const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });
    // js code to validate captcha 
    function doSomething(){
        var response = grecaptcha.getResponse();
        if(response.length == 0) {
             isCaptchaValidated = false;
             grecaptcha.reset()
        } else {
            isCaptchaValidated = true;
        }
    }
    // js to register users
  //  alert('hello');
    $("#register_btn").click(function () {
      // alert('hello');
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
            if((str_medium || str_strong )){
                if(isCaptchaValidated){
                    var formdata = 'full_name='+ name + '&email='+ email + '&password='+ password;
                    console.log(formdata)
                    $.ajax({
		                 type: "POST",
		                 url: "./process/register_process.php", 
		                 data: formdata,
		                 cache: false,
		                 success: function(html) {
		                      alert('success');
		                     }
	                });
                }else{
                    alert('Captcha Not Validated');
                }
            }else{
                alert('Password must have medium and Strong strength')
            }
        }
    );

        


    
       function warn(){
        var message = document.getElementById('');
        strength.innerHTML = '<div classprogress-bar progress-bar-success" role="progressbar" ari="a-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:100%"> STRONG Password!</div>';
       }
    // js to  check strength
     var str_medium = false;
     var str_strong = false;
     var isCaptchaValidated = false;
     function passwordChanged() {
        var strength = document.getElementById('progress');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g"); // special char 2 ! W 
        var mediumRegex = new RegExp("^(?=.{6,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");// 6 char A Z az 09
        var enoughRegex = new RegExp("(?=.{5,}).*", "g"); //less than 5 char
        var pwd = document.getElementById("password");
        if (pwd.value.length <=4) {
            strength.innerHTML = 'Very Bad';
        } else if (false == enoughRegex.test(pwd.value)) { 
            strength.innerHTML = '<div class="progress-bar-warning" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%"> </div>';    
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:100%"> STRONG Password!</div>';
            str_strong = true         
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<div class="progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:75%"> Medium Password!</div>';
            str_medium = true
        } else {
            strength.innerHTML = '<div class="progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:25%"> WEAK Password!</div>';
            str_medium = false
        }
    }