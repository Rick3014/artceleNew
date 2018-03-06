$(document).ready(function(){
	var language = 'sq';

	$('#languageSwitcher').value = language;
	console.log($('#languageSwitcher').value);
	//Change language
	console.log("LANGUAGE SWITCHER");
	$("#languageSwitcher").change(function() {
		var locale = $(this).val();

		var _token = $("input[name=_token]").val();

		$.ajax({
			url:"/language",
			type:'POST',
			data: {locale: locale, _token: _token},
			datatype: 'json',
			success: function(data){
				console.log("COMPLETE");
				window.location.reload(true);
				language = locale;
				$('#languageSwitcher').value = language;
				console.log("THIS LANGUAGE");
				console.log(language);
			},
			error: function(data){

			}
		})
	})
	// language = locale;
	// 			$('#languageSwitcher').value = language;
})