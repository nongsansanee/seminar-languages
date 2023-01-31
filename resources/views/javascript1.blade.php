<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Computer</h1>
    <h2>ฝากบอกคนทั้งโลกว่า.....</h2>
    <h2 id="msg_show"></h2>
</body>
</html>
<script lang="ts">
let msg="เรารักนาย";
document.getElementById("msg_show").innerHTML = msg;
</script>