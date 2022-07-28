@extends('layout.layout')
@section('content')
`<div class="container my-5">
    <h2>Liste des commandes</h2>
    <table class="table" data-toggle="table" data-search="true" data-show-columns="true" data-pagination="true">
        <thead class="">
        <tr>
            <th scope="col">NumCommande</th>
            <th scope="col">NumFournisseur</th>
            <th scope="col">Fournisseur</th>
            <th scope="col">TotalHT</th>
            <th scope="col">TotalTTC</th>
            <th scope="col">DateModif</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($commandes as $cdef)
            <tr>
                <th scope="row">{{$cdef->NumCommande}}</th>
                <th scope="row">{{$cdef->NumFournisseur}}</th>
                <th scope="row">{{$cdef->Nom}}</th>
                <th scope="row">{{$cdef->TotalHT}}</th>
                <th scope="row">{{$cdef->TotalTTC}}</th>
                <th scope="row">{{date('d/m/Y',strtotime($cdef->DateModif))}}</th>
                <th scope="row">
                    <a href="{{route('commande.show',['id'=>$cdef->NumCommande])}}">
                        <i class="bi bi-eye text-info fs-2">detail</i>
                    </a>
                </th>
                <th scope="row">
                    <a href="{{route('commande.show',['id'=>$cdef->NumCommande])}}">
                        <i class="bi bi-eye text-warning fs-2">Update</i>
                    </a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
@endsection
