<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order Confirmation</title>
    <!-- Include Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Jkt5A2CzTn2I6v3WO5kFaA8XJ6l/Jv2+1S5lg5wo5L1jE2E" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-left logo p-2 px-5"> <img src="https://greenic.lk/wp-content/uploads/2022/07/dfsfsfsf-1-e1657177598310.png" width="200"> </div>
                    <div class="card-header">
                        <h2><strong>Your Order Confirmed!</strong></h2>
                    </div>
                    <div class="card-body">
                        <p>Dear {{Auth::user()->fname}},</p> <!-- Added message -->
                        <p>Thank you for your order! We hope you enjoyed shopping with us.</p> <!-- Added message -->
                         
                        <!-- Order Item Summary Table -->
                        <h4>Order Item Summary</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <!-- Sample item 1 -->
                                   @php
                                       $total=300;
                                   @endphp
                                    @foreach ($carts as $cart) 
                                    
                                    <tr>
                                      <td>{{ $cart->name }}</td>
                                      <td>{{ $cart->quantity }}</td>
                                      <td>{{ $cart->discount }}</td>
                                      <td>{{ $cart->amount }}</td>
                                    </tr>
                                    @php
                                         $total = $total + $cart->amount ;
                                          
                                    @endphp
                                    @endforeach
                                    <tr>
                                        <td colspan="3">Shipping</td>
                                        <td>300</td>
                                      </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        <hr> <!-- Separate lines -->
                            <div class="py-2"> <span class="d-block text-muted">Total</span> <span>Rs. {{$total}}</span> </div>
                        <!-- End Order Item Summary Table -->
                        
                        <!-- Order Details -->
                        <h4>Order Details</h4>
                        <div class="order-details">
                             
                            <div class="py-2"> <span class="d-block text-muted">Payment - <strong>Cash on delivery</strong></span>
                            </div>
                            <div class="py-2"> <span class="d-block text-muted">Shipping Address</span>
                                <span>{{Auth::user()->address1}} , {{Auth::user()->address2}} , {{Auth::user()->address3}}</span> </div>
                            
                        </div>
                        <!-- End Order Details -->

                        <!-- Rest of the code remains the same -->

                    </div>
                    <div class="d-flex justify-content-between footer p-3"> 
                        <span>Need Help? Visit our 
                            <a href="https://greenic.lk/?page_id=1291"> help center</a>
                        </span> 
                        <span>{{ now()->format('Y-m-d') }}</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS via CDN (Optional, only if you need JavaScript functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js" integrity="sha384-kz9967jTSMp4Kd+aUEjzggN5HDlp4lY+pa5DFCE6Jx3mZmp72GO+coG5g6F5xjTHf" crossorigin="anonymous"></script>
</body>
</html>
