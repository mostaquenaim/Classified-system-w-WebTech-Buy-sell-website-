function Fname(){
    var Fname=document.getElementById("fname").value;
    var pattern = /^[A-Za-z]+$/;
    
    if(Fname.match(pattern)){
        document.getElementById("Fname").innerHTML="good";
        return true;
    }else if(Fname.length<1){
        document.getElementById("Fname").innerHTML="enter name";
        return false;

    }else{
        document.getElementById("Fname").innerHTML="only character";
        return false;
    }

}
function Lname(){
    var Lname=document.getElementById("lname").value;
    var pattern = /^[A-Za-z]+$/;
    if(Lname.match(pattern)){
        document.getElementById("Lname").innerHTML="good";
        return true;
    }else if(Lname.length<1){
        document.getElementById("Lname").innerHTML="enter name";
        return false;

    }else{
        document.getElementById("Lname").innerHTML="only character";
        return false;
    }

}

function Uname(){
    var Uname = document.getElementById("uname").value;
    // var pattern = /^[a-zA-z]*$/;
    var pattern = /^[a-z]*$/;
    if(Uname.match(pattern)){
        document.getElementById("Uname").innerHTML="good";
        return true;
    }else if(Uname.length<1){
        document.getElementById("Uname").innerHTML="enter username";
        return false;
    }else{
        document.getElementById("Uname").innerHTML="Only small characters";
        return false;
    }
}
function Mobile(){
    var Mobile = document.getElementById("mob").value;
    var pattern = /^[013,017,018,015,016,019]{3}[0-9]{8}$^/;
    // var pattern = /^(?:+88|88)?(01[3-9]\d{8})$/;
    if(Mobile.match(pattern)){
        document.getElementById("Mob").innerHTML="good";
        return true;
    }else if(Mobile.length<1){
        document.getElementById("Mob").innerHTML="enter mobile number";
        return false;
    }else{
        document.getElementById("Mob").innerHTML="please follow mobile no formate";
        return false;
    }
}
function NID(){
    var NID = document.getElementById("nid").value;
    var pattern = /^[0-9]{13}^/;
    if(NID.match(pattern)){
        document.getElementById("Nid").innerHTML="good";
        return true;
    }else if(NID.length<1){
        document.getElementById("Nid").innerHTML="enter NID";
        return false;
    }else{
        document.getElementById("Nid").innerHTML="13 number require";
        return false;
    }
}

function Email(){
    var Email=document.getElementById("email").value;
    // var pattern= /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^/;
    var pattern= /^[_a-z-]+(\.[_a-z-]+)*@[a-z-]+(\.[a-z-]+)*(\.[a-z]{2,3})$^/;  

    if(Email.match(pattern)){
        document.getElementById("Email").innerHTML="good";//must contain '@' and '.com'
        return true;
    }else if(Email.length<1){
        document.getElementById("Email").innerHTML="enter email";
        return false;
    }else{
        document.getElementById("Email").innerHTML="only small letters '@' and '.com'";
        return false;
    }
}

function Address(){
    var Address=document.getElementById("address").value;
    var pattern= /^[A-Za-z]+$/;
    if(Address.match(pattern)){
        document.getElementById("ADD").innerHTML="good";
        return true;
    }else if(Address.length<1){
        document.getElementById("ADD").innerHTML="enter address";
        return false;
    }else{
        document.getElementById("ADD").innerHTML="must contain alphabets";
        return false;
    }
}

function Password(){
    var Password=document.getElementById("pass").value;
    // var pattern= /^[ A-Za-z0-9]*$/;
    var pattern= /^[ A-Za-z0-9]*$/;
    if(Password.match(pattern)){
        document.getElementById("Pass").innerHTML="good";
        return true;
    }else if(Password.length<6){
        document.getElementById("Pass").innerHTML="atleast 6 characters and no special character";
        return false;
    }else{
        document.getElementById("Pass").innerHTML="Password must have at least one alphabet and one number and should not be less than 6 characters";
        return false;
    }
}

function formcheck(){
    if(Password() && Email() && Lname() && Fname() && Address() && NID() && Mobile() && Uname() ){
    // if(Password() || Email() || Lname() || Fname() || Address() || NID() || Mobile() || Uname() ){
        ddocument.getElementById("write").innerHTML="Everything is ok ";
        return true;
    }
    else{
        document.getElementById("write").innerHTML="Kindly fill up completely";
        return false;
    }
}




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
    xhttp.open("POST", "../control/search_control.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname="+uname);
  
  
  }
function findProduct() {
    var name=  document.getElementById("name").value;
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
    xhttp.open("POST", "../control/product_search_control.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name="+name);
  
  
  }