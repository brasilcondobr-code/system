<!--
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
-->

@extends('layouts.adminlte')

{{-- Define o título da página --}}
@section('title', 'Dashboard Principal')

{{-- Define o título exibido no cabeçalho do conteúdo --}}
@section('page_title', 'Painel de Controle')

{{-- Define o conteúdo principal da página --}}
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="m-0">Bem-vindo(a) ao Brasil Condo!</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Você está logado(a). Este é o painel de controle principal do sistema.
                    </p>
                    <a href="#" class="btn btn-primary">Ver Módulos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
