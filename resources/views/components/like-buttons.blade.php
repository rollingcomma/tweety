 <div class="flex">
        <form method="POST" action="/tweets/{{$tweet->id}}/like">
            @csrf
            <button type="submit" class="flex text-xs text-gray-500">
                <div class="flex align-items-center {{$tweet->isLikedBy(current_user())? 'text-blue-500' :'text-gray-500' }} mr-3">
                    <svg  enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="mr-1 w-4">
                        <g id="Page-1", stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="m1.75 23h2.5c.965 0 1.75-.785 1.75-1.75v-11.5c0-.965-.785-1.75-1.75-1.75h-2.5c-.965 0-1.75.785-1.75 1.75v11.5c0 .965.785 1.75 1.75 1.75z"/>
                            </g>
                        </g>
                        <g id="Page-1", stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="m12.781.75c-1 0-1.5.5-1.5 3 0 2.376-2.301 4.288-3.781 5.273v12.388c1.601.741 4.806 1.839 9.781 1.839h1.6c1.95 0 3.61-1.4 3.94-3.32l1.12-6.5c.42-2.45-1.46-4.68-3.94-4.68h-4.72s.75-1.5.75-4c0-3-2.25-4-3.25-4z"/>
                            </g>
                        </g>
                    </svg>
                    {{$tweet->likes ?: 0}}
                </div>
            </button>
        </form>

        <form method="POST" action="/tweets/{{$tweet->id}}/like">
            @csrf
            @method('DELETE')
            <button type="submit" class="flex text-xs text-gray-500">
                <div class="flex items-center {{ $tweet->isDislikedBy(current_user())? 'text-blue-500' :'text-gray-500' }} ">

                <svg  enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="mr-1 w-4">
                <g id="Page-1", stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g class="fill-current">
                        <<path d="m22.25 1h-2.5c-.965 0-1.75.785-1.75 1.75v11.5c0 .965.785 1.75 1.75 1.75h2.5c.965 0 1.75-.785 1.75-1.75v-11.5c0-.965-.785-1.75-1.75-1.75z"/>
                    </g>
                </g>
                <g id="Page-1", stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g class="fill-current">
                        <path d="m5.119.75c-1.95 0-3.61 1.4-3.94 3.32l-1.12 6.5c-.42 2.45 1.46 4.68 3.94 4.68h4.72s-.75 1.5-.75 4c0 3 2.25 4 3.25 4s1.5-.5 1.5-3c0-2.376 2.301-4.288 3.781-5.273v-12.388c-1.601-.741-4.806-1.839-9.781-1.839z"/>
                    </g>
                </g>
            </svg>
                    {{$tweet->dislikes ?: 0}}
                </div>
            </button>
        </form>
 </div>
