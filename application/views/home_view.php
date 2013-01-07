
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>HR Application</title>
    <link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>

    <title>ECWM604 Advanced Web Technologies - Coursework 2 </title>
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
              <li><a href="index.php/auth">Login</a></li>
              <!--http://www.ecwm604.us/w1311009/
              http://www.ecwm604.us/w1311009/index.php/auth
              -->
              
            </ul>
          </div><!--/.nav-collapse -->

    </div>
</div>

<div class="container" style="padding-bottom: 10px">
    <div class="row">

        <h2>Coursework 2: HR Application</h2>
        <div class="span9">
            <p>You can search for employee using fields below. </p>

            <form action="" method="GET">
                <div>
                    
                    <div>First name:        <br /> <input type=text id="fn" name='firstname'> </div>
                    <div>Last name:        <br />  <input type=text id="ln" name='lastname'> </div>
                    <div>Department Name:  <br />  <select type=text id="dt" name='dept'>
                        <option value="">Select Department</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Development">Development</option>
                        <option value="Finance">Finance</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Production">Production</option>
                        <option value="Quality Management">Quality Management</option>
                        <option value="Research">Research</option>
                        <option value="Sales">Sales</option>
                    </select>
                    </div>
                    <div>Current job Title: <br /> <input type=text id="jt" name='jobtitle'> </div>
                    <br /><div><input value="Search" type="submit" id="searchid">

            </form>
            <button id="reset">Reset</button>
            <br><br>
            <div id="result" class="row"></div>
        </div>
    </div>
</div>
<script language="javascript">
    $('#searchid').click(function() {
        $.get("index.php/find/findemp",{firstname : $('#fn').val(),lastname : $('#ln').val(),dept : $('#dt').val(),jobtitle : $('#jt').val() },function(data) {
// $('#result').html('First name: ' );
            var names = "";
            $.each(data, function(index, element) {
                if (index > 0) {names;}
                names += "<tr> <td>"+element.first_name +"</td> "+"<td>"+ element.last_name+ "</td> <td>"+ element.dept_name+"<td/> <td> "+ element.title+"</td><td>"+element.gender+"</td></tr>"+ "<br/>";
            });
            $('#result').html(names);
        },"json");
        return false;
    });
</script>
</body>
</html>
