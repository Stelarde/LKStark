$(document).ready(function() {
    $(document).on('click', '#send-message', function () 
    {
        var form_data = new FormData($('#form-group')[0]);

        var request = BX.ajax.runComponentAction('vedita:support.add', 'ajaxAddEvent', 
        {
            mode:'class',
            data: form_data
        });
        request.then(function(response)
        {
            if (response['data']['result'])
            {
                console.log(response);
            }
            else 
            {
                console.log(response);
                alert('Проверьте введенные данные');
            }
        });
    });
});