@extends('base')

@section('title', 'facturation2')

@section('content')

@include('script')

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Facture N° @php
                echo("Fa/");
                echo date("d/m/Y");
                @endphp</h3>
            </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form action="{{ route("app_facturation2")}}" method="POST" id="monFormulaire">

            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label for="destinataire">Nom</label>
                        <input type="text" class="form-control" name="Nom" id="nom" placeholder="Destinataire">
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
                </div>

                <div class="form-group">
                    <label for="pays">Pays</label>
                    <input type="text" class="form-control" name="pays" id="pays" placeholder="Pays">
                </div>

                <div class="form-group">
                    <label for="tel">Telephone</label>
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="Telephone">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                     <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>

                    <h2><center>Article</center></h2>

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><span class="badge badge-primary">1</span></h3>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <div class="form-group">
                                <label for="Designation">Designation</label>
                                <input type="text" class="form-control" id="Designation" name="designation" placeholder="Designation">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <label for="Quantite">Quantité</label>
                                <input type="number" class="form-control" name="quantite" placeholder="0">
                            </div>


                            <div class="col-6">
                                <label for="prix_unitaire">Prix Unitaire</label>
                                <input type="number" class="form-control" name="prix_unitaire" placeholder="0">
                            </div>
                        </div>

                        <div class="row">

                            {{-- <div class="col-6">
                            <label for="Montant">Montant (TTC)</label>
                            <input type="number" class="form-control" name="montant" id="Montant" placeholder="0">
                            </div> --}}

                            <label for="Acompte">Acompte</label>
                            <input type="number" class="form-control" name="acompte" id="Acompte" placeholder="0">

                            {{-- <div class="col-6">
                            <label for="reste">Reste</label>
                            <input type="number" class="form-control" name="reste" id="reste" placeholder="0">
                            </div> --}}

                        </div>
                    </div>



                        <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" >Ajouter une ligne</button>
                        <button  class="btn btn-success" style="float: right;width:200px" id="btn">Valider</button>
                    </div>
        </form>
    </div>
    <div class="col-md-2"></div>
    </div>
{{--
    <div id="messageErreur" class="alert alert-warning" role="alert"></div>


    <script >
        $(document).ready(function(){
            $('#btn').on('click', function(event){
                event.preventDefault();

                var nom = $('#nom').val();
                var adresse = $('#adresse').val();

                if (nom === '' || adresse === '') {
                    $('#messageErreur').text(' Veillez remplir tous les champs!');
                } else {
                    $('#messageErreur').text('');
                    $('monFormulaire').submit();
                }
            })
        });

    </script>--}}

@include('script')

@endsection
