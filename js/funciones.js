$(document).ready(function() {
    $("#registrar").click(function() {
        var nom, ape1, ap2, tele, email;
        nom = $('#nombre').val();
        ape1 = $('#ape1').val();
        ape2 = $('#ape2').val();
        tele = $('#tele').val();
        email = $('#email').val();
        $.ajax({
            url: "action/registro.php",
            type: "POST",
            data: {
                'nom': nom,
                'ape1': ape1,
                'ape2': ape2,
                'tele': tele,
                'email': email
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
    });
});