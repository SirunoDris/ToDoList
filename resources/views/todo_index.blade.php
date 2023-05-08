<x-app-layout>

    <div class="flex flex-col justify-center mt-10 mx-20">

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ToDo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Delete
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tareas as $tarea)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $tarea->tarea }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $tarea->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modaldeletetodo" data-modal-toggle="modaldeletetodo" class="material-icons">delete</button>
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="modaledittodo" data-modal-toggle="modaledittodo" class="material-icons">edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <button data-modal-target="modalcreatetodo" data-modal-toggle="modalcreatetodo" class=" w-25 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Create ToDo
        </button>
        @include('modalcreatetodo')
        @include('modaledittodo')
        @include('modaldeletetodo')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</x-app-layout>