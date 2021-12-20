<form action="brad38.php" method="get">
    Account: <input type="text" name="account" /><br />
    Password:<input type="password" name="passwd" /><br />
    Zipcode:
    <select name="zipcode">
        <option value='401'>北屯區</option>
        <option value='402'>西屯區</option>
        <option value='403'>南屯區</option>
        <option value='404'>東屯區</option>
    </select><br />
    Gender: 
    <input type="radio" name='gender' value='f' checked />Female
    <input type="radio"  name='gender' value='m'/>Male<br />

    Habit:
    <input type="checkbox" name="habit[]" value="1" />打電腦
    <input type="checkbox" name="habit[]" value="2" />打電動
    <input type="checkbox" name="habit[]" value="3" />打籃球<br />
    <input type="checkbox" name="habit[]" value="4" />打麻將
    <input type="checkbox" name="habit[]" value="5" />打羽球
    <input type="checkbox" name="habit[]" value="6" />打小孩<br />

    Icon: <input type="file" name='upload' /><br />


    <input type="submit" value="Register" />
</form>