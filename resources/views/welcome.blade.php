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
            <div class="flex flex-col justify-center sm:text-center lg:text-left lg:py-12 xl:py-24">
              <img src="{{asset('storage/incredients/mail.jpg')}}" class="mx-auto mb-8" style="max-height:300px;">

              <h1 class="text-indigo-500 text-4xl sm:text-5xl md:text-6xl font-bold mb-8 md:mb-12">想いを伝えたい人はいますか？</h1>

              <p class="lg:w-4/5 text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">Sympathyは、人に想いを伝えるための場所です。とは言っても、伝える相手は、決して「いま」あなたが好意を抱いている相手や、「いま」一緒に暮らしている家族ではありません。<span class="font-bold">その方々には、ぜひとも直接、その想いを伝えてあげてください。</span></p>
              <p class="lg:w-4/5 font-bold text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">Sympathyが想定している「伝える相手」は、あなたの「過去」にゆかりのある方々です。</p>
              <p class="lg:w-4/5 text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">人は、自分が成長した時に、初めて自身の至らなさに気がつくことがあります。しかし、そのような場がいつでも用意されているわけではありません。</p>
              <p class="lg:w-4/5 text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">自分がそうしたくても、相手が同じ気持ちでいるとは限らないからです。</p>
              <p class="lg:w-4/5 font-bold text-gray-500 xl:text-lg leading-relaxed mb-8 md:mb-12">伝えたいけど、伝えられない。そんな、相手への言葉が、実際に伝わるその日まで、Sympathyは、その言葉をお預かりします。</p>
              <p class="lg:w-4/5 text-blue-800 xl:text-lg leading-relaxed">※新規登録をしなくても、下記のユーザー情報でログインが可能です。</p>
              <p class="lg:w-4/5 text-blue-800 xl:text-lg leading-relaxed">管理者 / 一般ユーザー</p>
              <p class="lg:w-4/5 text-blue-800 xl:text-lg leading-relaxed">メールアドレス：admin@example.com / guest@example.com</p>
              <p class="lg:w-4/5 text-blue-800 xl:text-lg leading-relaxed mb-8 md:mb-12">パスワード：00000000 / 00000000</p>

              <div class="flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-2.5">
                <a href="{{route('login')}}" class="btnset-login">ログイン</a>
                <a href="{{ route('register') }}" class="btnset-register">登録</a>
              </div>

              <div class="mt-4">
                <a href="{{route('contact.create')}}" class="text-gray-500">お問い合わせ</a>
              </div>

            </div>
            <!-- content - end -->

          </section>


        </div>
      </div>

</x-guest-layout>
