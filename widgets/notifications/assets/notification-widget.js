$.get(
    'http://admin.id.iri.loc/index.php?r=notification%2Ffrontend',
    function (data) {
        data.forEach(function(item, i ,array) {
            $('#notify').append(
                '<div class="alert alert-'
                + item.Type +
                '"> <button type="button" class="notify close" data-notifiid="'
                + item.Id +
                '" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                + item.Message +
                '</div>');
        });
    }
)

$(document).on('click', '.notify' , function() {
    $.get(
        'http://admin.id.iri.loc/index.php?r=notification/frontend/read&id='+$(this).data('notifiid')
    )

});