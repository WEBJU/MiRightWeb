@include('inc.header')
<div class="flex items-center justify-center min-h-screen pt-[120px] pb-[120px]  lg:pt-[150px]">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class="flex justify-center">
      <img src="{{URL::asset('/img/logo_b.png')}}" alt="" class="rounded-full" style="width:100px; height:100px">
    </div>
    <h3 class="text-2xl font-bold text-center">Join us</h3>

    <form action="{{route('user.register')}}" method="post">

        @csrf
      <div class="mt-4">
        <div>
          <label class="block" for="Name">Name<label>
            <input type="text" placeholder="Name" name="name"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
          </div>
          <div class="mt-4">
            <label class="block" for="email">Email<label>
              <input type="text" placeholder="Email" name="email"
              class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
            </div>
            <div>
              <label class="block" for="Name">Username<label>
                <input type="text" placeholder="Username" name="username"
                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
              </div>
              <div class="mt-4">
                <label class="block">Password<label>
                  <input type="password" placeholder="Password" name="password"
                  class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                  <label class="block">Confirm Password<label>
                    <input type="password" placeholder="Password" name="confirm"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                  </div>
                  {{-- <span class="text-xs text-red-400">Password must be same!</span> --}}
                  <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-white btn_custom" type="submit">Create
                      Account</button>
                    </div>
                    <div class="mt-6 text-grey-dark">
                      Already have an account?
                      <a class="text_primary_color hover:underline" href="#">
                        Log in
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            @include('inc.footer')
