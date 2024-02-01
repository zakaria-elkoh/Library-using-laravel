
@include('layouts.header')
@include('layouts.nav')

<form class="p-6 bg-[#333] max-w-screen-md mx-auto mt-28 mb-10 rounded-3xl" action="{{route('book.update')}}" method="POST">

    @csrf
    <h2 class="text-3xl font-extrabold mb-5 text-center dark:text-white">Greate a Book:</h2>
    <div>
        <input type="hidden" name="id" value="{{$target_book->id}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div>
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title:</label>
        <input type="text" name="title" value="{{$target_book->title}}" id="title" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title" required>
    </div>
    <div>
        <label for="description" class="block mb-2 mt-5 text-sm font-medium text-gray-900 dark:text-white">Description:</label>
        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full h-48 text-sm bg-['#333'] text-gray-900 rounded-lg border border-gray-300" placeholder="Write your thoughts here...">
            {{$target_book->description}}
        </textarea>
    </div>
    <div>
        <label for="publication_year" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Publication year:</label>
        <input type="date" name="publication_year" value="{{$target_book->publication_year}}" id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Published year" required>
    </div>
    <div>
        <label for="author" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Author:</label>
        <input type="text" name="author" value="{{$target_book->author}}" id="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Author" required>
    </div>
    <div>
        <label for="total_copies" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Total Copies:</label>
        <input type="number" name="total_copies" value="{{$target_book->total_copies}}" id="total_copies" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Author" required>
    </div>
    <div>
        <label for="available_copies" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Available Copies:</label>
        <input type="number" name="available_copies" value="{{$target_book->available_copies}}" id="available_copies" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Author" required>
    </div>
    <button type="submit" name="update" class="text-white block mx-auto bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm py-2.5 px-10 mt-5">Update Book</button>
</form>
