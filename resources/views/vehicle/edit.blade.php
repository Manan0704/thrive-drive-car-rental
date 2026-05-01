@include('adminnav')

<div class="row justify-content-center pt-5">

    <div class="col-6">
        <h1>Edit Vehicle</h1>
        <form action="{{ route('vehicle.update',$vehicle->_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <input type="text" class="form-control" name="vehicle_name" value="{{$vehicle->vehicle_name}}" placeholder="Vehicle Name">
                <span>
                    
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
                <textarea style="height: 80px;" class="form-control" id="exampleFormControlTextarea1" name="vehicle_desc" placeholder="Vehicle Description" rows="3">{{$vehicle->vehicle_desc}}</textarea>
                <span>
                    @error('vehicle_desc')
                        {{ $message }}
                    @enderror
                </span>  
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="product_pic">
                <span>
                    @error('product_pic')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" value="{{$vehicle->price}}" name="price" placeholder="Price">
                <span>
                    @error('price')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="fuel_type" value="{{$vehicle->fuel_type}}" placeholder="Fuel Type">
                <span>
                    @error('fuel_type')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="color" value="{{$vehicle->color}}" placeholder="Color">
                <span>
                    @error('color')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="vehicle_type" value="{{$vehicle->vehicle_type}}" placeholder="Vehicle Type">
                <span>
                    @error('vehicle_type')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="number" min="2" max="8" class="form-control" name="seater" value="{{$vehicle->seater}}" placeholder="Seater">
                <span>
                    @error('seater')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="engine" value="{{$vehicle->engine}}" placeholder="Engine Info">
                <span>
                    @error('engine')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3" style="padding-left:35%;">
                <button type="submit" class="btn bg-primary text-white">Update</button>
            </div>

        </form>
    </div>
</div>


@include('adminfooter')
