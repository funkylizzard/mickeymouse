
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
              <li><a href="/w1311009/index.php/auth/">Login</a></li>
              <li><a href="/w1311009/index.php/auth/logout">Logout</a></li>
              <!--http://www.ecwm604.us/w1311009/
              http://www.ecwm604.us/w1311009/index.php/auth
              -->
              
            </ul>
          </div><!--/.nav-collapse -->


    </div>
</div>

<div class="container" style="padding-bottom: 10px">
    <div class="row">

        <h2>Welcome to employee details page</h2>
        <div class="span9">
            <p>You can change for employee using details. </p>

            <form action="" method="GET">
                <div >
                    
                    <div>First name:        <br /> <input value="<?php echo $name[1]; ?>" type=text id="fn" name='firstname'> </div>
                    <div>Last name:        <br />  <input value="<?php echo $name[2]; ?>"type=text id="ln" name='lastname'> </div>
                    <div>Department Name:  <br />  <input value="<?php echo $name[3]; ?>" type=text id="dt" name='dept'></div>
                    <div>Current job Title: <br /> <input value="<?php echo $name[4]; ?>" type=text id="jt" name='jobtitle'> </div>
                    <div>Birth Date:  <br />  <input value="<?php echo $name[5]; ?>" type=text id="dt" name='dept'></div>
                    <div>Hire Date:  <br />  <input value="<?php echo $name[6]; ?>" type=text id="dt" name='dept'></div>
                    <div>Gender:  <br />  <input value="<?php echo $name[7]; ?>" type=text id="dt" name='dept'></div>
                    <div>Salary:  <br />  <input value="<?php echo $name[8]; ?>" type=text id="dt" name='dept'></div>
                    
                    <br /><div><input value="Update" type="submit" id="update"></div>
<button id="reset">Reset</button></div>
            </form>
            
            </br></br>
            <table><div id="result" class="row"></div></table>
        </div>
    </div>
</div>
</body>
</html>
