@extends('partials.app')

@section('content')
    <div class="container mx-auto px-5 lg:px-0">
        <div class="flex flex-col h-screen justify-center">
            <div class="flex justify-center">
                <div class="p-6 bg-white rounded-lg
                border border-grey-400 lg:px-20 lg:py-16 lg:w-3/5">
                    <h2 class="text-3xl text-grey-700 font-bold mb-8">Stats for your link</h2>
                    <div class="flex flex-row justify-between items-center mt-4">
                        <p class="text-grey-500 text-base">Short URL: <br>
                            <a class="font-bold" href="{{ $link->fullPath() }}" target="_blank">{{ $link->fullPath() }}</a>
                        </p>
                        <p class="text-grey-500 text-base">Long URL: <br>
                            <a class="font-bold" href="{{ $link->url }}">{{ Illuminate\Support\Str::limit($link->url, 30, '...') }}</a>
                        </p>
                        <p class="text-grey-500 text-base">Hits: <br><span class="font-bold">{{ $link->hits }}</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
