<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <center>
            <form action="" method="post">
                <h1>LOG IN FORM</h1><br/>
                <input type="text" placeholder="username" name="user">
                <input type="password" placeholder="password" name="pass">
                <input type="submit" value="save" name="enter">
            </form>
        </center>
    </body>
</html>
<?php

 function (Request $req)
    {
        $user = $req->input('user');
        $pass = $req->input('pass');


        $checkLogin = Db::table('login')->where(['username'=>$user,'password'=>$pass])->get();
        if(count($checkLogin) >0)
        {
            echo "login Successfull";
        }
        else
    {
            echo "Login failed";
    }
    }

?>