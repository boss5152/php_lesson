<script>
    //xml
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4 && xhttp.status = 200){
            if(xhttp.responseText == 0){
                document.getElementBy
            }
        }
    }


    function isNewAccount(){
        let account = doucment.getElementBy('account').value;
        alert('ok');
    }
</script>


<form method='post' enctype="multipart/form-data">
    Account : <input type="text" id = "account" name="account" onchange="isNewAccount()"><br>
    Password : <input type="text" name="password"><br>
    Name : <input type="text" name="name"><br>
    Icon : <input type = "file" name = "icon"><br>
    <input type="submit" value="Register">
</form>