@extends('layout')

@section('content')
    <div class="grid md:grid-cols-2">        
        <main class="px-16 py-6 pb-2 md:col-span-2">                 
            <div class="mt-8 grid md:grid-cols-3 gap-3">
            
                @foreach($posts as $post)
                  
                    <div class="card hover:shadow-xl bg-gray-200 dark:bg-slate-800">
                        <img src="../images/product2.png" alt="" class="w-225 h-225 sm:h-48 object-cover pl-32">
                        <div class="m-4">
                            <span class="info">{{ $post->name }}</span>
                            <span class="block">by {{ $post->user->name }}</span>
                        </div>

                        <div class="badge">
                            <svg class="w-6 inline-block" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            <div class="info inline">{{ $post->price }}</div>
                            <div class="inline pl-52"><a href="/show/{{ $post->id }}">...See Details</a></div>
                        </div>
                    </div>
                
                @endforeach

                        </div>
                        
                    </div>
                    
                </main>
        </div>

    <div class="flex justify-center p-3">
        {{ $posts->links() }}
    </div>

@endsection
    
    