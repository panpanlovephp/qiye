function getshi(id,mr)
{
    url = root + '/api.php/index/shi';
    $.post(url,{'id':id,'mr':mr},function (data) {
        $('#shi').empty().html(data);
    })
}

function getqu(id,mr)
{
    url = root + '/api.php/index/qu';
    $.post(url,{'id':id,'mr':mr},function (data) {
        $('#qu').empty().html(data);
    })
}


