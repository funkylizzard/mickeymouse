
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>HR Application </title>
    <title>ECWM604 Advanced Web Technologies</title>
    <script language="javascript" src="/js/jquery-1.8.3.min.js"></script>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script language="javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        p, li, h2, h3, h4 { font-family: 'Average Sans', sans-serif';'}
        p, li { font-size: 18px; }
        li { padding-bottom: 5px; }
    </style>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        HR Application CW2: Copyright (c) Damir Okic 2013. All Rights Reserved.
        
        <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="/w1311009">Search</a></li>
              <li><a href="auth/">Login</a></li>
              <!--http://www.ecwm604.us/w1311009/
              http://www.ecwm604.us/w1311009/index.php/auth
              -->
              
            </ul>
          </div><!--/.nav-collapse -->


    </div>
</div>

<div class="container" style="padding-bottom: 10px">
    <div class="row">

        <h2> Authorised HR personal please login</h2>
        <div class="span9">
        <p>If you don't have username and password yet please contact your manager. </p>
        <br />

            <form action="/w1311009/index.php/auth/authenticate" method="POST">
                <div>
                    <div> Username : <br />
                     <input type="text" name='uname' length="10" size="10">  <br/> </div>               
                    <div> Password: <br />
                    <input type="password" name='pword' length="15" size="30"> <br/></div>
                   <div><input type="submit" value='Login'/>
                   
            
            <button id="reset">Reset</button>
           </form>
        </div><span style="color: red;"><?php echo $errmsg; ?></span></div>
    </div>
</div>
</body>
</html>
