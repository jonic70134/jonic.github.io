//fancybox update
function reOpenPopup(newWidth,newUrl) {
  parent.$.fancybox.open({
    'width': newWidth,
    'height': 'auto',
    'href': newUrl,
    'type': 'iframe'
  });
  parent.$.fancybox.update();
};

function reOpenPopupNoClose(newWidth,newUrl) {
  parent.$.fancybox.open({
    'width': newWidth,
    'height': 'auto',
    'href': newUrl,
    'closeBtn': false,
    'type': 'iframe',
	'helpers': {
		'overlay': {
			'closeClick': false
		}      
	}
  });
  parent.$.fancybox.update();
};