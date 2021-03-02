$('document').ready(function() {
    $('#select_all').click(function(){
        let checkboxes = [];
        $('.checkbox-tick').each(function(i){
            this.checked = true;
            checkboxes[i] = $(this).val();
        });
        $('.select_all').css("background-color", "#d1d3e2");
        // console.log(checkboxes);
        // $.get('./sidebar-settings', checkboxes, function(returnedData) {
        //     console.log(returnedData);
        // });
    });
    $('#deselect_all').click(function(){
        $('.checkbox-tick').each(function(i){
            this.checked = false;
        });
        $('.select_all').css("background-color", "#fff");
    });

    $('.textbox-link').each(function(i) {
        let data;
        $(this).keyup(function() {
            $('.text-autosave').css("display", "inline");
        });
        $(this).focusout(function() {
            $('.text-autosave').css("display", "none");
        });
    });

    $('#add_new').click(function(){
        $('.add_new_hide').css('display','none');
        $('.add_new_show').css('display','flex');
    });

    $('#cancel').click(function(){
        $('.add_new_hide').css('display','flex');
        $('.add_new_show').css('display','none');
    });

    $('#edit').click(function(){
        let input_text = $('.add_new_hide input[type=text]');
        let input_file = $('.add_new_hide input[type=file]');
        input_text.prop('disabled', false);
        input_file.prop('disabled', false);
        input_text.first().focus();
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(300);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL_detail(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah-detail')
                .attr('src', e.target.result)
                .width(300);
        };

        reader.readAsDataURL(input.files[0]);
    }
}