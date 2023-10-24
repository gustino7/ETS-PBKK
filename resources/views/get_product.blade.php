<x-app-layout>
    <x-slot name="title">
        Form
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Get All Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto border-slate-500 w-full text-center">
                        <thead class="border-collapse border border-slate-500">
                            <tr>
                                <th class="border border-slate-600">No</th>
                                <th class="border border-slate-600">Name</th>
                                <th class="border border-slate-600">Jenis</th>
                                <th class="border border-slate-600">Kondisi</th>
                                <th class="border border-slate-600">Keterangan</th>
                                <th class="border border-slate-600">Kecacatan</th>
                                <th class="border border-slate-600">Jumlah</th>
                                <th class="border border-slate-600">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $row)
                                <tr>
                                    <th class="border border-slate-700">{{ $loop -> iteration }}</th>
                                    <td class="border border-slate-700">{{ $row -> name }}</td>
                                    <td class="border border-slate-700">{{ $row -> jenis }}</td>
                                    <td class="border border-slate-700">{{ $row -> kondisi }}</td>
                                    <td class="border border-slate-700">{{ $row -> keterangan }}</td>
                                    <td class="border border-slate-700">{{ $row -> kecacatan }}</td>
                                    <td class="border border-slate-700">{{ $row -> jumlah }}</td>
                                    <td class="border border-slate-700"> <img src="storage/images/{{ $row->image }}" alt="barang" class="h-[4rem] mx-auto"></td>
                                    <td>
                                        <div role="group" class="my">
                                            <button type="button" class="mx-auto rounded-lg bg-blue-400 w-[50%]"><a href="/edit/{{ $row -> id }}" class="w-full flex justify-center items-center">Edit</a></button>
                                            <button type="button" class="mx-auto rounded-lg bg-red-500 w-[50%]"><a href="/delete/{{ $row -> id }}" class="w-full flex justify-center items-center">Delete</a></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
