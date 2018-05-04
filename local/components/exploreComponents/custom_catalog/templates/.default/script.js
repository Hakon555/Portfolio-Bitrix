$(document).ready(() => {

    const $arrButtons = $('div.products-menu p');
    const $more = $("div.more");
    const $prodCol = $("div.products-col");

    let $cat = "a";
    let $quantity = 6;
    let $sizeProdCol;// = 1060;

    $more.on('click', ()=>{
        callToAjax($cat, true);
    });

    for(let i = 0; i<$arrButtons.length; i++){
        $($arrButtons[i]).on('click', ()=>{

            switch(i) {
                case 0:
                    callToAjax("a", false);
                    break;
                case 1:
                    callToAjax("m", false);
                    break;
                case 2:
                    callToAjax("w", false);
                    break;
                case 3:
                    callToAjax("k", false);
                    break;
                default:
                    callToAjax("a", false);
            }
        });
    }

    function refreshProducts(data) {
        $("div.container-products-area").html(data);
        $sizeProdCol = 305 + 410 * Math.ceil($("div.products").length / 3);
        $prodCol.css("height", $sizeProdCol);
    }

    function callToAjax(i, selector) {
        if(!selector) {
            $cat = i;
            $quantity = 6;
        }else{
            $quantity += 6;
        }

        $.post(
            $ajPath,
            {
                sex: i,
                ibType: $ibType,
                quantity: $quantity
            },
            refreshProducts
        );
    }

});