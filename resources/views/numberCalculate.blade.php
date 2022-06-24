<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <br>
        <br>
        <h1>Number Calculate form</h1>
        <br>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action={{route('number.cal')}}>
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="number1">First Number</label>
                        <input type="text" 
                                value="@if(isset($first)){{$first}}@endif"
                                name="number1" 
                                class="form-control" 
                                id="number1" 
                                placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="number2">Second Number</label>
                        <input type="text" 
                            value="@if(isset($second)){{$second}}@endif"
                            name="number2" 
                            class="form-control" 
                            id="number2" 
                            placeholder="Another input">
                    </div>
                    <div class="form-group">
                        <label for="result">result</label>
                        <input type="text" 
                        value="@if(isset($result)){{$result}}@endif"
                            name="number3" 
                            class="form-control" 
                            id="result" 
                            placeholder="Another input">
                    </div>
                  
                </div>
                <div class="col-6">
                    <div class="form-check">
                        <input class="form-check-input" 
                            type="radio" 
                            name="radio" 
                            id="exampleRadios1" 
                            value="+" 
                            @if (isset($formula))
                            @if($formula == "+")
                            @checked(true)
                            @else
                              @checked(false)
                            @endif
                            @endif
                            >
                        <label class="form-check-label" for="exampleRadios1">
                            Addition [+]
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" 
                                type="radio" 
                                name="radio" 
                                id="exampleRadios2" 
                                value="-"
                                @if (isset($formula))
                                    @if($formula == "-")
                                    @checked(true)
                                    @else
                                      @checked(false)
                                    @endif
                                @endif
                                >
                            <label class="form-check-label" for="exampleRadios2">
                            Subtraction [-]
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" 
                                type="radio" 
                                name="radio" 
                                id="exampleRadios3" 
                                value="*"
                                @if (isset($formula))
                                @if($formula == "*")
                                @checked(true)
                                @else
                                  @checked(false)
                                @endif
                            @endif
                                >
                            <label class="form-check-label" for="exampleRadios3">
                                Multication [*]
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" 
                                type="radio" 
                                name="radio" 
                                id="exampleRadios4" 
                                value="/"
                                {{-- checked = --}}
                                @if (isset($formula))
                                    @if($formula == "/")
                                        @checked(true)
                                    @else
                                      @checked(false)
                                    @endif    
                                @endif
                                >
                            <label class="form-check-label" for="exampleRadios4">
                                Division [/]
                            </label>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Count</button>    
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>