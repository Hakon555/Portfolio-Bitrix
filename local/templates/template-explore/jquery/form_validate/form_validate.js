$(document).ready(() => {
	
	const $newsletterEmail = $('#NLemail');
	const $newsletterSub = $('#NLsub');
	
	const $singupEmail = $('#SUemail');
	const $singupPass = $('#SUpass');
	const $formform = $("#SUform");
	
	const $newsletterEmailWrong = $(".nl-validate-message");
	const $singupEmailWrong = $(".su-validate-message-email");
	const $singupPassWrong = $(".su-validate-message-pass");
	
	$newsletterSub.on('click', ()=>{
		
		if(validateEmail(String($newsletterEmail.val()).toLowerCase())){
			$newsletterEmail.removeClass('wrong-field');
			$newsletterEmailWrong.removeClass('explan-text');
		}else{
			$newsletterEmail.addClass('wrong-field');
			$newsletterEmailWrong.addClass('explan-text');
			inputValidateNLE();
		}
		
	});

	$formform.on('submit', ()=>{

		var $email = 0;
		var $pass = 0;

		if(validateEmail(String($singupEmail.val()).toLowerCase())){
			$singupEmail.removeClass('wrong-field');
			$singupEmailWrong.removeClass('explan-text');
			$email = 1;
		}else{
			$singupEmail.addClass('wrong-field');
			$singupEmailWrong.addClass('explan-text');
			inputValidateSUE();
		}
		
		if(($singupPass.val()) === ""){
			$singupPass.addClass('wrong-field');
			$singupPassWrong.addClass('explan-text');
			inputValidateSUP();
		}else{
			$singupPass.removeClass('wrong-field');
			$singupPassWrong.removeClass('explan-text');
			$pass = 1;
		}

		if($email === 1 && $pass === 1){
			return true;
		}else{
			return false;
		}
		
	});	

	function inputValidateNLE() {
		$newsletterEmail.on('input', ()=>{
			if(validateEmail(String($newsletterEmail.val()).toLowerCase())){
				$newsletterEmail.removeClass('wrong-field');
				$newsletterEmailWrong.removeClass('explan-text');
			}else{
				$newsletterEmail.addClass('wrong-field');
				$newsletterEmailWrong.addClass('explan-text');
			}
			
		});
	}
	
	function inputValidateSUE() {
		$singupEmail.on('input', ()=>{
			if(validateEmail(String($singupEmail.val()).toLowerCase())){
				$singupEmail.removeClass('wrong-field');
				$singupEmailWrong.removeClass('explan-text');
			}else{
				$singupEmail.addClass('wrong-field');
				$singupEmailWrong.addClass('explan-text');
			}
		});
	}
	
	function inputValidateSUP() {
		$singupPass.on('input', ()=>{
			
			if(($singupPass.val()) === ""){
				$singupPass.addClass('wrong-field');
				$singupPassWrong.addClass('explan-text');
			}else{
				$singupPass.removeClass('wrong-field');
				$singupPassWrong.removeClass('explan-text');
			}
		});	
	}
	
	function validateEmail(email) {
		var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
		return re.test(email);
	}
});