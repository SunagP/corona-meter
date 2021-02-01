function mail_check_sign(){
validate = signi.mail.value.search("@gmail.com")
namee = signi.username.value.search("\\w")
pass = signi.password.value.search("\\w")

if(validate==-1)
{
    alert("NOT VALID MAIL ID");
}
else if(namee==-1)
{
    alert("PLEASE ENTER A NAME");
}
else if(pass==-1)
{
    alert("ENTER THE PASSWORD");
}
else{
    window.close();
    window.open("homepage.html","_parent");
}
}

function check_log()
{
    n = log.username.value.search("\\w")
    pass = log.password.value.search("\\w")

    if(n==-1)
    {alert("ENTER USERNAME")}
    else if(pass==-1)
    {alert("ENTER PASSWORD")}
    else{window.open("homepage.html","_parent")}
}

