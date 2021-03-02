$('document').ready(function() {
    $('#add_new').click(function(){
        $('.add_new_hide').css('display','none');
        $('.add_new_show').css('display','flex');
    });
    $('#cancel').click(function(){
        $('.add_new_hide').css('display','flex');
        $('.add_new_show').css('display','nonen');
    });
});