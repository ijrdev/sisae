$(document).ready(function() {
    // Message.
    var label       = $('.message .label-message').text();
    var title       = $('.message .title-message').text();
    var description = $('.message .description-message').text();

    if(label != '' && title != '' && description != '') 
    {
        message(label, title, description);
    }

    // Mask Sistema Escolas Create/Edit.
    if($('#cnpj'))
    {
        $('#cnpj').mask('99.999.999/9999-99');
    }
    
    if($('#telefone'))
    {
        $('#telefone').mask('(99) 9999-9999');
    }
});

// Boostrap Message.
function message(label, title, description)
{
    $.bootstrapGrowl("<h4 style='font-weight: bold;'>"+title+"</h4><p>"+description+"</p>", {
        ele: 'body', // which element to append to
        type: label, // (null, 'info', 'danger', 'success')
        offset: {from: 'top', amount: 50}, // 'top', or 'bottom'
        align: 'right', // ('left', 'right', or 'center')
        width: 300, // (integer, or 'auto')
        delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
        allow_dismiss: true, // If true then will display a cross to close the popup.
        stackup_spacing: 10 // spacing between consecutively stacked growls.
    });
}

// Form Submit Loading.
function formSubmitLoading(formName)
{
    console.log(formName);
    $('#form-buttons').children().hide();
    $('#form-buttons').append("<div class='col-lg-12 text-center' style='color: #1BBAE1;'><i class='fa fa-spinner fa-2x fa-spin'></i></div>");
    
    $('#' + formName).submit();
}