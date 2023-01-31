<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Computer บวกเลขให้หน่อย</h1>
    <input type="number" name="" id="num1">+
    <input type="number" name="" id="num2">
    = <input type="submit" value="calculate1" onclick="calculate1()">
    <input type="submit" value="calculate2" onclick="calculate2()">
    <h1 id="result"></h1>
   
</body>
</html>
<script >
//document.getElementById("result").value = 0;



function calculate1(){
    console.log(document.getElementById("num1").value);
    console.log(document.getElementById("num2").value);
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let result = num1 + num2;

    document.getElementById("result").innerText = result;
}

function calculate2(){
    console.log(document.getElementById("num1").value);
    console.log(document.getElementById("num2").value);
    let num1 = parseInt(document.getElementById("num1").value);
    let num2 = parseInt(document.getElementById("num2").value);
    let result = num1 + num2;

    document.getElementById("result").innerText = result;
}



function number(num1, num2){
 return num1 + num2;
}
console.log(number(10, 9)); 
console.log(number("10", 9));


</script>