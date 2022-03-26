<x-guest-layout>

    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
          <header class="flex justify-between items-center py-4 md:py-8 mb-8 md:mb-12 xl:mb-16">
            <!-- logo - start -->
            <a href="/" class="inline-flex items-center text-black-800 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo">
              {{-- <svg width="95" height="94" viewBox="0 0 95 94" class="w-6 h-auto text-indigo-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M96 0V47L48 94H0V47L48 0H96Z" />
              </svg> --}}
              <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
              Sympathy
            </a>
            <!-- logo - end -->

          </header>

          <section class="flex flex-col lg:flex-row justify-between gap-6 sm:gap-10 md:gap-16">
            <!-- content - start -->
            <div class="xl:w-5/12 flex flex-col justify-center sm:text-center lg:text-left lg:py-12 xl:py-24">
              <p class="text-indigo-500 md:text-lg xl:text-xl font-semibold mb-4 md:mb-6">Welcome to kurauchi's Website!</p>

              <h1 class="text-black-800 text-4xl sm:text-5xl md:text-6xl font-bold mb-8 md:mb-12">Revolutionary way to build the web</h1>

              <p class="lg:w-4/5 text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random.</p>

              <div class="flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5">
                <a href="{{route('login')}}" class="btnset-login">ログイン</a>
                <a href="{{ route('register') }}" class="btnset-register">登録</a>
              </div>

              <div class="mt-4">
                <a href="{{route('contact.create')}}" class="text-gray-500">お問い合わせ</a>
              </div>

            </div>
            <!-- content - end -->

            <!-- image - start -->
            <div class="xl:w-5/12 h-48 lg:h-auto bg-gray-100 overflow-hidden shadow-lg rounded-lg">
              <img src="https://images.unsplash.com/photo-1618004912476-29818d81ae2e?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Fakurian Design" class="w-full h-full object-cover object-center" />
            </div>
            <!-- image - end -->
          </section>


        </div>
      </div>

</x-guest-layout>
