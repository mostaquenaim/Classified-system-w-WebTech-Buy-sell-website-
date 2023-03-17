function fnamecheck() {
    var fnamecheck = document.getElementById("fname").value;
    var letters = /^[A-Z]+$/;
    //$pattern = "([0-9])";
    if (fnamecheck.match(letters)) {
        document.getElementById("fnamechk").innerHTML = " Name is ok ";
        return true;
    }
    else if (fnamecheck.length < 1) {
        document.getElementById("fnamechk").innerHTML = "Kindly fill up";
        return false;
    }
    else {
        document.getElementById("fnamechk").innerHTML = " Must be character";
        return false;
    }
}

function lnamecheck() {
    var lnamecheck = document.getElementById("lname").value;
    var letters = /^[a-z]+$/;
    //$pattern = "([0-9])";
    if (lnamecheck.match(letters)) {
        document.getElementById("lnamechk").innerHTML = "Name is ok";
        return true;
    }
    else if (lnamecheck.length < 1) {
        document.getElementById("lnamechk").innerHTML = "Kindly fill up";
        return false;
    }
    else {
        document.getElementById("lnamechk").innerHTML = " Must be character";
        return false;
    }
}

function agecheck() {
    var agecheck = document.getElementById("age").value;
    var nmbr = /^[0-9]+$/;
    if (agecheck.match(nmbr)) {
        document.getElementById("agechk").innerHTML = "Age is ok";
        return true;
    }
    else if (agecheck.length < 1) {
        document.getElementById("agechk").innerHTML = "Please fill up";
        return false;
    }
    else {
        document.getElementById("agechk").innerHTML = " Must be number";
        return false;
    }
}

function emailcheck() {
    var emailcheck = document.getElementById("email").value;
    var nmbr = /^([a-z\+_\-]+)(\.[0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    if (emailcheck.match(nmbr)) {
        document.getElementById("emailchk").innerHTML = "email matched";
        return true;
    }
    else if (emailcheck.length < 1) {
        document.getElementById("emailchk").innerHTML = "Please fill up";
        return false;
    }
    else {
        document.getElementById("emailchk").innerHTML = " mail is not valid , all word to be small letters";
        return false;
    }
}

function passcheck() {
    var passcheck = document.getElementById("pass").value;
    var nmbr = /^[ A-Za-z0-9_@./#&+-]*$/;

    if (passcheck.length < 1) {
        document.getElementById("passchk").innerHTML = "Please fill up";
        return false;
    }
    else if (passcheck.match(nmbr)) {
        document.getElementById("passchk").innerHTML = "password is ok";
        return true;
    }
    else {
        document.getElementById("passchk").innerHTML = " Password is not valid";
        return false;
    }
}

function formcheck() {
    var pass, email, age, lname, fname;
    pass = passcheck();
    email = emailcheck();
    age = agecheck();
    lname = lnamecheck();
    fname = fnamecheck();
    if (pass && email && age && lname && fname && document.getElementById("file").files.length > 0 && document.getElementById("des").checked && (document.getElementById("l1").checked || document.getElementById("l2").checked || document.getElementById("l3").checked)) {
        ddocument.getElementById("write").innerHTML = "Everything is ok ";
        return true;
    }
    else {
        document.getElementById("write").innerHTML = "Kindly fill up the information perfectly";
        return false;
    }
}


function showmyuser() {
    var Email = document.getElementById("Email").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mytext").innerHTML = this.responseText;
            var element = document.getElementById("Delete");
            element.removeAttribute("hidden");
        }

        else {
            document.getElementById("mytext").innerHTML = this.status;
        }
    };
    xhttp.open("POST", "../control/getuser.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("Email=" + Email);


}

function findProduct() {
    var name = document.getElementById("name").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mytext").innerHTML = this.responseText;
        }
        else {
            document.getElementById("mytext").innerHTML = this.status;
        }
    };
    xhttp.open("POST", "../control/product_search_control.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + name);


}