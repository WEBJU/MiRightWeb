@include('inc.header')
<div class="flex items-center justify-center min-h-screen  pt-[120px] pb-[120px]  lg:pt-[150px]">
  <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
    <div class="flex justify-center">
      <img src="{{URL::asset('/img/logo_b.png')}}" alt="" class="rounded-full" style="width:100px; height:100px">
    </div>
    <h3 class="text-2xl font-bold text-center">Sign in</h3>
    <form action="{{route('user.login')}}" method="post">
      @if (Session::has('success'))
        <div class="bg-teal-100 rounded-b px-4 py-4">
          <p>You have registered Successfully.Please login</p>
        </div>
      @endif
      @csrf
      <div class="mt-4">

        <div class="mt-4">
          <label class="block" for="email">Email<label>
            <input type="text" placeholder="Email" name="email"
            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
          </div>
          <div class="mt-4">
            <label class="block">Password<label>
              <input type="password" placeholder="Password" name="password"
              class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
            </div>

            <div class="flex">
              <button class="w-full px-6 py-2 mt-4 text-white btn_custom_sec  ">Login
              </button>
            </div>
            <div class="mt-6 text-grey-dark">
              New here?
              <a class="text_primary_color hover:underline" href="#">
                Create account
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
    @include('inc.footer')
