
@extends('base')

@section('title', 'facturation2')

@section('content')

    @include('script')
        {{--<div class="container">
            <h1>Ajouter un champ d'input au click</h1>
            <div class="inputs">
            <input type="text" id="input">
            </div>
            <button class="btn">Ajouter un champs</button>
        </div>

        <form id="monFormulaire">
            <div class="container">
                <h1>Ajouter un champ d'input au click</h1>
                <div class="inputs">
                    <div class="field">
                        <input type="text" id="input">
                    </div>

                </div>

                <button class="btn" id="btn">Ajouter un champs</button>
            </div>
        </form>






                <script >
                    $(document).ready(function(){
                        let destination = document.querySelector('.inputs');
                        let btn = document.querySelector('.btn');
                        btn.addEventListener('click', addChamps);
                        let fields = {
                        values: [],
                        }

                        function addChamps(e){
                            e.preventDefault();
                            for (let i = 0, x=0; i< destination.childElementCount; i++) {
                                console.log(destination.children[i].children[0].value);

                                fields.values[i] = '<div class="field"><input type="text" id="input" ></div>';
                            }

                            fields.values[fields.values.length] = '<div class="field"><input type="text"  id="input"></div>';

                            destination.innerHTML = fields.values.join('\n');
                        }
                    });

                </script>--}}


                <h1>FYTECH group</h1>





    @include('script')

@endsection
