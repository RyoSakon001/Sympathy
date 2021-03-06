<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の個別表示
        </h2>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <x-message :message="session('message')" />

    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <div class="px-10 mt-4">

                <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer">
                        <a href="{{route('post.show', $post)}}">{{ $post->title }}</a>
                        </h1>
                        <hr class="w-full">
                    </div>

                    <div class="flex justify-end mt-4">
                        <a href="{{route('post.edit', $post)}}"><x-button class="bg-teal-600 float-right">編集</x-button></a>
                        <form method="post" action="{{route('post.destroy', $post)}}">
                            @csrf
                            @method('delete')
                            <x-button class="bg-red-600 float-right ml-4" onClick="return confirm('本当に削除しますか？');">削除</x-button>
                        </form>
                    </div>

                    <div>
                        <p class="mt-4 text-gray-600 py-4">{{$post->body}}</p>
                        @if ($post->image)
                            <img src="{{asset('storage/images/'.$post->image)}}" class="mx-auto" style="max-height:300px;">
                        @endif
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p> {{ $post->user->name }} • {{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>

                    @foreach ($post->comments as $comment)
                    <div class="bg-gray-50 w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500 mt-8">
                        {{$comment->body}}
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p> {{ $comment->user->name }} • {{$comment->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                    @endforeach

                    <div class="mt-4 mb-12">
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <textarea name="body" id="body" class="bg-white w-full px-4 py-4 mt-4 rounded-2xl shadow-lg hover:shadow-2xl transition duration-500" placeholder="コメントを入力してください" cols="30" rows="3">{{old('body')}}</textarea>
                            <x-button class="bg-blue-400 float-right mr-4 mb-12">コメントする</x-button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
