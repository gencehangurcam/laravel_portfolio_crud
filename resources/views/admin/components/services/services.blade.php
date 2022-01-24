<!--Title-->
<h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section: Services</h2>

<!--Card-->
<div id='section3' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
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
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="md:flex mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                    Title
                </label>
            </div>
            <div class="md:w-2/3">
                <input class="form-input block w-full focus:bg-white" id="title" type="string" name="title" value="" value="{{ old('title') }}">
                <p class="py-2 text-sm text-gray-600">services</p>
            </div>
        </div>

        <div class="md:flex mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-select">
                    Logo
                </label>
            </div>
            <div class="md:w-2/3">
                <select name="icone" class="form-select block w-full focus:bg-white" id="icone" type="string" value="{{ old('icone') }}"
                    name="icone">
                    <option value="Default">please choice</option>
                    <option value="A">camera</option>
                    <option value="B">code-working</option>
                    <option value="C">monitor</option>
                    <option value="D">paintbrush</option>
                    <option value="E">stats-bars</option>
                    <option value="F">android-phone-portrait</option>
                </select>

                <p class="py-2 text-sm text-gray-600">check manual</p>
            </div>
        </div>

        <div class="md:flex mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textarea">
                    Description
                </label>
            </div>
            <div class="md:w-2/3">
                <textarea class="form-textarea block w-full focus:bg-white" id="description" type="string"
                    name="description" value="" rows="8"></textarea>
                <p class="py-2 text-sm text-gray-600">description</p>
            </div>
        </div>

        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button
                    class="shadow bg-yellow-700 hover:bg-yellow-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
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
                    Description</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Actions</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @forelse ($service as $service)
                <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">Title</span>{{ $service->title }}
                    </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                            class="inline-block w-1/3 md:hidden font-bold">description</span>{{ $service->description }}
                    </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                        <button>
                            <form action="{{ route('services.destroy', $service->id) }}" method="Post">
                                @csrf
                                @method("DELETE")
                                <button
                                    class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Delete</button>
                            </form>
                        </button>
                        <button
                            class="bg-yellow-700 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"
                            class="btn btn-success">
                            <a href="{{ route('services.edit', $service->id) }}">Edit</a>
                        </button>
                    </td>
                </tr>
            @empty
                <p>please add services</p>
            @endforelse
        </tbody>
    </table>


</div>
<!--/Card-->

<!--divider-->
<hr class="bg-gray-300 my-12">
