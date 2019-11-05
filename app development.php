<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="jquery-3.4.1.js"></script>
<style>
body  {
  background-image: url("pic6.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.i{
    width: 40%;
    border: 5px solid plum;
}
.i:hover{
    transform: scale(1.2);
    border: 5px solid black;
}
.j{
    width: 40%;
    border: 5px solid plum;
}
.j:hover{
    transform: scale(1.2);
    border: 5px solid black;
}

.k{
    width: 40%;
    border: 5px solid plum;
}
.k:hover{
    transform: scale(1.2);
    border: 5px solid black;
}

.l{
    width: 40%;
    border: 5px solid plum;
}
.l:hover{
    transform: scale(1.2);
    border: 5px solid black;
}

.m{
    width: 40%;
    border: 5px solid plum;
}
.m:hover{
    transform: scale(1.2);
    border: 5px solid black;
}


</style>
<body>
    <script>
    function Blink()
    {
        $('.i').fadeOut(1000);
        $('.i').fadeIn(1000);
        $('.j').fadeOut(2000);
        $('.j').fadeIn(2000);
        $('.k').fadeOut(3000);
        $('.k').fadeIn(3000);
        $('.l').fadeOut(4000);
        $('.l').fadeIn(4000);
        $('.m').fadeOut(5000);
        $('.m').fadeIn(5000);
    }
    setInterval(Blink,5000);

    </script>
    <h1><center><b>HERE ARE FEW SAMPLES OF OUR WORK</b></center></h1>
    <br>
    <div>
    <center><img src="web1.jpg" class="i"></center>
    </div>
    <br>
    <div>
    <center><img src="web2.jpg" class="j"></center>
    </div>
    <br>
    <div>
    <center><img src="web3.jpg" class="k"></center>
    </div>
    <br>
    <div>
    <center><img src="web4.jpg" class="l"></center>
    </div>
    <br>
    <div>
    <center><img src="web5.jpg" class="m"></center>
    </div>
    <br>
    <br>
    
</body>
</html>