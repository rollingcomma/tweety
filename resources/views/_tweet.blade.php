<div class="flex p-4 {{$loop->last?'': 'border-b border-b-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{$tweet->user->path()}}">
        <img
            src={{$tweet->user->avatar}}
            alt=""
            width="50"
            height="50"
            class="rounded-full mr-2">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href=""{{$tweet->user->path()}}"">
                {{$tweet->user->name}}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{$tweet->body}}
        </p>

        <x-like-buttons :tweet="$tweet"/>

    </div>
</div>
