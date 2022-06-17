<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action={{route('ptbac1.calculatePT')}}>
        @csrf
        Nhập số a: <input name="a" type="number" id="a" value= {{isset($a)? $a : ""}} /> <br/>
        @if ($errors->has('a')) {
            alo loi o a
        }
        @endif
        Nhập số b: <input name="b" type="number" id="b" value={{isset($b)? $b : ""}} /> <br/>
        @if (isset($result))
            Kết quả:{{ $result}} <br/>
        @endif
        <input type="submit" id="giaiBtn" value="Tìm nghiệm"/>
    </form>
</body>
</html>