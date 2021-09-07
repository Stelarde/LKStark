BX.ready(function()
{
    $('.deleteContact').on('click',function (){
        if($('input[type="radio"]').is(':checked')) {
            var request = BX.ajax.runComponentAction('vedita:contacts.list', 'deleteContact',
                {
                    mode:'class',
                    data:
                        {
                            agent_id: $('input[type="radio"]:checked').attr("id")
                        }
                });

            request.then(function(response)
            {
                console.log(response);
            });
        }
    });
});