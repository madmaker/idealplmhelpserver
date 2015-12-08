index_page=new Object()
index_page.filter=function() {
    var rex = new RegExp(jQuery('#index_page_phones_list_filter').val(), 'i');
    jQuery('#index_page_phones_list tr').hide();
    jQuery('#index_page_phones_list tr').filter(function () {
        return rex.test(jQuery(this).text());
    }).show();
}