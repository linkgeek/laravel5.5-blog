
// 赞助
$('.zanzhu').on('click', function(){
  layer.open({
    type: 1,
    title: '',
    area: ['520px', '340px'],
    shadeClose: true, 
    content: $('#zanzhus')
  });
});

// 手机端
$('.mobile-code').on('click', function(){
  layer.open({
    type: 1,
    title: '',
    offset: 'auto',
    shadeClose: true, 
    content: '<img src="../../images/home/mobile.png" width="200" />'
  });
});

// 投稿
function tougao(obj){
    $.get(checkLogin, function(data) {
        if(data==1){
            location.href = touGaoUrl;
        }else{
            $('#b-modal-login').modal('show');
        }
    });
}