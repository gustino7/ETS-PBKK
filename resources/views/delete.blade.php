<x-app-layout>
    <x-slot name="title">
        Delete Product
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Product') }}
        </h2>
    </x-slot>

    <form method="POST" action="/delete/{{ $product -> id }}" enctype="multipart/form-data">
        @csrf
        @method("DELETE")
        <div class="py-12">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900 w-[50%] mx-auto">
                        <div class="mb-4">
                            <h1 class="text-lg text-center">Are you sure?</h1>
                        </div>
                        <div class="flex justify-between items-center ">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete</button>
                            <a href="/getProduct" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
