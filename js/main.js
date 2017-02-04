// 画像アップロード
$(function() {
    $('input[id=lefile1]').change(function() {
        $('#photoCover1').val($(this).val());
    });  
});

$(function() {
    $('input[id=lefile2]').change(function() {
        $('#photoCover2').val($(this).val());
    });  
});

$(function() {
    $('input[id=lefile3]').change(function() {
        $('#photoCover3').val($(this).val());
    });  
});