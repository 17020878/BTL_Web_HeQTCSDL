<form  method="POST">

<form action="register.php" method="post">
    <table>
        <tr>
            <td colspan="2">Đăng nhập</td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" id="username" name="email"></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" id="pass" name="pass"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn_submit" action="<?php echo base_path().'home_home/'.$data->Id ?>" value="Đăng nhập"></td>
        </tr>

    </table>

</form>

    <input type="text" name="ID" value = "<?php echo $data->Id?>" >
