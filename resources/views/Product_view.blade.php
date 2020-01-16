<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta tags -->
    <meta charset="UTF-8">

    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="{{asset('public/Product_view/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="{{asset('public/Product_view/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="{{asset('public/Product_view/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Thasadith:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
  </head>
  <body>


    <!-- about -->
    <section class="about py-lg-4 py-md-3 py-sm-3 py-3" >
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row">
          <div class="col-lg-8 col-md-6 text-right about-two-grids">
            <h1 class="title  mb-md-4 mb-sm-3 mb-3" style="color:blue;">  <p> {{ $data->product_name}} </p> </h1>
            <div class="about-para-txt">
            <h2 style="color:green;">:التقييم</h2> <br><p>{{$data->usage_rates}} </p>
            <h2 style="color:green;">:فوائد الاستخدام </h2> <br><p>{{$data->benefits_of_use}} </p>
            <h2 style="color:green;">:وصف المنتج</h2> <br><p>{{$data->aboutProduct}} </p>

             <h2 style="color:green;">: العبوات </h2> <br> <p>{{$data->packaging}}  </p>


            </div>
            <div class="view-buttn mt-lg-5 mt-md-4 mt-3">

            </div>
          </div>
          <div class="col-lg-4 col-md-6 about-imgs-txt">
            <img src="{{asset('public/uploads/Products_Images/'.$data->product_img)}}" alt="news image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- //about -->

    <!--//advertise -->

  </body>
</html>




