@include('adminnav')
<head>
    
</head>
<main>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">

    <script src="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <a href="{{ route('category.create') }}" class="btn btn-primary">Add User</a> --}}


    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                {{-- <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    </div>
                </div> --}}
                <div class="card-body px-0 pb-2">
                    <h3 class="text-black text-center text-capitalize mt-1 ps-3">Users</h3>
                    <div class="table-responsive p-0">
                        <div class="table-responsive">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Profile</th>
                                        <th>FName</th>
                                        <th>LName</th>
                                        <th>Email</th>                                     
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($data as $item)
                                    <tr class="table-primary">
                                        <td scope="row">{{$loop->index + 1 }}</td>
                                        <td><img width="100" height="100" src="{{$item->profileimg}}"></td>
                                        <td>{{$item->fname}}</td>
                                        <td>{{$item->lname}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->password}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function confirmDelete(event) {
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit(); // Submit the form after confirmation
                }
            });
        }
    </script>
    @include('adminfooter')

    </html>
