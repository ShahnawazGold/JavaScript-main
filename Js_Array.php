

<html>
<head>
<title> my javascript </title>


</head>
<body>
<h1> javascript</h1>
<script>
//var text1="shah";

//document.write("<h1>"+text3+"</h1>");
//most use this function in array
//concat
//join
//sort
//reveres
//pop
//shift
//slice
//unshift

var student_name = new Array();

    student_name[0]="gold";
    student_name[1]="james";
    student_name[2]="david";
    student_name[3]="jeckin";
    

var employee_name = new Array();

     employee_name [0] ="shah";
     employee_name [1] ="faisal";
     employee_name [2] ="asad ";
// join mempy +studnt
var total = student_name.concat (employee_name);

for (var i in total) { 
    document.write(total[i] +"<br>"); 
}
     




</script>


</body>
</html>