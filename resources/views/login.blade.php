<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }
    body{
        min-height: 100vh;
        background-color: #B99470;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container{
        width: 100%;
        display: flex;
        max-width: 850px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 15px rgb(0, 0, 0, 0.1);
    }
    .login{
        width: 400px;
    }
    form{
        width: 250px;
        margin: 60px auto;
    }
    h1{
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }
    hr{
        border-top: 2px solid black;
    }
    p{
        text-align: center;
        margin: 10px;
    }
    .right img{
        height: 100px;
        width: 150px;
        border-top-right-radius:15px ;
        border-bottom-right-radius: 15px;
    }
    form label{
        display: flex;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
    }
    input{
        width: 100%;
        margin: 2px;
        border: none;
        outline: none;
        padding: 8px;
        border-radius: 5pc;
        border: 1px solid grey;
    }
    button{
        border: none;
        outline: none;
        padding: 8px;
        width: 252px;
        /* color: white; */
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        border-radius:5px ;
        background-color: #B99470;
    
    }
    button:hover{
        /* background-color: #d9eee1 !important; */
    }
</style>
<body>
    <!-- Login -->
    <div class="container">
        <div class="login">
            <form action="/auth" method="post">
                @csrf
                <h1>Login</h1>
                <hr>
                <p>Ayo login terlebih dahulu</p>
                <label for="">Email</label>
                <input type="text" placeholder="masukan email" name="email">
                <label for="">Password</label>
                <input type="password" placeholder="masukan password" name="password">
                <button>Login</button>
                <p>
                    <a href="#">Forgot Password</a>
                </p>
            </form>
        </div>
        <!-- <div class="right"> -->
            <img src="image/images-removebg-preview.png" alt="" width="340px" height="370px" style="margin-top: 50px; margin-left: 35px;">
    </div>
</body>
</html>