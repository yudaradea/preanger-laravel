<x-frontend.layout-app>
    @section('title')
        | About
    @endsection

    <x-frontend.title-overlay>
        <x-slot name="title">Contact Preanger</x-slot>
        <x-slot name="breadcumb">Contact</x-slot>
    </x-frontend.title-overlay>

    <x-frontend.contact.contact />
</x-frontend.layout-app>
