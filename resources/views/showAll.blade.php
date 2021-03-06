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
            <br>
            <br>
            <br>
            <h1>Chào mừng bạn đến cửa hàng</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
               
            <div class="d-flex justify-content-between">
                <a href="{{route('cars.create')}}" type="button" class="btn btn-secondary">thêm xe</a>
                <select  onchange="changeHandler()" id="select">
                    {{-- <select  onchange="window.location=' {{route('cars.index_producer',3)}}'"> --}}
                    <option >Xem danh sách xe của nhà xe</option>
                        
                    <option value="-1">See all the producer</option>
                    
                        @foreach ($cars as $car) {
                            # code...
                            <option value="{{$car->producer->id }}"> {{ $car->producer->name }}</option>
                        }
                        @endforeach
                        
                </select>
            </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">model</th>
                    <th scope="col">Producer</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cars as $car_index)
                  <tr>
                    <th scope="row">{{  $car_index->id }}</th>
                    <td>{{   $car_index->description}}</td>
                    <td>{{   $car_index->model }}</td>
                    <td>{{   $car_index ->producer->name }}</td>
                    <td><img class="img-thumbnail" src="/images/{{$car_index->image}}"></td>
                    <td><button onclick="window.location=' {{route('cars.edit',$car_index->id)}}'" class="btn btn-primary">Edit</button></td>
                    <td>
                      <form action="{{route('cars.destroy',$car_index->id)}}" method="post">
                        @csrf
                        {{ method_field('delete') }}
                        {{-- <button class="btn btn-secondary" type="submit">Delete</button> --}}
                        <button class="btn btn-secondary" onclick="return myFunction()">Delete</button>      
                    </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    <!-- Optional JavaScript -->
    <script>
        function myFunction() {
            if(!confirm("Are You Sure to delete this"))
            event.preventDefault();
        }
        const changeHandler = ()=>{
            const index = $('#select').val();
            window.location= `/cars/producer/${index}`
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
