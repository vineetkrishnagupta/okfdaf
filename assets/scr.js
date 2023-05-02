function Show(){
    var mp = document.getElementById("loginPassword");
    if (mp.type === "password") {
    mp.type = "text";
    } 
    else {
    mp.type = "password";
    }
}