BX.ready(function(){
    $('#check-all').click(function () 
    {
        var t = $(this).parents('.checked-all');
        if (this.checked == true)
        {
            t.find('input[type=checkbox]').each(function() 
            {
                this.checked = true; 
                $('#count-checked').text($('#count-all').text());
            });
        }
        else
        {
            t.find('input[type=checkbox]').each(function() 
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
});