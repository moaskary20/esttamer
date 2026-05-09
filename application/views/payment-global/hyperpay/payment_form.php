<?php
//start common code of all payment gateway
if($payment_details['is_instructor_payout_user_id'] > 0){
    $instructor_details = $this->user_model->get_all_user($payment_details['is_instructor_payout_user_id'])->row_array();
    $keys = json_decode($instructor_details['payment_keys'], true);
    $keys = $keys[$payment_gateway['identifier']];
}else{
    $keys = json_decode($payment_gateway['keys'], true);
}
$test_mode = $payment_gateway['enabled_test_mode'];
//ended common code of all payment gateway
?>

<div class="gateway <?php echo $payment_gateway['identifier']; ?>-gateway">
    <div id="hyperpayPaymentResponse" class="text-danger mb-2"></div>
    <div id="hyperpayWidgetContainer"></div>
    <button type="button" class="payment-button float-end" id="hyperpayButton">
        <?php echo get_phrase('pay_by_hyperpay'); ?>
    </button>
</div>

<script>
    $(document).ready(function() {
        var hyperpayWidgetLoaded = false;
        var hyperpayButton = $('#hyperpayButton');
        var hyperpayResponse = $('#hyperpayPaymentResponse');
        var hyperpayWidgetContainer = $('#hyperpayWidgetContainer');

        $('#hyperpayButton').on('click', function() {
            if (hyperpayWidgetLoaded) {
                return;
            }

            hyperpayButton.prop('disabled', true).text('<?php echo get_phrase("please_wait"); ?>...');
            hyperpayResponse.html('');

            $.ajax({
                url: '<?php echo site_url('payment/create_hyperpay_payment'); ?>',
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.status != 1) {
                        hyperpayResponse.html(response.error && response.error.message ? response.error.message : '<?php echo get_phrase('checkout_creation_failed'); ?>');
                        hyperpayButton.prop('disabled', false).text('<?php echo get_phrase('pay_by_hyperpay'); ?>');
                        return;
                    }

                    hyperpayButton.hide();
                    hyperpayWidgetLoaded = true;

                    window.wpwlOptions = {
                        locale: '<?php echo $this->session->userdata('language') == 'arabic' ? 'ar' : 'en'; ?>',
                        numberFormatting: false
                    };

                    hyperpayWidgetContainer.html(
                        '<form action="' + response.shopperResultUrl + '" class="paymentWidgets" data-brands="' + response.brands + '"></form>'
                    );

                    var script = document.createElement('script');
                    script.src = response.widgetUrl;
                    if (response.integrity) {
                        script.integrity = response.integrity;
                        script.crossOrigin = 'anonymous';
                    }
                    document.body.appendChild(script);
                },
                error: function() {
                    hyperpayResponse.html('<?php echo get_phrase('checkout_creation_failed'); ?>');
                    hyperpayButton.prop('disabled', false).text('<?php echo get_phrase('pay_by_hyperpay'); ?>');
                }
            });
        });
    });
</script>
