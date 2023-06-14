

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
      @include('admin.sidebar')

      @include('admin.navbar')


      <div style="padding-bottom:30px" class="container-fluid page-body-wrapper">

        <div class="container" align="center">

        @if(Session::has('message'))
                    <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert" ></button>
                    {{Session::get('message')}}
                    </div>

               
        @endif


            <table>
                <tr style="background-color: gray;">
                    <td style="padding:20px;">Title</td>
                    <td style="padding:20px;">Description</td>
                    <td style="padding:20px;">Quantity</td>
                    <td style="padding:20px;">Price</td>
                    <td style="padding:20px;">Image</td>
                    <td style="padding:20px;">Update</td>
                    <td style="padding:20px;">Delete</td>
                </tr>
                

                @foreach($data as $product)

                <tr align="center" style="background-color: black;">
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <img height="100" width="100" src="/productimage/{{$product->image}}" alt="">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                    </td>

                    <td>
                        <a onclick="return confirm('Are You Sure')" class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                    </td>

                </tr>

                @endforeach



            </table>

        </div>
      </div>
        <!-- partial -->
        
          <!-- partial -->
          @include('admin.script')
  </body>
</html>