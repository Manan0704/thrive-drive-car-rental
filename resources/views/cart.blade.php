{{-- @include('header1')

<section>
    <div class="container mt-5">
        <h1 class="text-center">🛒 Booking Cart</h1>
        <hr>

        <div class="row">
            <!-- Cart Items -->
            <div class="col-md-8">
                <table class="table table-hover text-center">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Pick-up Date</th>
                            <th>Drop-off Date</th>
                            <th>Days</th>
                            <th>Price Per Day</th>
                            <th>Total Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($data) > 0)
                            @foreach ($data as $item)
                                <tr>
                                    <td class="align-middle">{{ $item->pname }}</td>
                                    <td class="align-middle">
                                        <img src="{{ $item->ppic }}" alt="Product Image" class="img-fluid rounded" style="width: 80px; height: 80px;">
                                    </td>
                                    <td class="align-middle">
                                        <input type="date" class="form-control pickupdate" name="pickupdate" value="{{ $item->pickupdate }}" data-id="{{ $item->_id }}">
                                    </td>
                                    <td class="align-middle">
                                        <input type="date" class="form-control endofdate" name="endofdate" value="{{ $item->endofdate }}" data-id="{{ $item->_id }}">
                                    </td>
                                    <td class="align-middle days">{{ $item->numofdays }}</td>
                                    <td class="align-middle">₹ {{ $item->price }}</td>
                                    <td class="align-middle total">₹ {{ $item->total }}</td>
                                    <td class="align-middle">
                                        <a href="/remove/{{ $item->_id }}" class="btn btn-sm btn-danger">
                                            ❌ Remove
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center text-muted">
                                    <h5>Your cart is empty.</h5>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <!-- Summary Section -->
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center">💰 Total Amount</h4>
                        <hr>
                        <h3 class="text-center" id="totalPayable">₹ {{ $total }}</h3>
                    </div>
                </div>

                @if(count($data) > 0)
                    <div class="d-grid gap-2 mt-3">
                        <a href="/confirm" class="btn btn-lg btn-success">
                            ✅ Confirm Order
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- JavaScript to Calculate Days & Update Total -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    function calculateTotal() {
        let totalAmount = 0;

        document.querySelectorAll("tbody tr").forEach(row => {
            let pickupdate = row.querySelector(".pickupdate").value;
            let endofdate = row.querySelector(".endofdate").value;
            let pricePerDay = parseFloat(row.querySelector("td:nth-child(6)").innerText.replace("₹", ""));
            
            if (pickupdate && endofdate) {
                let startDate = new Date(pickupdate);
                let endDate = new Date(endofdate);
                let timeDiff = endDate - startDate;
                let days = Math.max(1, Math.ceil(timeDiff / (1000 * 60 * 60 * 24))); // Ensure at least 1 day
                
                row.querySelector(".days").innerText = days;
                let total = days * pricePerDay;
                row.querySelector(".total").innerText = "₹ " + total.toFixed(2);
                
                totalAmount += total;
            }
        });

        document.getElementById("totalPayable").innerText = "₹ " + totalAmount.toFixed(2);
    }

    document.querySelectorAll(".pickupdate, .endofdate").forEach(input => {
        input.addEventListener("change", calculateTotal);
    });

    calculateTotal();
});
</script>

@include('footer')
 --}}

 @include('header1')

 <section>
     <div class="container mt-5">
         <div class="text-center mb-4">
             <h1 class="fw-bold text-dark">🛒 Your Booking Cart</h1>
             <p class="text-muted">Review and manage your bookings</p>
             <hr class="w-50 mx-auto">
         </div>
 
         <div class="row">
             <!-- Cart Items -->
             <div class="col-lg-8 mb-4">
                 <div class="card shadow-sm border-0">
                     <div class="card-body p-4">
                         <div class="table-responsive">
                             <table class="table table-borderless align-middle text-center">
                                 <thead class="bg-dark text-white rounded">
                                     <tr>
                                         <th>Name</th>
                                         <th>Image</th>
                                         <th>Pick-up</th>
                                         <th>Drop-off</th>
                                         <th>Days</th>
                                         <th>Price/Day</th>
                                         <th>Total</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @if(count($data) > 0)
                                        @foreach ($data as $item)
                                            <tr class="bg-light">
                                                <td class="fw-bold">{{ $item->pname }}</td>
                                                <td>
                                                    <img src="{{ $item->ppic }}" alt="Product" class="rounded-circle shadow" style="width: 70px; height: 70px;">
                                                </td>
                                                <td>
                                                    <input type="date" class="form-control pickupdate" name="pickupdate" value="{{ $item->pickupdate }}" data-id="{{ $item->_id }}">
                                                </td>
                                                <td>
                                                    <input type="date" class="form-control endofdate" name="endofdate" value="{{ $item->endofdate }}" data-id="{{ $item->_id }}">
                                                </td>
                                                <td class="days fw-bold">{{ $item->numofdays }}</td>
                                                <td class="text-success">₹ {{ $item->price }}</td>
                                                <td class="total text-danger">₹ {{ $item->total }}</td>
                                                <td>
                                                    <a href="/remove/{{ $item->_id }}" class="btn btn-outline-danger btn-sm rounded-pill">❌</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                     @else
                                        <tr>
                                            <td colspan="8" class="text-center text-muted py-4">
                                                <h5>No items in the cart.</h5>
                                            </td>
                                        </tr>
                                     @endif
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
 
            <!-- Summary Section -->
            <div class="col-lg-4">
                <div class="card shadow-lg border-0 text-center">
                    <div class="card-body">
                        <h4 class="fw-bold">💰 Total Amount</h4>
                        <hr>
                        <h3 id="totalPayable" class="text-primary fw-bold">₹ {{ $total }}</h3>
                    </div>
                </div>
                 
                 @if(count($data) > 0)
                    <div class="d-grid gap-2 mt-3">
                        <button id="rzp-button" class="btn btn-lg btn-warning shadow-sm fw-bold">💳 Pay Now</button>
                    </div>
                
                
                    {{-- <div class="d-grid gap-2 mt-3">
                        <a href="{{ route('razorpay.payment') }}" class="btn btn-lg btn-warning shadow-sm fw-bold">✅ Confirm Booking</a>
                    </div> --}}
                 @endif
            </div>
         </div>
     </div>
 </section>
 
 <script>
 document.addEventListener("DOMContentLoaded", function() {
     function calculateTotal() {
         let totalAmount = 0;
         document.querySelectorAll("tbody tr").forEach(row => {
             let pickupdate = row.querySelector(".pickupdate").value;
             let endofdate = row.querySelector(".endofdate").value;
             let pricePerDay = parseFloat(row.querySelector("td:nth-child(6)").innerText.replace("₹", ""));
             
             if (pickupdate && endofdate) {
                 let startDate = new Date(pickupdate);
                 let endDate = new Date(endofdate);
                 let days = Math.max(1, Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24)));
                 
                 row.querySelector(".days").innerText = days;
                 let total = days * pricePerDay;
                 row.querySelector(".total").innerText = "₹ " + total.toFixed(2);
                 totalAmount += total;
             }
         });
         document.getElementById("totalPayable").innerText = "₹ " + totalAmount.toFixed(2);
     }
     document.querySelectorAll(".pickupdate, .endofdate").forEach(input => {
        input.addEventListener("change", calculateTotal);
     });
     calculateTotal();
 });
 </script>

 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 <script>
     document.getElementById('rzp-button').onclick = function(e) {
         e.preventDefault();
 
         let totalAmount = parseFloat(document.getElementById('totalPayable').innerText.replace('₹', '').trim()) * 100; // Razorpay works in paise
 
         var options = {
             "key": "{{ env('RAZORPAY_KEY') }}", // Replace with your Razorpay public key
             "amount": totalAmount,
             "currency": "INR",
             "name": "THRIVE DRIVE",
             "description": "Booking Payment",
             "handler": function (response){
                 // Handle success (save payment in backend)
                // var payid = response.razorpay_payment_id;
                //  alert('Payment Success !!' + payid);
                window.location.href = "/payment-success?payment_id=" + response.razorpay_payment_id;

             },
             "prefill": {
                 "name": "{{ Auth::user()->name ?? 'Customer' }}",
                 "email": "{{ Auth::user()->email ?? '' }}",
                 "contact": "{{ Auth::user()->phone ?? '' }}"
             },
             "theme": {
                 "color": "#3399cc"
             }
         };
         
         var rzp1 = new Razorpay(options);
         rzp1.open();
     }
 </script>
 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (Session::has('success'))
    
<script>
    Swal.fire({
        title: "Thank You!",
        text: "Order placed successfully!!!",
        imageUrl: "https://cdn.dribbble.com/users/583807/screenshots/5187139/v5.gif",
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: "Custom image"
    });

</script>
@endif

 
 @include('footer')
 
 