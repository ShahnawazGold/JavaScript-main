

<html>
<head>
<title> my javascript </title>


</head>
<body>
<h1> javascript</h1>
<script type ="text/javascript">
//var text1="shah";

//document.write("<h1>"+text3+"</h1>");




function myTimer() {
    var d = new Date();
    document.getElementById("text").innerHTML = d.toLocaleTimeString();
}
var time = setInterval(myTimer, 1000);


</script>


<h1 id="text"></h1>

</body>
</html>