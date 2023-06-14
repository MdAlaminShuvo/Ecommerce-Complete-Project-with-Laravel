

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .title
        {
            color:white; 
            padding-top:25px; 
            font-size:25px
        }

        label
        {
            display: inline-block;
            width: 200px;


        }


    </style>
  </head>
  <body>
    
      <!-- partial -->
      @include('admin.sidebar')

      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">


                <h1 class="title">Add Product</h1>


                
                @if(Session::has('message'))
                    <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert" ></button>
                    {{Session::get('message')}}
                    </div>

                @endif



            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label>Product title</label>
                    <input style="color:black"; type="text" name="title"  placeholder="Enter product title" require="">
                </div>

                
                <div style="padding:15px;">
                    <label>Price</label>
                    <input style="color:black"; type="number" name="price"  placeholder="Enter the price" require="">
                </div>

                
                <div style="padding:15px;">
                    <label>Description</label>
                    <input style="color:black"; type="text" name="des"  placeholder="Give a description" require="">
                </div>

                
                <div style="padding:15px;">
                    <label>Quantity</label>
                    <input style="color:black"; type="text" name="quantity"  placeholder="Enter product quantity" require="">
                </div>

                
                <div style="padding:15px;">
                    
                    <input style="color:black"; type="file" name="file" >
                </div>

                
                <div style="padding:15px;">
                   <input style="color:black"; type="submit" class="btn btn-success" >
                </div>

            </form>

            </div>

        </div>
    
          <!-- partial -->
          @include('admin.script')
  </body>
</html>