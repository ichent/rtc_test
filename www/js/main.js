$(function() {
    var $elProducers = $('.js-producers');
    var $elProducts = $('.js-products');
    var $elSearchButton = $('.js-search-button');
    var $elSearchForm = $('.js-search-form');

    if ($elProducers.length && $elProducts.length) {
        $elProducers.change(function(e) {
            $elProducts.html('');

            $.get('/hardware', {id: $(this).val()}, function(data) {
                if (data && data.length) {
                    for (var i=0, len=data.length; i<len; i++) {
                        $elProducts.append('<option>' + data[i] + '</option>');
                    }
                }
            });
        });
    }

    if ($elSearchButton.length && $elSearchForm.length) {
        $elSearchButton.click(function() {
            $elSearchForm.submit();
        });
    }
});