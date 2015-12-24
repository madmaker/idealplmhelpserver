index_page=new Object()
index_page.filter=function() {
    var rex = new RegExp(jQuery('#index_page_phones_list_filter').val(), 'i');
    jQuery('#index_page_phones_list tr').hide();
    jQuery('#index_page_phones_list tr').filter(function () {
        return rex.test(jQuery(this).text());
    }).show();
}
index_page.util_dir2bat_init=function() {
    jQuery("#dir2bat_util_output").html('').hide();
    //jQuery("#dir2bat_util_textarea").val('');
    jQuery("#dir2bat_util_dg").modal('show');
}
index_page.util_dir2bat_exec=function() {
    var txt=jQuery("#dir2bat_util_textarea").val();

    jQuery("#dir2bat_util_output").html('<div class="well-lg bg-primary loading">Обработка...</div>').show();

    jQuery.ajax({
        type: "POST",
        url: "utils/dir2bat.php",
        data: 'txt='+encodeURIComponent(txt),
        timeout:20000,
        success: function(answer){
            jQuery("#dir2bat_util_output").html(answer);
            return 1;
        },
        error: function(XMLHttpRequest, textStatus, ErrorThrown){
            jQuery("#dir2bat_util_output").html(textStatus+'<br>'+ErrorThrown);
            return 0;
        }
    });
}