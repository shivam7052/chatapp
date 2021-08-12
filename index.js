                var state1=false;
                var btnact1=document.querySelector(".form .field i");
                btnact1.classList.add("active");
                function toggle1()
                {
                    if(state1)
                    {
                       document.getElementById("password").setAttribute("type","password");
                       btnact1.classList.add("active");
                       state1=false;
                    }
                    else
                    {
                        document.getElementById("password").setAttribute("type","text");
                        btnact1.classList.remove("active");
                        state1=true;
                    }
                }
                var state=false;
                var btnact2=document.getElementById("eye2");
                btnact2.classList.add("active");
                function toggle2()
                {
                    if(state)
                    {
                        document.getElementById("confirm_password").setAttribute("type","password");
                        btnact2.classList.add("active");
                        state=false;
                    }
                    else
                    {
                        document.getElementById("confirm_password").setAttribute("type","text");
                        btnact2.classList.remove("active");
                        state=true;
                    }
                }
               function fun()
                {
                    var psd1=document.getElementById("password").value;
                    var psd2=document.getElementById("confirm_password").value;
                    if(psd1=="") {  
                      document.getElementById("message").innerHTML = "**Please fill password";  
                      return false;  
                      }   
                    if(psd1.length <8) 
                    {  
                      document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
                      return false;  
                      } 
                      if(psd1.length>15) 
                    {  
                      document.getElementById("message").innerHTML = "**Password length must be lesser than 15 characters";  
                      return false;  
                      }  
                    if(psd1!=psd2)
                    {
                        document.getElementById("password").style.borderColor="red";
                        document.getElementById("confirm_password").style.borderColor="red";
                        document.getElementById("message").innerHTML = "**Password do not matched";
                        return false;
                    }
                }