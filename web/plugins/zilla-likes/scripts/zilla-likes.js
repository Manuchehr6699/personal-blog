jQuery(function($) {

  $('.zilla-likes').on('click', function() {
    var link = $(this);
    if (link.hasClass('active')) return false;

    var id = $(this).attr('id'),
        postfix = link.find('.zilla-likes-postfix').text();

    $.ajax({
      type: 'GET',
      url: zilla_likes.ajaxurl,
      data:{
        id: id
      },
      xhrFields: { 
        withCredentials: true, 
      },
      success:function(data){
        var res = JSON.parse(data);
        link.html(res['like_count']).addClass('active').attr('title','You already like this');
      },
    });
    return false;
  });

  if ($('body.ajax-zilla-likes').length) {
    $('.zilla-likes').each(function() {
      var id = $(this).attr('id');
      $(this).load(zilla_likes.ajaxurl, {
        action: 'zilla-likes', 
        post_id: id,
      });
    });
  }
});
