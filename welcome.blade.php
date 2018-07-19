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
            #base
            {
                position: absolute;
                top: 100px;
                left: 30%;
                width: 40%;
                height: 150px;
                padding-top: 50px;
                padding-bottom: 50px;
                box-shadow: 0px 0px 1px black;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id = "base">
            <form action="" method="post">
                <h1>LOG IN FORM</h1><br/>
                <input type="text" placeholder="username" name="user">
                <input type="password" placeholder="password" name="pass">
                <input type="submit" value="save" name="enter">
            </form>
        </div>
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