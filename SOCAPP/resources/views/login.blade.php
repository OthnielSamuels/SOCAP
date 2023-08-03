<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
        <title>Document</title>
    </head>

    <body>

        <div id='content'>

            <div id='context'>
                <h1>SOCAPP</h1>
            </div>

            <div id='form'>
                <form action='' method='post'>
                    <div id='content'>
                        <div id='email'>
                            <label>E-mail</label>
                            <input type='email' placeholder='E-mail'>
                        </div>
        
                        <div>
                            <label>Password</label>
                            <input type='password' placeholder='Password'>
                        </div>
        
                        <div id='btnlogin'>
                            <inpute type='submit' value='LogIn'>
                        </div>
                    </div>    
                </form>
            </div>
        </div>

    </body>
</html>