<x-frontend.layout-app>
    @section('title')
        | Project
    @endsection

    <x-frontend.title-overlay>
        <x-slot name="title">Project Preanger</x-slot>
        <x-slot name="breadcumb">Program</x-slot>
    </x-frontend.title-overlay>

    <x-frontend.program.program />
</x-frontend.layout-app>
