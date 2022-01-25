@extends("admin.layouts.index")

@section('content0')
    @include("admin.pages.menu")
@endsection
@section('content')
    <!--Title-->
    <h2 class="font-sans font-bold break-normal text-gray-700 px-2 pb-8 text-xl">Section: Contact</h2>

    <!--Card-->
    <div id='section5' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <table class="min-w-full border-collapse block md:table my-12">
            <thead class="block md:table-header-group">
                <tr
                    class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Name</th>
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Subject</th>
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Actions</th>
                    <th
                        class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                        Show</th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                @forelse ($contact as $contact)
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                class="inline-block w-1/3 md:hidden font-bold">Name</span>{{ $contact->name }}
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                                class="inline-block w-1/3 md:hidden font-bold">Subject</span>{{ $contact->subject }}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                            <button>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="Post">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                        class="bg-red-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Delete</button>
                                </form>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <a href="{{ route('contact.show', $contact->id) }}"><button
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">more
                                    details</button>
                        </td>
                        <td>
                    </tr>
                @empty
                    <p>no messages</p>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
