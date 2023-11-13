

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Facture</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/adminlte.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    </head>

    <body>

        <div class="container-fluid">

        <div class="row">

        <div class="col-md-2"></div>


        <div class="col-md-8">
        @if (isset($info2))

            <div class="card card-default" >

                <div class="car-body" >

                    <div class="row" class="">

                        <div class="col-md-4" style="padding-left: 80px">
                            <p>@php  echo date('d/m/Y') @endphp</p>
                            <br><br>
                            <p><strong>FACTURER A</strong></p>
                            <p>@php echo $info2["Nom"]; @endphp</p>
                            <p>@php echo $info2["adresse"]; @endphp</p>
                            <p>@php echo $info2["pays"]; @endphp</p>
                            <p>@php echo $info2["tel"]; @endphp</p>
                            <p>@php echo $info2["email"]; @endphp</p>
                        </div>

                        <div class="col-md-3">
                            <p>Facture N° @php
                                echo("Fa/");
                                echo date("d/m/Y"); @endphp
                            </p>
                        </div>



                        <div class="col-md-4">
                            <div>
                                <p><strong>FYTECH-GROUP</strong></p>
                                <p>NIF: 20002912125</p>
                                <p>STAT: 62021112018000180</p>
                                <p>RCS: 2019 A 00988</p>
                                <p><u>contact@fytech-group.mg</u></p>
                                <p><u>http://www.fytech-group.mg</u></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-1">
                            {{--  espace --}}
                        </div>

                        <div  class="col-md-8">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>DESIGNATION</th>
                                        <th>QTE</th>
                                        <th>PU</th>
                                        <th>MONTANT (TTC)</th>
                                        <th>ACOMPTE</th>
                                        <th>RESTE A PAYER</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>@php echo $info2["designation"]; @endphp</td>
                                        <td>@php echo $info2["quantite"]; @endphp</td>
                                        <td>@php echo $info2["prix_unitaire"]; @endphp</td>
                                        @php $montant =  $info2["quantite"]*$info2["prix_unitaire"]; @endphp
                                        <td>@php echo ($montant); @endphp</td>
                                        <td>@php echo $info2["acompte"]; @endphp</td>
                                        @php $reste= $montant - $info2["acompte"]; @endphp
                                        <td>@php echo $reste; @endphp</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div class="col-md-4">
                            {{--  espace --}}
                        </div>


                        <br>
                        <p></p><br>
                        <p></p><br>
                        <p></p><br>





                    </div>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <p><strong>Arrêté à la présente facture d'acompte à la somme de @php echo $info2["acompte"]." Ariary TTC";  @endphp</strong></p>
                        </div>
                        <div class="col-md-4"></div>
                        <p></p><br>
                        <p></p><br>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"  style="float: right">La Gérant(e)</div>
                        <p></p><br>
                        <p></p><br>
                    </div>
                </div>
            @endif



            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><button onclick="window.print()" class="btn btn-primary">Imprimer</button></div>
            <div class="col-md-4"></div>
            <p></p><br>
            <p></p><br>
        </div>

        @include('script')
    </body>
</html>




