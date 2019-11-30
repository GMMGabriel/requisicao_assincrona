$(document).ready(function () {
    $('#idade').focus();

    $('#btnEnviar').on('click', function (e) {
        e.preventDefault();

        $('#content_resposta').html("");

        $.ajax({
            url: 'router.php',
            type: 'POST',
            dataType: 'json',
            data: {
                idade: $('#idade').val()
            },
            success: function (e) {
                console.log(e);

                if (e['success']) {
                    $('#content_resposta').html(e['mensagem']);
                    $('#idade').val("");
                }
            },
            error: function (e) {
                console.log(e);
                alert('Falha na requisição');
            }
        })
    });

});

function somenteNumeros(e) {

    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
        if (tecla == 8 || tecla == 0 || tecla == 13) {
            return true;
        } else {
            return false;
        }
    }

}