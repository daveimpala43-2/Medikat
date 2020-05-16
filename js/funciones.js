$(document).ready(function() {
    $("#registrar").click(function() {
        var nom, ape1, ap2, tele, email, pass;
        nom = $('#nombre').val();
        ape1 = $('#ape1').val();
        ape2 = $('#ape2').val();
        tele = $('#tele').val();
        email = $('#email').val();
        pass = $('#pass').val();
        cpass = $('#c-pass').val();
        if (pass == cpass) {
            $.ajax({
                url: "action/registro.php",
                type: "POST",
                data: {
                    'nom': nom,
                    'ape1': ape1,
                    'ape2': ape2,
                    'tele': tele,
                    'email': email,
                    'pass': pass
                },
                success: function(data) {
                    if (data == 1) {
                        var url = "index.php";
                        $(location).attr('href', url);
                    } else if (data = 2) {
                        alert("Ya cuenta con una cuenta registrada");
                    } else {
                        alert("Se produjo un error al registralo. Verifique que los datos esten ingresdos correctamente y vuelva a intentarlo");
                    }
                }
            });
        } else {
            alert("Las contraseñas no coinciden");
        }
    });
});

$(document).ready(function() {
    $("#login").click(function() {
        var email, pass;
        email = $('#email').val();
        pass = $('#pass').val();
        $.ajax({
            url: "action/login.php",
            type: "POST",
            data: {
                'email': email,
                'pass': pass
            },
            success: function(data) {
                console.log(data);
                if (data == 1) {
                    var url = "index.php";
                    $(location).attr('href', url);
                } else if (data = 2) {
                    alert("Se produjo un error al registralo. Verifique que los datos esten ingresdos correctamente y vuelva a intentarlo");
                }
            }
        });
    });
});