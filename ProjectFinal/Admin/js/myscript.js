//Unique - First Name must be only upper case words
function fnamecheck()
{
    var fnamecheck=document.getElementById("fname").value ;
    var pattern = /^[A-Z]{3,}$/;
    if(fnamecheck.match(pattern))
{
    document.getElementById("errorfname").innerHTML="Name seems good! :D";
    return true;
}
else
{
    document.getElementById("errorfname").innerHTML="Must be Alphabets & CAPITAL letters & more than three letters :(";
    return false;
}
}

//Unique - Last Name must be only lower case words
function lnamecheck()
{
    var lnamecheck=document.getElementById("lname").value ;
    var pattern = /^[a-z]{3,}$/;
    if(lnamecheck.match(pattern))
{
    document.getElementById("errorlname").innerHTML="Name seems good! :D";
    return true;
}
else
{
    document.getElementById("errorlname").innerHTML="Must be Alphabets & small letters! & more than three letters :(";
    return false;
}
}

//Unique - Age must be number + age must be more than 9 years
function agecheck()
{
    var agecheck=document.getElementById("age").value ;
    var pattern=/^[0-9]{2}$/;
    if(agecheck.match(pattern) )
    {
        document.getElementById("ageerror").innerHTML="Age seems good! :D";
        return true;
    }
    else
    {
        document.getElementById("ageerror").innerHTML="Must be Numbers & over 9 years! :(";
        return false;
    }
}

//Unique - .com has to be at the end
function emailcheck(){
    var emailcheck=document.getElementById("email").value ;
    var pattern=/^\w+([-+.']\w+)*@[A-Za-z\d]+\.com$/;
    if(emailcheck.match(pattern))
    {
        document.getElementById("emailerror").innerHTML="Email seems good! :D";
        return true;
    }
    else
    {
        document.getElementById("emailerror").innerHTML="Please enter valid email! :(";
        return false;
    }
}

//Unique - password must be at least 6 char/one small/large/number/symbol
function passcheck()
{
    var passcheck=document.getElementById("password").value ;
    var pattern=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/;
    
    if(passcheck.match(pattern) && passcheck.length>6)
    {
        document.getElementById("passerror").innerHTML="Password seems good! :D";
        return true;
    }
    else
    {
        document.getElementById("passerror").innerHTML="Password must be 6 char & including one CAPITAL + small + number + symbol! :(";
        return false;

    }
}

//Unique - NID must be number + 10 char
function nidcheck()
{
    var nidcheck=document.getElementById("nid").value ;
    var pattern=/^[0-9]+$/;
    if(nidcheck.match(pattern) && nidcheck.length==10)
    {
        document.getElementById("niderror").innerHTML="NID seems good! :D";
        return true;
    }
    else
    {
        document.getElementById("niderror").innerHTML="NID must be Numbers containing 10 numbers! :(";
        return false;
    }
}

//Unique - Mobile number must be 11 digit & Numbers
function mobilecheck()
{
    var mobilecheck=document.getElementById("mobile").value;
    var pattern=/^[0-9]+$/;
    if(mobilecheck.match(pattern) && mobilecheck.length==11)
    {
        document.getElementById("mobileerror").innerHTML = "Mobile number seems good! :D";
        return true;
    }
    else
    {
        document.getElementById("mobileerror").innerHTML = "Mobile number must be 11 digit & Numbers! :(";
        return false;
    }
}

function formcheck()
{
    var pass,email,age,lname,fname;
    pass=passcheck();
    email=emailcheck();
    age=agecheck();
    lname=lnamecheck();
    fname=fnamecheck();
    nid=nidcheck();
    mobile=mobilecheck()
    if(fname && lname && email && age && pass && nid && mobile){
        ddocument.getElementById("write").innerHTML="Everything is ok ";
        return true;
    }
    else{
        document.getElementById("write").innerHTML="Please check again! ** Something wrong! :( **";
        return false;
    }
}

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});