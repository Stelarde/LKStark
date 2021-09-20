BX.ready(function(){
    $('#check-all').click(function () 
    {
        var checkboxAll = $(this).parents('.checked-all');
        if (this.checked == true)
        {
            checkboxAll.find('input[type=checkbox]').each(function() 
            {
                this.checked = true; 
                $('#count-checked').text($('#count-all').text());
            });
        }
        else
        {
            checkboxAll.find('input[type=checkbox]').each(function() 
            {
                this.checked = false; 
                $('#count-checked').text('0');
            });
        }
    });

    $('.checkbox-default').click(function () 
    {
        if (this.checked == true)
        {
            var countChecked = parseInt($('#count-checked').text());
            countChecked++;
            $('#count-checked').text(countChecked);
        }
        else
        {
            var countChecked = parseInt($('#count-checked').text());
            countChecked--;
            $('#count-checked').text(countChecked);
        }
    });

    $(document).on('click', '#delete', function ()
    {
        var arCheckedClient = [];
        $("input:checked").each(function(i, item) {
            if ($(item).attr("data-client-id"))
                arCheckedClient.push($(item).attr("data-client-id"))
        });

        var request = BX.ajax.runComponentAction('vedita:client.complex', 'ajaxDeleteEvent', 
        {
            mode:'class',
            data: 
            {
                'arClientId': arCheckedClient.join()
            }
        });
        request.then(function(response)
        {
            if (response['data']['result'])
            {
                alert("Клиенты были удалены");
            }      
        });
    });
});