<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container my-5">
    <div class="d-flex justify-content-center">
        <a style="color:#4ecdc4" class="btn fw-bold fs-4" href="http://127.0.0.1:8000/">All</a>
        <a style="color:#4ecdc4" class="btn fw-bold fs-4" href="{{route('Mouvement.add')}}}" >Add</a>
        @foreach($references as $reference)
            <a style="color:#4ecdc4" class="btn fw-bold fs-4" href="{{route('historique.getByReference',['ref'=>$reference->ref_mvt])}}">{{$reference->ref_mvt}}</a>
        @endforeach
    </div>
    <table class="table">
        <thead class="">
        <tr>
            <th scope="col">Libelle Produit</th>
            <th scope="col">Date Mvt</th>
            <th scope="col">Quantite</th>
            <th scope="col">Observations</th>
            <th scope="col">Entree</th>
            <th scope="col">type_mvt</th>
            <th scope="col">montant</th>
            <th scope="col">pmp</th>
            <th scope="col">PrixVente</th>
            <th scope="col">PrixAchat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mouvements as $mvt)
            <tr>
                <th scope="row">{{$mvt->LibProd}}</th>
                <th scope="row">{{date('d/m/Y',strtotime($mvt->date_mvt))}}</th>
                <th scope="row">{{$mvt->Quantite}}</th>
                <th scope="row">{{$mvt->Observations}}</th>
                <th scope="row">{{$mvt->entree}}</th>
                <th scope="row">{{$mvt->type_mvt}}</th>
                <th scope="row">{{$mvt->montant}}</th>
                <th scope="row">{{$mvt->pmp}}</th>
                <th scope="row">{{$mvt->PrixVente}}</th>
                <th scope="row">{{$mvt->PrixAchat}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
</body>
</html>
