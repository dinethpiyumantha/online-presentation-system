function confirmMessage(){
    confirm("Are sure delete this user from database ?");
}

function closeManegeAdmin(){
    document.getElementById("manageAdmin").style.visibility = "hidden";
    document.getElementById("manageAdminBg").style.visibility = "hidden";
}

function showManegeAdmin(){
    document.getElementById("manageAdmin").style.visibility = "visible";
    document.getElementById("manageAdminBg").style.visibility = "visible";
}