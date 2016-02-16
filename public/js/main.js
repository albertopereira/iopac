$(function(){
	$('#search-select-tagsubfield').on('change', function(){
        $('#search-select-tagfield').val($("option:selected", this).attr('id'));
    });

    $('#search-select-tagsubfield-1').on('change', function(){
        $('#search-select-tagfield-1').val($("option:selected", this).attr('id'));
    });

    $('#search-select-tagsubfield-2').on('change', function(){
        $('#search-select-tagfield-2').val($("option:selected", this).attr('id'));
    });

    $('#search-select-tagsubfield-3').on('change', function(){
        $('#search-select-tagfield-3').val($("option:selected", this).attr('id'));
    });

});