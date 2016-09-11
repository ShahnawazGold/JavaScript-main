



<html>
<head>
<title> my javascript </title>


</head>
<body>
<h1> javascript</h1>
<script type ="text/javascript">
//var text1="shah";

//document.write("<h1>"+text3+"</h1>");

var c= 0;
var time ;
 function Count_Time()
{
    document.getElementById("text").value=c;
    c++;  //c=c+1 c mn add hota h c
    
    time =setTimeout("Count_Time()",1000);
}

function Count_Stop()
{
    clearTimeout(time);
}


</script>
<input type="button"  value ="start timer" onclick="Count_Time()"/>
<input type="text" id="text"/>
<input type="button" value ="close timer" onclick="Count_Stop()"/>

</body>
</html>