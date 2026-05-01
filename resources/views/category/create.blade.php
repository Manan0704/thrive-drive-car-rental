@include('adminnav')


<div class="row justify-content-center pt-5">

    <div class="col-6">
        <h1>Add Brand</h1>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="Category_name" placeholder="Category Name">
                <span class="text-danger">
                    @error('Category_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            

            <div class="mb-3">
                <input type="file" class="form-control" name="Image">
                <span class="text-danger">
                    @error('Image')
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
