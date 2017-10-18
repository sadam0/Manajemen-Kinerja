<html>
<head>
    <style>
    body {margin:0;}
        table{padding:10px;
        background: white;
        box-shadow:0px 10px 2px rgba(80,0,0,0.2);
        border-radius:6px;
        margin-top:200px;}
        input[type=text], input[type=password]
        {
            width:300px;  
            height:40px;
            border-radius:5px;
            border:none;
            line-height: 10px;
            font-family: Raleway;
        }
        input[type=submit]
        {background-color:white; 
        border:0;
        width:300px;
        height:35px;
        transition:all .5s ease-out;}
        input[type=submit]:hover
        {background-color:black;
        color:white;
        font-family: Raleway;
        box-shadow:2px 2px 2px rgba(0,0,0,0.2)}
        
        a{text-decoration: none;}
        .footer{bottom:0;
            right:0;
            font-family: Raleway;
            left:0;
            width:100%;
            height:30px;
           text-align:right;
            }
    </style>
</head>
<body>
    <center>
<form action = "daftar_p.php" method="post">
<table>
    <tr>
        <td><img src="ish.png"></td>
    </tr>
    <tr>
    <td> <input type="text" name="email" placeholder="Input Email ..."></td>
    </tr>
     <tr>
    <td> <input type="text" name="password" placeholder="input Password ..."></td>
    </tr>
    <tr>
    <td> <input type="submit" name="kirim" value="Daftar"></td>
    </tr>
</table>

</form>

</body>
</html>