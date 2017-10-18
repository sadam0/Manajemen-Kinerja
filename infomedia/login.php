<html>
<head>
    <style>
        
        body {margin:0;

            font-family:Raleway;}
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
        font-family: Raleway;
        transition:all .5s ease-out;}
        input[type=submit]:hover
        {background-color:black;
        color:white;
        box-shadow:2px 2px 2px rgba(0,0,0,0.2);
    font-family: Raleway;}
        
        a{text-decoration: none;}
        .footer{bottom:0;
            right:0;
            left:0;
            width:100%;
            height:30px;
           text-align:right;
           font-family: Raleway;
            }
    </style>
</head>
    <body style="background-image:url(gambar/wp.jpg)">
        <center>
        <form action="cek_login.php?OP=in" method="post">
            <table>
                <tr>
                    <td>
                        <img src="ish.png">
                    </td>
                </tr>
            <tr>
                <td>
     <input type="text" name="email" id="textfield" class="form-control" placeholder = "Input Email . ."/></td>
    </tr>
      <tr>
          <td>&nbsp;</td>
      </tr>
    <tr>
      <td><input type="password" name="pass" id="textfield2" class="form-control" placeholder = "Input Password . ."/></td>
    </tr>
      <tr>
          <td>&nbsp;</td>
      </tr>
    <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="button" id="button" value="log in" class="btn btn-danger"/>
    </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="right"><a href="daftar.php">Daftar</a></div></td>
    
    </tr>

            </table>
  </form>
            <div class="footer">
               Mod Develop @by cepi
            </div>
    </body>
</html>