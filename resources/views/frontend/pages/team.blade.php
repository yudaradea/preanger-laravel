<x-frontend.layout-app>
    @section('title')
        | Team
    @endsection

    <x-frontend.title-overlay>
        <x-slot name="title">Team Preanger</x-slot>
        <x-slot name="breadcumb">Team</x-slot>
    </x-frontend.title-overlay>

    <x-frontend.team.team />
</x-frontend.layout-app>
