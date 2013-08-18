var EuCookie = {
	
	EUmembers: ["BE", "BG", "CZ", "DK", "DE", "EE", "IE", "EL", "ES", "FR", "IT", "CY", "LV", "LT", "LU", "HU", "MT", "NL", "AT", "PL", "PT", "RO", "SI", "SK", "FI", "SE", "UK"],
			
	isMobileBoolean: false,
	
	init: function()
	{
		if ($.cookie("cookie_msg_eu_law") === null || 1)
		{
			EuCookie.appendScriptIpinfodb();
		}
	},
	
	appendScriptIpinfodb: function()
	{
		var url = "http://api.ipinfodb.com/v3/ip-city/?key=88d6addb708f5a9819ff81b60373ef218a2e212312a343eb5d6ead4ee0426ec5&format=json" + "&callback=" + "EuCookie.showMessage";
		
		try {
			script = document.createElement('script');
			script.src = url;
			document.body.appendChild(script);
		} catch (err) {
		}

	},
			
	showMessage: function(answer)
	{
		if (answer['statusCode'] === 'OK') {
			var show = EuCookie.checkIfInEu(answer['countryCode']);
			if(show)
			{
				EuCookie.isMobile();
				var item = '<div id="cookie-notification" class="' + (EuCookie.isMobileBoolean ? 'is-mobile' : '') + '">\n\
<div class="content"><div class="text">Ta witryna używa plików cookie. Korzystając ze strony wyrażasz zgodę na używanie plików cookie, zgodnie z aktualnymi ustawieniami przeglądarki. Możesz je w każdej chwili zmienić. </div>\n\
<a class="link-close" href="#" id="cc-approve-button-thissite">Zamknij</a>\n\
</div>\n\
</div>';
				$("body").prepend(item);
				EuCookie.bindCloseClick();
				if(!EuCookie.isMobileBoolean)
				{
					var current_width = $(window).width();
					EuCookie.updateContainerWidth(current_width);
					EuCookie.bindResizeWindow();
				}
			}
			$.cookie("cookie_msg_eu_law", 1, {expires: 365, path: '/'})
		}
		
	},
	
	checkIfInEu: function(countryCode)
	{
		if ($.inArray(countryCode, EuCookie.EUmembers) === -1)
			return false;
		else
			return true;
	},
			
	updateContainerWidth: function(width)
	{
		if(width> 1100)
		{
			$('#cookie-notification').addClass('wider');
			$('#cookie-notification .content').css({
				'width': 1000
			});
			$('#cookie-notification .content .text').removeAttr( 'style' );
		}
		else
		{
			$('#cookie-notification').removeClass('wider');
			$('#cookie-notification .content').css({
				'width': width
			});
			if(width<600)
				$('#cookie-notification .content .text').css({
					'width': '70%'
				});
			else
				$('#cookie-notification .content .text').removeAttr( 'style' );
			
		}
	},
	bindCloseClick: function()
	{
		$('#cookie-notification .link-close').click(function()
		{
			$('#cookie-notification').slideToggle();
			return false;
		});
	},
	bindResizeWindow: function()
	{
		$(window).resize(function(){
			var current_width = $(window).width();
			EuCookie.updateContainerWidth(current_width);
		});
	},
	
	isMobile: function()
	{
		(function(b) {
			EuCookie.isMobileBoolean = /android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(b) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(b.substr(0, 4));
		})(navigator.userAgent || navigator.vendor || window.opera);
	}
};