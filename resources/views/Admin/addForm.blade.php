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
        {{-- {{ isset('$car')?"this is form update":"this is form create" }} --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Chào mừng bạn đến form nhập</h1>
        <h1> {{isset($car)?"this is form update":"this is form create"}}</h1>
        <a href="{{route('cars.index')}}" class="btn btn-success">Về trang chủ</a>
        <br>
        <form name="form" enctype="multipart/form-data" method="POST" action="{{isset($car)?route('cars.update',$car->id):route('cars.store')}}" >
            @csrf
            {{ isset($car)?method_field('PUT'):"" }}
            <div class="form-group">
                <label for="id">ID</label>
                {{-- value="{{isset('$car')}}?$car->id:'' " --}}
                <input type="text" 
                    name="id"  
                    value="{{isset($car)?$car->id:""}}" 
                    disabled  
                    class="form-control" 
                    id="id" 
                    placeholder="Example input">
              </div>
            <div class="form-group">
                <label 
                    for="model">Input Model</label>
                <input 
                    type="text"  
                    name="model"  
                    value="{{isset($car)?$car->model:""}}" 
                    class="form-control" 
                    id="model" 
                    placeholder="Example input">
            </div>
            <div class="form-group">
                <label 
                    for="producer">Input producer</label>
                {{-- <input 
                    type="text"  
                    name="producer"  
                    value="{{isset($car)?$car->pro:""}}" 
                    class="form-control" 
                    id="producer" 
                    placeholder="Example input"> --}}
                <select name="producer" id="producer">
                    @isset($pros)
                        @foreach ($pros as $producer) {
                            <option 
                            {{isset($car) && $car->producer_id ===  $producer->id ? 'selected':"" }}
                             value="{{ $producer->id }}"> {{ $producer->name }}</option>
                        }
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="form-group">
                <label 
                    for="discription">Discription</label>
                <textarea 
                    class="form-control"  
                    name="description" 
                    id="discription" 
                    rows="3">{{isset($car)?$car->description:""}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <br>
                <input 
                    type="file" 
                    name="image" 
                    class="form-control-file" 
                    id="exampleFormControlFile1">
                <img 
                    alt="this is image" 
                    id="image-show" 
                    class="img-thumbnail" 
                    width="400px" 
                    height="400px"  
                    src="/images/{{isset($car)?$car->image:""}}">
            </div>
            <button 
                type="submit" 
                class="btn btn-success"
                >
                Thêm sản phẩm
            </button>
          </form>
          
    </div>
    <!-- Optional JavaScript -->
    {{-- access to form --}}
    <script src="{{asset('js/handle.js')}}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>