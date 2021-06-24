$(document).ready(function(){
	$("#reloadCaptcha").click(function(){
        var captchaImage = $('#captcha').attr('src');	
        console.log(captchaImage);
        captchaImage = captchaImage.substring(0,captchaImage.lastIndexOf("?"));

		captchaImage = captchaImage+"?rand="+Math.random()*1000;
        $('#captcha').attr('src', captchaImage);
        console.log('Here!:');
        console.log(captchaImage);
	});
});