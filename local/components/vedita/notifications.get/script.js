BX.ready(function(){
    var request = BX.ajax.runComponentAction('vedita:notifications.get', 'ajaxAddEvent', 
    {
        mode:'class'
    });
    request.then(function(response)
    {
        if (response['data']['result'])
        {
            $('#number-of-notifications').text(response['data']['quantity']);
            $('.header-notifications-list').append(response['data']['html']);
        }        
    });

    $(document).on('click', '.header-notifications-btn', function () 
    {
        var request = BX.ajax.runComponentAction('vedita:notifications.get', 'ajaxUpdateEvent', 
        {
            mode:'class'
        });
        request.then(function(response)
        {
            if (response['data']['result'])
            {
                $('#number-of-notifications').text('0');
            }        
        });
    });
});