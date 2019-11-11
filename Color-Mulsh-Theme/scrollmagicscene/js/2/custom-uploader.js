jQuery(document).ready(function() {
var formfield;
jQuery('#upload_image_button').click(function() {
	alert("This is opening");
jQuery('html').addClass('Image');
formfield = jQuery(this).prev().attr('title');
tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
return false;
});
window.original_send_to_editor = window.send_to_editor;
window.send_to_editor = function(html){
if (formfield) {
fileurl = jQuery('img',html).attr('src');
jQuery('#'+formfield).val(fileurl);
tb_remove();
jQuery('html').removeClass('Image');
} else {
window.original_send_to_editor(html);
}
};
});