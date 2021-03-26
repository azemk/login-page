<html>
    <body>
        <style>
            body{
                background-color:palevioletred;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                display:flex;
                justify-content: center;
            
            }
            .container{
                padding-top:200px;
                

            }
            .label{
                font-style: oblique;
                font-weight:bold;
                font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                padding-right:20px;


            }
            .label1{
                font-style: oblique;
                font-weight:bold;
                font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                padding-right:10px;
                margin-right:10px;


            }
            .buttons{
                position: relative;
                top:50px;
                left:200px;
                
            }
            .h1{
                
                color:red;
                font-style:italic;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size:30px;
            }
        </style>
    <form   >  
            <div class="container">   
                <h1>INPUT YOUR LOGIN AND PASSWORD !</h1>
                <label class ="label ">Username : </label>   
                <input type="text" placeholder="Enter Username" name="userid" required>
                <label class="label1 ">Password : </label>   
                <input type="password" placeholder="Enter Password" name="pwd" required> 
                <tr>
                    <div class="buttons ">
                        <td ><input type="Reset" value="CLEAR"></td>
                   <td><input type="submit" onclick="return check(this.form)" value="SUBMIT">
                    </td>

                    </div>
                </tr>
                <script language="javascript">
function check(form)
{
if(form.userid.value == "Azem" && form.pwd.value == "123")
{
    form.action = "https://cv-new.herokuapp.com/";
    return true;
}
{
  alert("Error Password or Username")
  return false;
}
}
</script>

    </body>
</html>