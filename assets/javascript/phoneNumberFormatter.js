$(document).ready(function () {
    $('#celular').on('input', function () {
        var input = $(this).val().replace(/\D/g, '');
        if (input.length > 0) {
            input = input.match(/^(\d{0,2})(\d{0,5})(\d{0,4})$/);
            $(this).val(function () {
                return (!input[2] ? input[1] : '(' + input[1] + ') ' + input[2] + (input[3] ? '-' + input[3] : ''));
            });
        }
    });
});