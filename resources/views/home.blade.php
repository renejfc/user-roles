<x-app-layout>
        @guest
        <div class="flex flex-col items-center justify-center">
            <h1>You must be logged in to see the content 😥</h1>
            <h2>go ahead! it's free! 😁</h2>
        </div>
        @endguest
</x-app-layout>
