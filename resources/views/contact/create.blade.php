<x-guest-layout>

    <div class="bg-white flex flex-col py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
          <!-- text - start -->
          <div class="mb-10 md:mb-16">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Contact us</h2>

            <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <x-message :message="session('message')" />
          </div>
          <!-- text - end -->

          <!-- form - start -->
          <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data" class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
            @csrf
            <div>
              <label for="name" class="inline-block text-gray-800 text-sm sm:text-base mb-2">お名前*</label>
              <input name="name" id="name" value="{{old('name')}}" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
            </div>

            <div class="sm:col-span-2">
              <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">メールアドレス*</label>
              <input name="email" id="email" value="{{old('email')}}" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
            </div>

            <div class="sm:col-span-2">
              <label for="title" class="inline-block text-gray-800 text-sm sm:text-base mb-2">件名*</label>
              <input name="title" id="title" value="{{old('title')}}" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
            </div>

            <div class="sm:col-span-2">
              <label for="body" class="inline-block text-gray-800 text-sm sm:text-base mb-2">本文*</label>
              <textarea name="body" id="body" value="{{old('body')}}" class="w-full h-64 bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
            </div>

            <div class="sm:col-span-2 flex justify-between items-center">
              <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Send</button>

              <span class="text-gray-500 text-sm">*Required</span>
            </div>

            <p class="text-gray-400 text-xs">By signing up to our newsletter you agree to our <a href="#" class="hover:text-indigo-500 active:text-indigo-600 underline transition duration-100">Privacy Policy</a>.</p>
          </form>
          <!-- form - end -->
        </div>
      </div>
</x-guest-layout>
