<x-app-layout>
        @guest
        <section class="flex flex-col items-center justify-center text-center">
            <h1>You must be logged in to see the content 😥</h1>
            <h2>go ahead! it's free! 😁</h2>
        </section>
        @endguest
</x-app-layout>
