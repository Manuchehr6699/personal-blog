function changeStatus(el) {
    var id = $(el).data('id');
    var status = $(el).data('status');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-comment-status',
        data: {id: id, status: status},
        success: function (responese) {

            var result = JSON.parse(responese);
            // alert(result['result']);
            if (result['result'] == 'success') {
                $(el).data('status', result['status']);
                if (result['status'] == 1) {
                    $(el).html('<i class="fa fa-check"> </i> Published');
                    $(el).removeAttr("class");
                    $(el).addClass("label label-md label-success");
                    showNotification('bg-success', 'Comment Was Published!');
                }else{
                    $(el).html('<i class="fa fa-times"> </i> Unpublished');
                    $(el).removeAttr("class");
                    $(el).addClass("label label-md label-warning");
                    showNotification('bg-danger', 'Comment Was Blocked!');
                }
            } else {
                alert('Server can not change status!');
            }
        }
    });
}

function changeUserStatus(el) {
    var id = $(el).data('id');
    var status = $(el).data('status');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-user-status',
        data: {id: id, status: status},
        success: function (responese) {

            var result = JSON.parse(responese);
            // alert(result['result']);
            if (result['result'] == 'success') {
                $(el).data('status', result['status']);
                if (result['status'] == 0) {
                    $(el).html('<i class="fa fa-check"> </i> Active');
                    $(el).removeAttr("class");
                    $(el).addClass("label label-md label-success");
                }else{
                    $(el).html('<i class="fa fa-times"> </i> Blocked');
                    $(el).removeAttr("class");
                    $(el).addClass("label label-md label-warning");
                }
            } else {
                alert('Server can not change status!');
            }
        }
    });
}