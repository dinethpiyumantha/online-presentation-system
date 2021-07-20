function contactUs(){
    var name = document.getElementById("contName").value;
    var email = document.getElementById("contEmail").value;
    var message = document.getElementById("contMessage").value;
    var emailValidation = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var text ='';

    if(name == ''){
        text += 'Name is requred !<br>';
    }

    if(email == ''){
        text += 'Email is requred !<br>'
    }
    else if(!emailValidation.test(email)){
        text += 'Not valid email address !<br>'
    }

    if(message == ''){
        text += 'Message feild is empty !<br>';
    }

    if(text != ''){
        document.getElementById("popupBG").style.visibility = "visible";
        document.getElementById("popup").style.visibility = "visible";
        document.getElementById("message").innerHTML = text;
    }
}

function contactUsHide(){
    document.getElementById("popupBG").style.visibility = "hidden";
    document.getElementById("popup").style.visibility = "hidden";
}

function searchCheck(){
    var search = document.getElementById("searchF").value;
    if(search.length <= 3){
        alert("Enter more than 4 letters !");
    }
}