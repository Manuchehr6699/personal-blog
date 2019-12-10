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
                showNotification('bg-success', 'Reply was sent successfully!');
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
function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
}
function changeText(el, id) {
    var text = myTrim($(el).text());

    if(text !== ""){
        $(el).removeAttr('onclick');
        $(el).html('<input type="text" id="txt'+id+'" value="'+text+'"></input><i class="fa fa-pen" onclick="saveText(\''+id+'\')"></i>');
    }
}


function saveText(_id) {
    var text = $('#txt'+_id).val();
    var tbl;
    var atr;
    if(text !== ""){
        tbl = $("#"+_id).data('tbl');
        atr = $("#"+_id).data('atr');
        id = $("#"+_id).data('id');
        $.ajax({
            type: "GET",
            url: '/admin/editable/change-text',
            data: {text: text, tbl: tbl, atr: atr, id: id},
            success: function (responese) {
                var result = JSON.parse(responese);
                if(result['result'] == 'success'){
                    showNotification('bg-success', 'Data was successfully saved!');
                    $('#editable_text').remove();
                    $('#'+_id).text(result['text']);
                    $('#'+_id).attr('onClick', "changeText(this, '"+_id+"')");
                }else{
                    if(result['text'] == 1062){
                        showNotification('bg-danger', 'This Username already exists!');
                    }else{
                        alert(result['text']);
                        showNotification('bg-danger', 'Something went wrong!');
                    }
                }
            }
        });
    }
}


function answerToMessage(id) {
    var reply = $('#message_'+id).val();
    $.ajax({
        type: "GET",
        url: '/admin/comment/answer',
        data: {answer: reply, id: id},
        success: function (responese) {
            var result = JSON.parse(responese);
            if(result['result'] == 'success'){
                showNotification('bg-success', 'Answer was sent successfully!');
            }
        }
    });
}

function changeSubcriberStatus(el) {
    var id = $(el).data('id');
    var status = $(el).data('status');
    $.ajax({
        type: "GET",
        url: '/admin/editable/change-subcriber-status',
        data: {id: id, status: status},
        success: function (responese) {
            var result = JSON.parse(responese);

            if (result['result'] == 'success') {
                $(el).data('status', result['status']);
                if (result['status'] == 1) {
                    $(el).html('<i class="fa fa-check"> </i> Active');
                    $(el).removeAttr("class");
                    $(el).addClass("label label-md label-success");
                    showNotification('bg-success', 'Success!');
                }else{
                    $(el).html('<i class="fa fa-times"> </i> Inactive');
                    $(el).removeAttr("class");
                    $(el).addClass("label label-md label-warning");
                }
            } else {
                alert('Something went wrong!');
            }
        }
    });
}