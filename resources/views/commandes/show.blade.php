@extends('layout.layout')
@section('content')
    `<div class="container my-5">
        <h2>Liste des commandes</h2>
            <div class="row">
                @foreach($ligneCommandes as $produit)
                    <div class="shadow-sm p-3 mb-5 bg-body rounded col-md-4">
                        While shadows on components are disabled by default in Bootstrap and can be enabled via $enable-shadows,
                        you can also quickly add or remove a shadow with our box-shadow utility classes.
                        Includes support for .shadow-none and three default sizes (which have associated variables to match).
                    </div>
                @endforeach
            </div>

        <div>
@endsection
