<x-frontend.layout-app>
    @section('title')
        | About
    @endsection

    <x-frontend.title-overlay>
        <x-slot name="title">About Preanger</x-slot>
        <x-slot name="breadcumb">About Us</x-slot>
    </x-frontend.title-overlay>

    <x-frontend.about.about class="bg-white" />

    <x-frontend.home.section-team class="bg-gray-100/80" />

    <x-frontend.home.section-faq class="bg-white" />
</x-frontend.layout-app>
