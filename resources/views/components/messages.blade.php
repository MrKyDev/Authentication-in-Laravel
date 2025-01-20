@if (session()->has('message'))
    <div class="mt-10">
        <h1 class="text-xl text-green-700">{{ session('message') }}</h1>
    </div>
@endif
