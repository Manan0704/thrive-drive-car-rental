@include('adminnav')

<hr>
<h1> Bookings</h1>
<hr>
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        
    </div>
</div>
<table class="table table-striped col-6" >
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Username</th>
            <th>Pic</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Total amount</th>
        </tr>
    </thead>
    <tbody>

    @if($data->isEmpty())
        <tr>
            <td colspan="6">No bookings found.</td>
        </tr>
    @else
    @foreach ($data as $item)
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>{{$item->fname}}</td>
            <td><img src="{{$item->ppic}}" height="50" width="50" alt=""></td>
            <td>{{$item->pname}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->total}}</td>
        </tr>
    @endforeach
    @endif

    

    </tbody>
</table>

</div>

@include('adminfooter')