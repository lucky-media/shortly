@extends('partials.app')

@section('content')
<div class="container mx-auto h-screen px-5 lg:px-0">
  <div class="flex flex-col justify-center lg:pt-40">
  <h1 class="text-4xl font-bold text-white text-center pt-16 pb-6 lg:text-5xl lg:pt-0">Anonymous URL Shortener</h1>
    <form>
    <div class="flex flex-col item-center p-6 justify-center bg-white rounded-lg border border-grey-400 lg:max-w-4xl lg:mx-auto lg:flex-row lg:p-16">
        <div class="w-full h-12 rounded-lg bg-grey-100 p-4 inline-flex items-center mb-4 lg:h-16 lg:rounded-none lg:rounded-l-lg lg:w-4/5 lg:mb-0">
            <svg class="fill-current h-8 w-8 text-grey-700 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"/></svg>
            <input
                class="appearance-none outline-none bg-transparent placeholder-grey-700 font-semibold"
                placeholder="Paste a long url" type="text">
        </div>
        <input type="submit" class="bg-blue-400 tracking-widest text-white text-base font-bold uppercase rounded-lg py-3 hover:bg-blue-500 lg:rounded-none lg:rounded-r-lg lg:w-1/5 lg:h-16" value="Shorten">
    </div>
</form>
  </div>
</div>
@endsection