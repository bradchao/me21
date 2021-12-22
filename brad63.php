<script>
    const xhttp = new XMLHttpRequest();

    function checkAccount(){
        let account = document.getElementById('account').value;
        let url = "brad67.php?account=" + account;

        xhttp.onload = afterCheck;
        xhttp.open('GET', url);
        xhttp.send();
    }

    function afterCheck(){
        //console.log('OK');
        document.getElementById('mesg').innerHTML =  xhttp.responseText;
    }

</script>
Register
<hr />
<form method="POST" action="brad64.php">
    Account :<input type="text" id='account' name="account" onblur='checkAccount()'/><span id='mesg'></span><br />
    Password :<input type="password" name="passwd" /><br />
    Realname :<input type="text" name="realname" /><br />
    <input type="submit" value="Register" />
</form>