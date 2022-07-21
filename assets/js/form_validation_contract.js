$(document).ready(function () {

  


    $("#submit").click(function() {
        let Name = $("#name").val();
        let Email = $("#email").val();
        let phone_number = $("#phone_number").val()
        let coures = $("#coures").val();
        let message = $("#message").val();
        alert(" this is name : "+ Name  +" this is Email : "  + Email +" this is phone number : "+ phone_number + " this is course : " + coures + " this is message : " + message);
  
    });

    $("#email").focusout(function(){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      
        if (reg.test(emailField.value) == false) {
            emailField.value = "";
            alert("input correct mail id");
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: "Please Enter the correct Email id Example@gamil.com"
           
            })
            return false;
        }
    
        return true;
    });



});