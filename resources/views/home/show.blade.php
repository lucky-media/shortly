@extends('partials.app')

@section('content')
    <div class="container mx-auto px-5 lg:px-0">
        <div class="flex flex-col h-screen justify-center">
               <div class="flex justify-center">
                   <div class="p-6 bg-white rounded-lg
                border border-grey-400 lg:px-20 lg:py-16 lg:w-3/5">
                       <h2 class="text-3xl text-center text-grey-700 font-bold mb-8">Success ! Your link is ready</h2>
                       <div class="flex flex-col lg:flex-row items-center w-full">
                           <div class="w-full h-12 rounded-lg bg-grey-100 p-4 inline-flex items-center mb-4 lg:h-16 lg:rounded-none lg:rounded-l-lg lg:w-4/5 lg:mb-0">
                               <svg class="fill-current h-8 w-8 text-grey-700 mr-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                   <path
                                       d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z" />
                               </svg>
                               <input
                                   id="url"
                                   class="appearance-none w-full bg-transparent h-16 placeholder-grey-700 text-grey-700 font-semibold outline-none"
                                   type="text" value="{{ $link->fullPath() }}" name="url">
                           </div>
                           <button id="copyBtn" class="w-full bg-green-400 cursor-pointer tracking-widest text-white text-base font-bold uppercase rounded-lg py-3 hover:bg-green-500 lg:rounded-none lg:rounded-r-lg lg:w-1/5 lg:h-16">
                               COPY
                           </button>
                       </div>
                       <div class="flex flex-col mt-4">
                           <p class="text-grey-500 text-base">Your long url is: <br>
                               <a class="font-bold" href="{{ $link->url }}">{{ $link->url }}</a>
                           </p>
                           <p class="text-grey-500 text-base mt-4">Track the <a class="no-underline font-bold" href="{{ $link->fullPath().'/stats' }}">total of clicks</a> in real-time from your shortened URL</p>
                       </div>
                   </div>
               </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        const copyBtn = document.querySelector('#copyBtn');
        const inputField = document.querySelector('#url');

        copyBtn.addEventListener("click", () => {

            inputField.select();
            inputField.setSelectionRange(0, 99999);

            document.execCommand("copy");

        })
    </script>
@endpush
