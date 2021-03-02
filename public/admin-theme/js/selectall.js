$('document').ready(function() {
    $('#select_all').click(function(){
        $('.checkbox-tick').each(function(i){
            this.checked = true;
        });
    });
    $('#deselect_all').click(function(){
        $('.checkbox-tick').each(function(i){
            this.checked = false;
        });
    });
});