$(document).ready(() => {
	
	const $arrayButtons = $('div.products-menu p');
	const $arrayProductsArea = $('div.products-area');
	
	const clickProdButton = (orderButton) => {
		for(let i = 0; i<$arrayButtons.length; i++){
			if(i === orderButton){
				$($arrayButtons[i]).addClass('chosen-prod-cat');
				$($arrayProductsArea[i]).show();
			}else{
				$($arrayButtons[i]).removeClass('chosen-prod-cat');
				$($arrayProductsArea[i]).hide();
			}
		}
	};
	
	for(let i = 0; i<$arrayButtons.length; i++){
		$($arrayButtons[i]).on('click', ()=>{
			clickProdButton(i);
		});
	}
	
});