/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-site-gerenciavel': '&#xe907;',
		'icon-baloes1': '&#xe906;',
		'icon-baloes': '&#xe900;',
		'icon-beleza': '&#xe905;',
		'icon-coffe1': '&#xe903;',
		'icon-medalha': '&#xe901;',
		'icon-pessoa': '&#xe902;',
		'icon-world': '&#xe904;',
		'icon-alvo1': '&#xe919;',
		'icon-design1': '&#xe91b;',
		'icon-hand1': '&#xe91d;',
		'icon-mobile3': '&#xe91e;',
		'icon-search1': '&#xe921;',
		'icon-time1': '&#xe920;',
		'icon-arrow-down1': '&#xe92e;',
		'icon-mail1': '&#xe92d;',
		'icon-marker2': '&#xe916;',
		'icon-facebook2': '&#xe93d;',
		'icon-instagram1': '&#xe93a;',
		'icon-linkedin1': '&#xe939;',
		'icon-skype1': '&#xe940;',
		'icon-telephone1': '&#xe911;',
		'icon-twitter1': '&#xe941;',
		'icon-whatsapp2': '&#xe91c;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
