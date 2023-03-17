function fnamecheck(){
    var fnamecheck=document.getElementById("fname").value ;
    var letters = /^[a-zA-z ]*$/;
    //$pattern = "([0-9])";
    if(fnamecheck.match(letters))
{
    document.getElementById("fnamechk").innerHTML=" going good";
    return true;
}
else if(fnamecheck.length<1){
    document.getElementById("fnamechk").innerHTML="Please fill up";
    return false;
}
else{
    document.getElementById("fnamechk").innerHTML=" Only character";
    return false;
}
}

function lnamecheck(){
    var lnamecheck=document.getElementById("lname").value ;
    var letters = /^[a-zA-z ]*$/;
    //$pattern = "([0-9])";
    if(lnamecheck.match(letters))
{
    document.getElementById("lnamechk").innerHTML=" going good";
    return true;
}
else if(lnamecheck.length<1){
    document.getElementById("lnamechk").innerHTML="Please fill up";
    return false;
}
else{
    document.getElementById("lnamechk").innerHTML=" Only character";
    return false;
}
}

function unamecheck(){
    var unamecheck=document.getElementById("uname").value ;
    var letters = /^[A-Za-z][A-Za-z0-9]{5,31}$/;
    //$pattern = "([0-9])";
    if(unamecheck.match(letters))
{
    document.getElementById("unamechk").innerHTML=" going good";
    return true;
}
else if(unamecheck.length<1){
    document.getElementById("unamechk").innerHTML="Please fill up";
    return false;
}
else if(unamecheck.length<6){
    document.getElementById("unamechk").innerHTML="too short";
    return false;
}
else{
    document.getElementById("unamechk").innerHTML="no space ";
    return false;
}
}

function pincheck(){

    var pinscheck=document.getElementById("pincheck").value ;
     var ptr=/^[0-9]{5}$/;
    if(pinscheck.match(ptr)){
        document.getElementById("pinchk").innerHTML=" going good";
        return true;
    }
    else if(pinscheck.length<1){
        document.getElementById("pinchk").innerHTML="Please fill up";
        return false;
    }
    else{
        document.getElementById("pinchk").innerHTML=" not valid";
        return false;
    }

}

function mobilecheck(){
    var mobcheck=document.getElementById("mobile").value ;
     var nmbr=/^1[13456789][0-9]{8}$/;
    if(mobcheck.match(nmbr)){
        document.getElementById("mobchk").innerHTML=" going good";
        return true;
    }
    else if(mobcheck.length<1){
        document.getElementById("mobchk").innerHTML="Please fill up";
        return false;
    }
    else{
        document.getElementById("mobchk").innerHTML=" not valid";
        return false;
    }
}




function emailcheck(){
    var emailcheck=document.getElementById("email").value ;
    var nmbr=/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,3}$/;
    if(emailcheck.match(nmbr)){
        document.getElementById("emailchk").innerHTML=" going good";
        return true;
    }
    else if(emailcheck.length<1){
        document.getElementById("emailchk").innerHTML="Please fill up";
        return false;
    }
    else{
        document.getElementById("emailchk").innerHTML=" not valid";
        return false;
    }
}

function passcheck(){
    var passcheck=document.getElementById("pass").value ;
    var nmbr=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    // var conpasscheck=document.getElementById("conpass").value ;

    if(passcheck.length<1){
        document.getElementById("passchk").innerHTML="Please fill up";
        return false;
    }
    else if(passcheck.match(nmbr)){
        document.getElementById("passchk").innerHTML=" going good";
        return true;
    }
    else{
        document.getElementById("passchk").innerHTML=" not strong (use at least one letter, one number and 8 of length)";
        return false;
    }

    

}

function conpasscheck(){
    var passcheck=document.getElementById("pass").value ;
    // var nmbr=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var conpasscheck=document.getElementById("conpass").value ;

    if(conpasscheck.length<1){
        document.getElementById("conpasschk").innerHTML="Please fill up";
        return false;
    }

    else if(conpasscheck==passcheck){
        document.getElementById("conpasschk").innerHTML=" matched";
        return true;
    }
    else{
        document.getElementById("conpasschk").innerHTML=" not matched";
        return false;
    }
}

function dobcheck(){
    document.getElementById("dobchk").innerHTML="Yo";

    var dob=document.getElementById("dobid").value ;

    var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }

    if(age<14){
        document.getElementById("dobchk").innerHTML="Minimum 14 years old";
        return false;
    }

    else if(age>=14){
        document.getElementById("dobchk").innerHTML=" matched";
        return true;
    }
    else{
        return false;
    }
}
 
function gencheck(){
    if(document.getElementById("genderm").checked==true || document.getElementById("genderf").checked==true){
        return true;
    }
    else{
        document.getElementById("genderchk").innerHTML="Select one";
        return false;
    }
}

function filecheck()
{
    var selected = document.getElementById("uploadBox").files.length;
    if(selected>0){
        return true;
    }
    else{
        document.getElementById("filechk").innerHTML="Not uploaded";
        return false;
    }
}

function checkbox(){
    
    if(document.getElementById("checkbox").checked==true){
        return true;
    }
    else{
        document.getElementById("checkboxchk").innerHTML="You have to accept terms and conditions";
return false;
    }
}

function buyer_cart(){
    var change=document.getElementById("addcart").value;

    if(change=="Add to cart"){
        change="Remove from cart";
    }
    else{
        change="Add to cart";
    }
}



//AJAXXXXXX


function showmyuser() {
    var uname=  document.getElementById("uname").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
  
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("mytext").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("mytext").innerHTML = this.status;
      }
    };
    xhttp.open("POST", "../control/getuser.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname="+uname);
  
  
  }

function formcheck(){
    if(passcheck() && emailcheck() && dobcheck() && lnamecheck() && fnamecheck() && unamecheck() &&  mobilecheck && conpasscheck() && gencheck() && filecheck() && checkbox()){
        return true;
    }
    else{
        document.getElementById("write").innerHTML="Fill up everthing";
        return false;
    }
}

    function formcheck2(){
        if(passcheck() && emailcheck() && dobcheck() && lnamecheck() && fnamecheck() && unamecheck() &&  mobilecheck() && conpasscheck() && filecheck()){
            return true;
        }
        else{
            document.getElementById("write").innerHTML="Fill up everthing";
            return false;
        }
    }

    function formcheck3(){

        if(pincheck()  &&  mobilecheck() ){
            return true;
        }
        else{
            document.getElementById("write").innerHTML="Fill up everthing";
            return false;
        }

    }

