/*
    Script pour la vérification de l'enregistrement des utilisateurs.
*/

$('#register-user').click(function(){
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var confirmation = $('#confirmation').val();
    var passwordLength = password.length;
    // var agreeTerms = $('#agreeTerms');



    if (firstname!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)) {
        $('#firstname').removeClass('is-invalid');
        $('#firstname').addClass('is-valid');
        $('#error-register-firstname').text('');

        if (lastname!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)) {
            $('#lastname').removeClass('is-invalid');
            $('#lastname').addClass('is-valid');
            $('#error-register-lastname').text('');

            if (email!= "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text('');

                if (passwordLength>=8) {
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#error-register-password').text('');

                    if (password === confirmation) {
                        $('#confirmation').removeClass('is-invalid');
                        $('#confirmation').addClass('is-valid');
                        $('#error-register-confirmation').text('');

                        //envoie de formulaire

                        // alert('data ok');

                        $('#form-register').submit();

                        var form_register = document.getElementById('form-register');
                        form_register.addEventListener('submit', function(event){
                            event.preventDefault();
                            window.location.href = 'facturation2';
                        })

                    } else{
                        $('#confirmation').addClass('is-invalid');
                        $('#confirmation').removeClass('is-valid');
                        $('#error-register-confirmation').text('le mot de passe doit être identique');
                    }

                } else{
                    $('#password').addClass('is-invalid');
                    $('#password').removeClass('is-valid');
                    $('#error-register-password').text('mot de passe doit être plus de 8 caractères.');
                }
            } else{
                $('#email').addClass('is-invalid');
                $('#email').removeClass('is-valid');
                $('#error-register-email').text('adresse email invalide');
            }
        } else{
            $('#lastname').addClass('is-invalid');
            $('#lastname').removeClass('is-valid');
            $('#error-register-lastname').text('prenom invalide');
        }
    }else{
        $('#firstname').addClass('is-invalid');
        $('#firstname').removeClass('is-valid');
        $('#error-register-firstname').text('nom invalide');
    }

    /*
    Name : /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/
    Email : /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/
    */
});
