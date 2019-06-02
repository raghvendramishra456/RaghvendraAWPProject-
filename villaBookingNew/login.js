
function maillog()
{
    var t= document.getElementById('em').value;
    var p= /^([a-zA-Z_0-9\-\.])+\@([a-zA-Z]+)\.([a-zA-Z]{2,3})$/;
    if(t=='')
    {
        document.getElementById('e1').innerHTML="Please Enter EmailID";
    }
    else if (t.match(p))
    {
        document.getElementById('e1').innerHTML="";
    }
    else
    {
        document.getElementById('e1').innerHTML="Enter valid email ID";
    }
}


function pd()
{
    var p=document.getElementById('pas').value;
    
    if(p==='')
    {
        document.getElementById('p').innerHTML='Enter password';
    }
    else
    {
        document.getElementById('p').innerHTML='';
    }
}