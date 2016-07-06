<!DOCTYPE html>
<html lang="en">
<head>
    <title>CheckList</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/test.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>
<body>
<div class="container">
        <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="#" onClick="window.location.reload();return false;">Home</a>
                    </li>
                </ul>
            </nav>
    <h2>Checklist App</h2>
    <div id="loading-img" class="se-pre-con"></div>
    <br>
    <br>
     <div id="box-element" class="box id-area">
           <br/>
            <nav>
                <ul class="nav nav-pills">
                    <input id="button-click" class="next-click" onclick="myFunction1('2')" type="button" value="Create Template">
                    <input id="button-click" class="next-click" onclick="myFunction1('3')" type="button" value="Modify Template">
                    <input id="button-click" class="next-click" onclick="myFunction1('4')" type="button" value="Create checklist">
                </ul>
            </nav>
     </div>
     <div id="box-element2" class="box2 id-area2" style="display: none">
       <h3>Create Template</h3><br/>
         <input id="usernametext1" type="text" class="Username btn-block text-center" name="adderss" placeholder="  Number of field">
       <div id="notification" class="notification"></div>
       <div id="checklist" class="checklist">
       </div> 
       <input id="button-click1" name="add" class="next-click btn-block" onclick="load('createT')" type="button" value="Next">
    </div>
     <div id="box-element3" class="box2 id-area2" style="display: none">
       <h3>MODIFY TEMPLATE</h3><br/>
         <input id="usernametext2" type="text" class="Username btn-block text-center" name="adderss" placeholder = "template ID">
       <input id="button-click" name="delete" class="next-click btn-block" onclick="myFunction('delete')" type="button" value="Delete">
    </div>
     <div id="box-element4" class="box2 id-area2" style="display: none">
       <h3>CREATE CHECKLIST</h3><br/>
         <input id="usernametext3" type="text" class="Username btn-block text-center" name="adderss" placeholder = "Username to Deactivate MFA">
       <input id="button-click" name="deactivate" class="next-click btn-block" onclick="myFunction('deactivateMfa')" type="button" value="Deactivate">
    </div>
    <div id="box-element5" class="box2 id-area2" style="display: none"></div>
 
</div>
</body>
</html>

