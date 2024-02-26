<!DOCTYPE html>
<html>
    <head>
        <title>Testing Login</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css"/>
</head>
    <body>
        <div class="login-div">
        <div class="logo"></div>
        <div class="title">RGUKT</div>
        <div class="sub-title">THE GOLDEN DOOR</div>
        
        <div class="fields user-input">
           	
           <form action="base.php" method="post" id="form">	
           
            <div class="username">
                <input type="text" id="name" name="name" placeholder="Student Name"/>
            </div>
            <div class="password">
                <input type="text" id="id" name="id"  placeholder=" Student ID"/>
            </div> 
              
        </div>
        <input type="checkbox" id="consent" name="consent"/>
            <label>Agreeing Terms and Conditions of RGUKT</label>
            <br> 
        <span id="errorMessage"></span><br> 
           
</br>   <div align="center">
        <input type="submit" class="signin-button" name="send"/>
        
     </div>
        </div>
        
        </div>
        
    </div>
</form>
    
    <script>
        let form=document.getElementById("form");
        form.addEventListener("submit",(event)=>{
            event.preventDefault();
            validate();
        });
        function validate(){
            let name=document.getElementById("name").value.trim();
            let id=document.getElementById("id").value.trim();
            let is_checked=document.getElementById("consent").checked;
            let name_is_valid=true;
            let id_is_valid=true;
            if(name==""){
                document.getElementById("errorMessage").innerText="Name cannot be EMPTY";
                name_is_valid=false;
                return;
            }
            if(name.length<5){
                document.getElementById("errorMessage").innerText="Name cannot be less than 5 Characters";
                name_is_valid=false;
                return;    
            }
            if(/\d/.test(name)){
                document.getElementById("errorMessage").innerText="Digits not allowed in Name field";
                name_is_valid=false;
                return;
            }
            if(id==""){
                document.getElementById("errorMessage").innerText="Enter College ID";
                id_is_valid=false;
                return;
            }
            if(!/(R18|r18|S18|s18|N18|n18|O18|o10)[0-9]{4}/.test(id)){
                document.getElementById("errorMessage").innerText="Enter valid College ID format";
                id_is_valid=false;
                return;
            }
            if(!is_checked){
                document.getElementById("errorMessage").innerText="Please agree Terms and Condtitions to Login";
                return;  
            }
            if(name_is_valid && id_is_valid && is_checked){
                form.submit();
            }
            }
    </script>


    


    
    
    
    
    </body>


</html>