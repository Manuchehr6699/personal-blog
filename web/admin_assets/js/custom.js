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
                alert('Something went wrong!');
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
                alert('Something went wrong!');
            }
        }
    });
}

function changeAboutMe(el) {
    var id = $(el).data('id');
    var status = $(el).data('status');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-about-me',
        data: {id: id, status: status},
        success: function (responese) {
            var result = JSON.parse(responese);
            // alert(result['result']);
            if (result['result'] == 'success') {
                $(el).data('status', result['status']);
                if (result['status'] == 1) {
                    $(el).html('<i class="fa fa-check"> </i> Active');
                    $(el).removeAttr("class");
                    $(el).addClass("btn btn-success");
                }else{
                    $(el).html('<i class="fa fa-times"> </i> Inactive');
                    $(el).removeAttr("class");
                    $(el).addClass("btn btn-danger");
                }
            } else {
                alert('Something went wrong!');
            }
        }
    });
}

function changeCV(el) {
    var id = $(el).data('id');
    var status = $(el).data('status');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-cv',
        data: {id: id, status: status},
        success: function (responese) {
            var result = JSON.parse(responese);
            // alert(result['result']);
            if (result['result'] == 'success') {
                $(el).data('status', result['status']);
                if (result['status'] == 1) {
                    $(el).html('<i class="fa fa-check"> </i> Active');
                    $(el).removeAttr("class");
                    $(el).addClass("btn btn-success");
                }else{
                    $(el).html('<i class="fa fa-times"> </i> Inactive');
                    $(el).removeAttr("class");
                    $(el).addClass("btn btn-danger");
                }
            } else {
                alert('Something went wrong!');
            }
        }
    });
}

function changeContact(el) {
    var id = $(el).data('id');
    var status = $(el).data('status');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-contact',
        data: {id: id, status: status},
        success: function (responese) {
            var result = JSON.parse(responese);
            // alert(result['result']);
            if (result['result'] == 'success') {
                $(el).data('status', result['status']);
                if (result['status'] == 1) {
                    $(el).html('<i class="fa fa-check"> </i> Active');
                    $(el).removeAttr("class");
                    $(el).addClass("btn btn-success");
                }else{
                    $(el).html('<i class="fa fa-times"> </i> Inactive');
                    $(el).removeAttr("class");
                    $(el).addClass("btn btn-danger");
                }
            } else {
                alert('Something went wrong!');
            }
        }
    });
}

function replyToComment(id) {
    var reply = $('#comment_'+id).val();
    $.ajax({
        type: "GET",
        url: '/admin/comment/reply',
        data: {reply: reply, id: id},
        success: function (responese) {
            var result = JSON.parse(responese);
            if(result['result'] == 'success'){
                showNotification('bg-success', 'Reply was sended successfully!');
            }
        }
    });
}

function resetPassword(uid) {
    var password = $('#password_'+uid).val();
    $('#password_'+uid).val('');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-password',
        data: {password: password, uid: uid},
        success: function (responese) {
            var result = JSON.parse(responese);
            if(result['result'] == 'success'){
                showNotification('bg-success', 'User Password was successfully reseted!');
            }
        }
    });
}