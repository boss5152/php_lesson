<?php
    include_once 'sql.php';
    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $password = $_REQUEST['password'];
        $name = $_REQUEST['name'];

        $password = password_hash($password,PASSWORD_DEFAULT);
        $icon = null;

        if($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
        }

        $sql = "INSERT INTO member (account,password,name,icon) VALUES ('{$account}','{$password}','{$name}','{$icon}')";

        if($mysqli->query($sql)){
            //header()
            echo 'OK';
        }else {
            echo 'error' . $sql;
        }
    }
?>


<script>
    // XML Object
    let xhttp = new XMLHttpRequest();
    let isDataOK = false;
    xhttp.onreadystatechange = function(){
        if (xhttp.readyState == 4&& xhttp.status == 200){
            if (xhttp.responseText == 0){
                document.getElementById('mesg').innerHTML = 'OK';
                isDataOK = true;
            }else{
                document.getElementById('mesg').innerHTML = 'XX';
            }
        }
    }
    function isNewAccount(){
        let account = document.getElementById('account').value;
        //alert(account);
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }
    function isSubmit(){
        return isDataOK;
    }
</script>

<form method='post' action="register.php" onsubmit="return isSubmit();" 
    enctype="multipart/form-data">
    Account: <input type="text" id="account" name="account" onchange="isNewAccount()" />
    <span id='mesg'></span>
    <br>
    Password: <input type="password" name="password" /><br>
    Name: <input type="text" name="name" /><br>
    Icon: <input type="file" name="icon" /><br>
    <input type="submit" value="Register" />
</form>