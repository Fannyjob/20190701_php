<script>
    function isNewAccount(){
        let account = document.getElementById('account').value;
        //alert(account);
    }
    </script>


<form method='post' enctype="multipart/form-data">
    Account : <input type="text" name="account" onchange="isNewAccount()" /> <br>
    Password: <input type="password" name="passwd" /><br>
    Realname: <input type="text" name="realname" /><br>
    Icon: <input type="file" name="icon" /><br>
    <input type="submit" name="Register" /><br>
</form>