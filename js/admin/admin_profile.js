function checkFormToCange(){
    var nm = document.getElementById("name").value;
    var em = document.getElementById("email").value;
    var un = document.getElementById("uname").value;
    var pw = document.getElementById("pwd").value;

    if(nm == '' || em=='' || un=='' || pw=='')
    {
        alert('All Filds Required !');
    }
}