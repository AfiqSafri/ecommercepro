<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style type="text/css">
   	
   	.title_deg
   	{
   		text-align: center;
   		font-size: 50px;
   		font font-weight: bold;
      padding-bottom: 30px;
   	}
    .table_deg
    {
      border: 2px solid white;
      text-align: center;
      width: 100%;
      margin: auto;
    }

    .th_deg
    {
      background-color: darkblue;
    }

    .img_size
    {
      width: 250px;
      height: 250px;
    }
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
        	<div class="content-wrapper">

        		<h1 class="title_deg">All Orders</h1>

        		<table class="table_deg">
        			
        			<tr class="th_deg">
        				<th>Name</th>
        				<th>Email</th>
                <th>Address</th>
        				<th>Phone</th>
        				<th>Products_Ttile</th>
        				<th>Quantity</th>
        				<th>Price</th>
        				<th>Payment Status</th>
        				<th>Delivery Status</th>
        				<th>Image</th>
        				

        			</tr>

              @foreach($order as $order)

              <tr>
                
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                 <td>{{$order->payment_status}}</td>
                  <td>{{$order->delivery_status}}</td>

                 <td><img class="img_size" src="/product/{{$order->image}}"></td> 
                   


              </tr>

              @endforeach

        		</table>
        		
        	</div>
        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

