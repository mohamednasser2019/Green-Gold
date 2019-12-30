
<!-- 
                    <h2>اسم المنتج <br> {{ $data->product_name}}</h2> 
                   <p>التقييم<br>{{$data->usage_rates}}</p>   

                  <p>فوائد الاستخدام<br>{{$data->benefits_of_use}}</i></p> 
                  <p>وصف المنتج<br>{{$data->aboutProduct}}></i></p> 

                  <img src="{{asset('public/uploads/Products_Images/'.$data->product_img)}}" alt="" width="50%">                     -->
                

                  <ul>
  <li data-animal-type="">اسم المنتج <br> {{ $data->product_name}}</li>
  <li data-animal-type="">التقييم<br>{{$data->usage_rates}}</li>
  <li data-animal-type="">فوائد الاستخدام<br>{{$data->benefits_of_use}}</li>
  <li data-animal-type="">وصف المنتج<br>{{$data->aboutProduct}}></li>

  <li data-animal-type=""> <img src="{{asset('public/uploads/Products_Images/'.$data->product_img)}}" alt="" width="50%"> </li>

</ul>






