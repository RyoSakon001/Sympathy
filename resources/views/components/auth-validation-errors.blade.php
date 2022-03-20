@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            {{-- $errorsは連想配列になっており、下記は最初のエラーがimageに関するものではない＝件名、本文でエラーとなっている --}}
            @if (empty($errors->first('image')))
                <li>画像ファイルがあれば、再度、選択してください。</li>
            @endif
        </ul>
    </div>
@endif
