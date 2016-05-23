var messages = [];

$.get(
    'http://admin.id.iri.loc/index.php?r=notification%2Ffrontend',
    function (data) {
        renderNotify(data);
    }
)

$(document).on('click', '.notify' , function() {
    var notify = $(this).data('notifiid');
    $.get(
        'http://admin.id.iri.loc/index.php?r=notification/frontend/read&id='+notify
    );
    messages.remove(notify);
});

function checkNotify() {
    $.get(
        'http://admin.id.iri.loc/index.php?r=notification/frontend/check&id='+messages,
        function (data) {
            renderNotify(data);
        }
    );
}
setInterval(checkNotify, 5000);

function renderNotify(data) {
    data.forEach(function(item, i ,array) {
        $('#notify').append(
            '<div class="alert alert-'
            + item.Type +
            '"> <button type="button" class="notify close" data-notifiid="'
            + item.Id +
            '" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
            + item.Message +
            '</div>');
        messages.push(item.Id);
    });
}

Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};
var ary = ['three', 'seven', 'eleven'];
