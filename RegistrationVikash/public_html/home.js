function fn()
{
    var t=document.getElementById('fname').value;
    var p=/^[a-zA-Z]+$/;
  
    if(t=='')
    {
        document.getElementById('m1').innerHTML="Please Enter a Name";
    }
    else if (t.match(p))
    {
        document.getElementById('m1').innerHTML="";
    }
    else
    {
        document.getElementById('m1').innerHTML="Enter valid Name";
    }
}

function ln()
{
    var t=document.getElementById('lname').value;
    var p=/^[a-zA-Z]+$/;
    if(t=='')
    {
        document.getElementById('m2').innerHTML="Please Enter a Name";
    }
    else if (t.match(p))
    {
        document.getElementById('m2').innerHTML="";
    }
    else
    {
        document.getElementById('m2').innerHTML="Enter valid Name";
    }
}


function mail()
{
    var t= document.getElementById('email').value;
    var p= /^([a-zA-Z_0-9\-\.])+\@([a-zA-Z]+)\.([a-zA-Z]{2,3})$/;
    if(t=='')
    {
        document.getElementById('m4').innerHTML="Please Enter EmailID";
    }
    else if (t.match(p))
    {
        document.getElementById('m4').innerHTML="";
    }
    else
    {
        document.getElementById('m4').innerHTML="Enter valid email ID";
    }
}


function pwd()
{
    var p=document.getElementById('pass').value;
    var cp=document.getElementById('conf').value;
    
    if(p==='')
    {
        document.getElementById('m3').innerHTML='Enter password';
    }
    else if( p.length>0)
    {
        if(p.length>=3 && p.length < 11)
        {   
          document.getElementById('m3').innerHTML='';
        }
        else
          document.getElementById('m3').innerHTML='Password length should be min 3 digits & 10 digits only';  
    }
    else
    {
        document.getElementById('m3').innerHTML='';
    }
}


function confpwd()
{
     var cp=document.getElementById('conf').value;
    var p=document.getElementById('pass').value;
    
    
    if(cp==='')
    {
        document.getElementById('m5').innerHTML='Enter Confirm Password';
    }
    else if(cp!==p)
    {
        document.getElementById('m5').innerHTML='Confirm Password Invalid';
    }
    else
        document.getElementById('m5').innerHTML='';
}