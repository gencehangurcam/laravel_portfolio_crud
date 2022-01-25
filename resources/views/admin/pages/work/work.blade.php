@extends("admin.layouts.index")

@section('content0')
    @include("admin.pages.menu")
@endsection
@section('content')
    <!--Title-->
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section: Work</h2>

    <!--Card-->
    <div id='section4' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-12" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            <hr class="bg-gray-300 my-12">
        @endif
        <form action="{{ route('work.store') }}" method="POST">
            @csrf
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="competence">
                        Title
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="form-input block w-full focus:bg-white" id="title" type="string" name="title"
                        value="{{ old('title') }}">
                    <p class="py-2 text-sm text-gray-600">add title</p>
                </div>
            </div>
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="datum">
                        datum
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="form-input block w-full focus:bg-white" id="datum" type="string" name="datum"
                        value="{{ old('datum') }}">
                    <p class="py-2 text-sm text-gray-600">datum</p>
                </div>
            </div>
            <div class="md:flex mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="competence">
                        Photo
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="form-input block w-full focus:bg-white" id="chooseFile" type="file"
                        placeholder="Choose file" name="file">
                    <p class="py-2 text-sm text-gray-600">add photo</p>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-green-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
        <hr class="bg-gray-300 my-12">
        @if ($message = Session::get('warning'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-12" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr
                    class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Title</th>
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        datum</th>
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Actions</th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                @forelse ($work as $work)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                class="inline-block w-1/3 md:hidden font-bold">Title</span>{{ $work->title }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                class="inline-block w-1/3 md:hidden font-bold">datum</span>{{ $work->datum }}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                            <button>
                                <form action="{{ route('work.destroy', $work->id) }}" method="Post">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                        class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Delete</button>
                                </form>
                            </button>
                            <button
                                class="bg-yellow-700 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"
                                class="btn btn-success">
                                <a href="{{ route('work.edit', $work->id) }}">Edit</a>
                            </button>
                        </td>
                    </tr>
                @empty
                    <p>please add work</p>
                @endforelse
            </tbody>
        </table>

    </div>
    <!--/Card-->
@endsection
