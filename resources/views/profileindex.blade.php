@include('header')
@php
  $user=session()->get('user');
@endphp

<div class="lg:col-span-1">
  <div class="p-6 rounded-lg border border-default-200">
    <img src="{{$user->profileimg}}" alt="" class="w-24 mx-auto rounded-full p-1 border-2 border-dashed border-default-300 bg-default-100">
    <h4 class="mb-1 mt-3 text-lg text-default-900 text-center">{{$user->fname}}</h4>
    <p class="text-default-600 text-center mb-4">{{$user->role}}</p>

    <div class="flex items-center justify-center gap-2 mb-3">
      <a href="/profileupdate" class="py-1.5 px-4 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 text-default-900 rounded"> Edit</a>
      {{-- <button  type="button" class="py-1.5 px-4 inline-flex items-center justify-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-red-500 hover:bg-red-600 border-red-500 hover:border-red-600 text-white rounded"> Delete</button> --}}
    </div>

    {{-- <div class="p-6 space-y-6">
      <div class="flex w-full items-center justify-between print:hidden">
        <h4 class="text-lg font-semibold text-default-900">Edit Customers</h4>
      </div>
      <div class="border border-default-200 rounded-lg">
        {{-- <div class="px-6 py-4 flex items-center justify-between gap-4">
          <h4 class="grow text-lg font-medium text-default-900">Edit Customers</h4>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
          <div class="grid lg:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium text-default-900 mb-2" for="firstName">First Name</label>
              <input id="firstName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your First Name" value="{{$user->fname}}">
            </div>

            <div>
              <label class="block text-sm font-medium text-default-900 mb-2" for="lastName">Last Name</label>
              <input id="lastName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Last Name" value="{{$user->lname}}">
            </div>

            <div>
              <label class="block text-sm font-medium text-default-900 mb-2" for="user_name">Role</label>
              <input id="user_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your User Name" value="{{$user->role}}">
            </div>

            <div>
              <label class="block text-sm font-medium text-default-900 mb-2" for="emailAddress">Email</label>
              <input id="emailAddress" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="email" placeholder="demoexample@mail.com" value="{{$user->email}}">
            </div>

            <div class="flex justify-end gap-4">
              <button class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                <i class="ti ti-arrow-back-up text-lg"></i>
                Undo
              </button>
              <button class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                <i class="ti ti-device-floppy text-lg"></i>
                Save
              </button>
            </div>
          </div>
        </div>
      </div>

    </div> --}}

    <div class="text-center mt-6">
      <div class="p-6 space-y-6">
        <div class="flex w-full items-center justify-between print:hidden">
          <h4 class="text-lg font-semibold text-default-900">Edit Profile</h4>
        </div>
        <div class="border border-default-200 rounded-lg">
          {{-- <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h4 class="grow text-lg font-medium text-default-900">Edit Customers</h4>
          </div> --}}
          <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid lg:grid-cols-2 gap-6 mb-6">
              <div>
                <label class="block text-sm font-medium text-default-900 mb-2 text-start" for="firstName">First Name</label>
                <input style="border: 1px soild black" id="firstName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your First Name" value="{{$user->fname}}">
              </div>
  
              <div>
                <label class="block text-sm font-medium text-default-900 mb-2 text-start" for="lastName">Last Name</label>
                <input style="border: 1px soild black" id="lastName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Last Name" value="{{$user->lname}}">
              </div>
  
              <div>
                <label class="block text-sm font-medium text-default-900 mb-2 text-start" for="user_name">Role</label>
                <input style="border: 1px soild black" id="user_name" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your User Name" value="{{$user->role}}">
              </div>
  
              <div>
                <label class="block text-sm font-medium text-default-900 mb-2 text-start" for="emailAddress">Email</label>
                <input style="border: 1px soild black" id="emailAddress" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="email" placeholder="demoexample@mail.com" value="{{$user->email}}">
              </div>
  
              <div class="flex justify-end gap-4">
                <button class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                  <i class="ti ti-arrow-back-up text-lg"></i>
                  Undo
                </button>
                <button class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                  <i class="ti ti-device-floppy text-lg"></i>
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <h4 class="text-base font-semibold text-default-900 uppercase mb-2.5">About Me :</h4>
      <p class="text-default-600 mb-6">
        Hi I'm Mary Gutierrez,has been the industry's standard dummy text ever since the
        1500s, when an unknown printer took a galley of type.
      </p> --}}
      <p class="text-default-600 mb-3"><b class="text-default-700">Full Name :</b> <span class="ms-2">{{$user->fname}} {{$user->lname}}</span></p>

      {{-- <p class="text-default-600 mb-3"><b class="text-default-700">Mobile :</b><span class="ms-2">(123) 123 1234</span></p> --}}

      <p class="text-default-600 mb-3"><b class="text-default-700">Email :</b> <span class="ms-2 ">{{$user->email}}</span></p>
    </div>
  </div>
</div>

@include('footer')