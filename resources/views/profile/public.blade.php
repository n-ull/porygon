<x-app-layout>
        <div class="max-w-7xl mx-auto mt-8">
            <div class="flex grid-cols-2 justify-evenly">
                <div>
                    <img src="https://cdn.discordapp.com/avatars/244535132097216512/038c33defb945aff3bf5407a9ed3c0cb.png?size=128"
                    class="rounded-full shadow-md" />
                    <h1 class="text-center text-gray-600 dark:text-white">{{$user->name}}</h1>
                    <h3 class="text-secondary">&#64;{{$user->username}}</h3>
                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300 capitalize">{{$user->role}}</span>
                    <li class="list-none text-gray-400">
                        <ul><h3>Drafts</h3></ul>
                        <ul><h3>Badges</h3></ul>
                        <ul><h3>Pokémon</h3></ul>
                    </li>
                </div>
                <div class="w-8/12 space-y-2">
                    <p class="text-gray-400">Basic info</p>
                    <div class="bg-white dark:bg-gray-800 dark:text-gray-200 w-full shadow-sm rounded-md p-4"> This is an information box </div>
                    <p class="text-gray-400">Published Drafts</p>
                    <div class="bg-white dark:bg-gray-800 dark:text-gray-200 w-full shadow-sm rounded-md p-4">
                        @foreach ($user->drafts->where('published', true) as $draft)
                            <div>- {{$draft->title}}</div>
                        @endforeach
                        </div>
                    <p class="text-gray-400">Badges</p>
                    <div class="bg-white dark:bg-gray-800 dark:text-gray-200 w-full shadow-sm rounded-md p-4"> Potato chups </div>
                    <p class="text-gray-400">Pokémon Team</p>
                    <div class="bg-white dark:bg-gray-800 dark:text-gray-200 w-full shadow-sm rounded-md p-4"> Metapod </div>
                </div>
            </div>
        </div>
</x-app-layout>
