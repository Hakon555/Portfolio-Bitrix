$(document).ready(() => {
    const $stars = $('img.stars');

    function mouseUp (starSelector, star) {

        let $src = $(starSelector).attr("src");
        $(starSelector).attr("src", $SNIsrcChoicePic);

        return $src;
    }

    for(let i = 0; i<$stars.length; i++){

        let $src = [];
        let $starID;

        $($stars[i]).hover(
            function(){

                const $classStar = $($stars[i]).attr("class");

                for(let $a = 1; $a <= $classStar[($classStar.indexOf("-") + 1)]; $a++){

                    let $starSelector = "." + "star-" + $a + $classStar.substring($classStar.indexOf("_"));
                    $src[$a] = mouseUp($starSelector, $a);
                    $starID = $classStar.substring($classStar.indexOf("_"));
                }

            },
            function(){
                for(let $a = 1; $a<=5; $a++) {
                    let $selector = "." + "star-" + $a + $starID;
                    $($selector).attr("src", $src[$a]);
                }
            }
        );
    }

    function onAjaxSuccess(data) {
        location.reload();
    }

    for(let i = 0; i<$stars.length; i++){

        $($stars[i]).on('click', ()=>{
            const $classStar = $($stars[i]).attr("class");
            const $starNumber = $classStar[($classStar.indexOf("-") + 1)];
            const $starID = $classStar.substring($classStar.indexOf("_") + 1);

            $.post(
                $SNIajaxPath,
                {
                    rating: $starNumber,
                    item_id: $starID,
                    ib_type: $SNIibType
                },
                onAjaxSuccess
            );
        });
    }

});