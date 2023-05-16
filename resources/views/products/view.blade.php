@extends('products/layout')

@section('content')
    <div>
        @if (session('status'))
            {{ session('status') }}
        @endif
    </div>

    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
    </div>
    
        @foreach($posts as $post)
        <div class="mid">
            <table>  
                <tr>
                    <td >
                        <span class="title">Product's Name: </span>
                    </td>
                    <td>
                        <span class="info">{{ $post->name }}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="details">Category:</span> 
                    </td>
                    <td>
                        <span class="info">{{ $post->category }}</span>
                    </td><br>
                </tr>
                <tr>
                    <td>
                        <span class="details">Price:</span> 
                    </td>
                    <td>
                        <span class="info">${{ $post->price }}</span>
                    </td><br>
                </tr>
                
                    <tr>
                        <td><a href="/show/{{ $post->id }}">Show Details</a></td>
                        <td></td>
                    </tr>
            </table>
        </div>
        @endforeach
    
        <div class="middle">
            {{ $posts->links() }}
        </div>
@endsection

