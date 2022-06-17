<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action={{route('ptbac1.ca')}}>
        @csrf
        Nhập số a: <input name="a" type="number" id="a" value= {{isset($a)? $a : ""}} /> <br/>
        Nhập số b: <input name="b" type="number" id="b" value={{isset($b)? $b : ""}} /> <br/>
        @if (isset($result))
            Kết quả:{{ $result}} <br/>
        @endif
       
        <span id="result"></span> <br/>
        <input type="submit" id="giaiBtn" value="Tìm nghiệm"/>
    </form>

</body>
</html>