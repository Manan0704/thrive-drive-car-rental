@include('adminnav')


<div class="row justify-content-center pt-5">

    <div class="col-6">
        <h1>Add Vehicle</h1>
        <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="vehicle_name" placeholder="Vehicle Name">
                <span class="text-danger">
                    @error('vehicle_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <select name="category" id="" class="form-control">
                        @foreach ($categories as $item)
                            <option value="{{$item->Category_name}}">{{$item->Category_name}}</option>
                        @endforeach
                </select>
        
        </div>
            <div class="mb-3">
                <textarea style="height: 80px;" class="form-control"  id="exampleFormControlTextarea1" name="vehicle_desc" placeholder="Vehicle Description" rows="3"></textarea>
                <span class="text-danger">
                    @error('vehicle_desc')
                        {{ $message }}
                    @enderror
                </span>  
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="vehicle_pic">
                <span class="text-danger">
                    @error('vehicle_pic')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="price" placeholder="Price">
                <span class="text-danger">
                    @error('price')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="fuel_type" placeholder="Fuel Type">
                <span class="text-danger">
                    @error('fuel_type')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="color" placeholder="Color">
                <span class="text-danger">
                    @error('color')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="vehicle_type" placeholder="Vehicle Type">
                <span class="text-danger">
                    @error('vehicle_type')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="number" min="2" max="8" class="form-control" name="seater" placeholder="Seater">
                <span class="text-danger">
                    @error('seater')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="engine" placeholder="Engine Info">
                <span class="text-danger">
                    @error('engine')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3" style="padding-left:35%;">
                <button type="submit" class="btn bg-primary text-white">Submit</button>
            </div>

        </form>
    </div>
</div>


@include('adminfooter')
