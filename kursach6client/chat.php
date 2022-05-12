<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
        function getData(msg, divid){
            $.ajax({
                url: 'getdata.php?message='+msg,
                success: function(html) {
                    var ajaxDisplay = document.getElementById(divid);
                    ajaxDisplay.innerHTML = html;
                }
            });
            element.scrollTop = element.scrollHeight;
        }
        var defaul = "0_0_0_0_0_0_0_0";
        var divid = "res";
        const interval = setInterval(function getData(defaul, divid), 1000);
    </script>
</head>
<body>
<div id="res">  </div>
<input type="text" name="msg" id="msg">
<button id="myBtn" onclick="getData(document.getElementById('msg').value, 'res')">Send!</button>

</body>
</html>
<?php
session_start();
if(isset($_POST['chatcode']))
    $_SESSION['chatcode']= $_POST['chatcode'];
error_reporting(E_ERROR | E_PARSE);
?>