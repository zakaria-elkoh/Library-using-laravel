
@include('layouts.header')
@include('layouts.nav')

<header class="bg-[#333] text-white pt-20">
    <div class="max-w-screen-xl py-40 px-6 mx-auto">
        <div class="text">
            <h1 class="font-serif font-bold text-6xl">Stay Curious.</h1> 
            <p class="my-9 text-xl text-gray-300">Discover stories, thinking, and expertise from <br>  writers on any topic.</p>
            <a href="#" class="text-white bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-lg px-8 py-3 me-2 mb-2">Become a writer</a>
        </div>
    </div>
</header>


<section class="books py-16">
    <div class="container mx-auto">
        <h1 class="text-white text-4xl font-bold mb-7">Current Books:</h1>
        <div class="books-wrapper grid grid-cols-3 gap-6">

            @foreach ($books as $book)
                <div  class="book flex flex-col items-center bg-[#333] border border-gray-600 rounded-lg shadow md:flex-row md:max-w-xl">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('images/book-1.png')}}" alt="img">
                    <div class="text-white flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight">{{$book->title}} | {{$book->publication_year}}</h5>
                        <p class="mb-3 font-normal text-gray-200">{{$book->description}}</p>
                        <ul class="flex text-sm">
                            <li class="me-2">
                                    <span class="text-xl font-bold text-gray-200">{{$book->total_copies}}</span>
                                    <span class="text-gray-400">Total</span>
                            </li>
                            <li>
                                    <span class="text-xl font-bold text-gray-200">{{$book->available_copies}}</span>
                                    <span class="text-gray-400">Available</span>
                            </li>
                        </ul>
                        <a href="#" class="text-white w-fit ms-auto mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Order Now</a>
                    </div>
                </div>                
            @endforeach

        </div>
    </div>
</section>

@include('layouts.footer')