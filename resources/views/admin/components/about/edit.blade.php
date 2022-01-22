@extends("admin.layouts.index")


@section('content')
    <form {{ route('update', $about->id) }} method='POST' class="w-full max-w-sm">
        <div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class="w-full sm:max-w-md p-5 mx-auto">
                <h2 class="mb-12 text-center text-5xl font-extrabold">Modifie your level.</h2>
                @csrf
                @method("PUT")
                <div class="mb-4">
                    <label class="block mb-1" for="password">Level</label>
                    <input id="level" type="string" name="level"
                        class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
                </div>
                <div class="mt-6">
                    <button
                        class="w-full inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-red-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">
                        Change</button>
                </div>
                <div class="mt-6 text-center">
                    <a href="{{ route("admin") }}" class="underline">Cancel</a>
                </div>
    </form>
    </div>
    </div>


@endsection
