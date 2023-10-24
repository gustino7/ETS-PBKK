<x-app-layout>
    <x-slot name="title">
        Form
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    @if (session('status'))
        <div class="bg-green-400">
            <div class="mx-auto w-[40%] text-2xl text-center">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <form method="POST" action="/form" enctype="multipart/form-data">
        @csrf
        <div class="py-12">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="my-2">
                            <x-input-label for="name" :value="__('Nama Barang')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="jenis" :value="__('Jenis Barang')" />
                            <select name="jenis" id="jenis" required>
                                <option value="jenis1">jenis1</option>
                                <option value="jenis2">jenis2</option>
                                <option value="jenis3">jenis3</option>
                                <option value="jenis4">jenis4</option>
                            </select>
                            <x-input-error :messages="$errors->get('jenis')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="kondisi" :value="__('Kondisi Product')" />
                            <select name="kondisi" id="kondisi" required>
                                <option value="baik">baik</option>
                                <option value="layak">layak</option>
                                <option value="rusak">rusak</option>
                              </select>
                            <x-input-error :messages="$errors->get('kondisi')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="keterangan" :value="__('Keterangan Barang')" />
                            <x-text-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" required autofocus/>
                            <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="kecacatan" :value="__('Kecacatan Barang')" />
                            <x-text-input id="kecacatan" class="block mt-1 w-full" type="text" name="kecacatan" autofocus/>
                            <x-input-error :messages="$errors->get('kecacatan')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="jumlah" :value="__('Jumlah Barang')" />
                            <x-text-input id="jumlah" class="block mt-1 w-full" type="text" name="jumlah" required autofocus/>
                            <x-input-error :messages="$errors->get('jumlah')" class="mt-2" />
                        </div>
                        <div class="my-2">
                            <x-input-label for="image" :value="__('Image')" />
                            <input type="file" name="image" id="image" required>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="mt-10 flex">
                            <x-primary-button class="mx-auto">
                                {{ __('Add') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
