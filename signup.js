const form=document.querySelector(".signup form"),
continueBtn=form.querySelector(".button input");
errortext=form.querySelector(".error_txt");
form.onsubmit=(e)=>
{
    e.preventDefault();
}
continueBtn.onclick=()=>
{
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/signup.php",true);
    xhr.onload=()=>
    {
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status===200)
            {
                let data=xhr.response;
                if(data==="success")
                {
                    location.href="user.php";
                }
                else
                {
                    errortext.textContent=data;
                    errortext.style.display="block";
                }
            }
        }
    }
    let formData=new FormData(form);
    xhr.send(formData);
}