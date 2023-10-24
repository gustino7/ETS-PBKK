<x-app-layout>
    <x-slot name="title">
        Edit Product
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <form method="POST" action="/edit/{{ $product -> id }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="py-12">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="my-2">
                            <x-input-label for="name" :value="__('Nama Produk')" />
                            <input type="text" name="name" value="{{ $product->name }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="jenis" :value="__('Jenis Produk')" />
                            <input type="text" name="jenis" value="{{ $product->jenis }}">
                            <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="kondisi" :value="__('Kondisi Produk')" />
                            <input type="text" name="kondisi" value="{{ $product->kondisi }}">
                            <x-input-error :messages="$errors->get('kondisi')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="keterangan" :value="__('Keterangan Produk')" />
                            <input type="text" name="keterangan" value="{{ $product->keterangan }}">
                            <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="kecacatan" :value="__('Kecacatan Produk')" />
                            <input type="text" name="kecacatan" value="{{ $product->kecacatan }}">
                            <x-input-error :messages="$errors->get('kecacatan')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="jumlah" :value="__('Jumlah')" />
                            <input type="text" name="jumlah" value="{{ $product->jumlah }}">
                            <x-input-error :messages="$errors->get('jumlah')" class="mt-2" />
                        </div>
                        <div class="mt-10 flex">
                            <x-primary-button class="mx-auto">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
