@include('adminnav')


<div class="row justify-content-center pt-5">

    <div class="col-6">
        <h1>Update Brand</h1>
        <form action="{{ route('category.update',$category->_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <input type="text" value="{{$category->Category_name}}" class="form-control" name="Category_name" placeholder="Category Name">
                <span>
                    @error('Category_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <input type="file" class="form-control" name="Image">
                <span>
                    @error('Image')
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
