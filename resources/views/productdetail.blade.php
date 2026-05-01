@include('header1')

<style>
    body {
        background-color: #f5f5f5;
    }

    .detail-container {
        padding: 50px 0;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .vehicle-img {
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .vehicle-img:hover {
        transform: scale(1.05);
    }

    .vehicle-title {
        font-size: 26px;
        font-weight: bold;
        color: #333;
    }

    .price {
        font-size: 24px;
        font-weight: bold;
        color: #fe5b29;
    }

    .description-card {
        margin-top: 30px;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .rent-btn {
        background-color: #fe5b29;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 5px;
        width: 100%;
        font-size: 18px;
        transition: 0.3s;
    }

    .rent-btn:hover {
        background-color: #d6451b;
    }

    .description-card h4 {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .description-card p {
        font-size: 16px;
        color: #333;
    }

    @media (max-width: 768px) {
        .detail-container {
            padding: 20px 0;
        }
    }
</style>

<div class="container detail-container">
    <div class="row">
        <!-- Left Side: Vehicle Image -->
        <div class="col-lg-5 col-md-6 mb-4">
            <div class="card p-3">
                <img src="{{ $vehicle->vehicle_pic }}" class="d-block w-100 vehicle-img" alt="{{ $vehicle->vehicle_name }}">
            </div>
        </div>

        <!-- Middle Section: Vehicle Details -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card p-4">
                <h2 class="vehicle-title">{{ $vehicle->vehicle_name }}</h2>
                <p class="price">₹{{ $vehicle->price }}/Day</p>

                <div class="mt-3">
                    <p><b>Category:</b> {{ $vehicle->category }}</p>
                    <p><b>Fuel Type:</b> {{ $vehicle->fuel_type }}</p>
                    <p><b>Seater:</b> {{ $vehicle->seater }}</p>
                    <p><b>Engine:</b> {{ $vehicle->engine }}</p>
                    <p><b>Vehicle Type:</b> {{ $vehicle->vehicle_type }}</p>
                    <p><b>Color:</b> {{ $vehicle->color }}</p>
                </div>

                <!-- Rent Button -->
                <a href="/addcart/{{$vehicle->_id}}"><button class="rent-btn mt-4">Rent This Vehicle</button></a>
            </div>
        </div>

        <!-- Description Section -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="row">
                <div>
                    <div class="description-card">
                        <h4>Description</h4>
                        <p>{{ $vehicle->vehicle_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

@include('footer')
