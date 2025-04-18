{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}

<div id="ps_checkout-loader" class="express-checkout-block mb-2">
  <div class="express-checkout-block-wrapper">
    <p class="express-checkout-spinner-text">
      {$loaderTranslatedText|escape:'htmlall':'UTF-8'}
    </p>
    <div class="express-checkout-spinner">
      <img src="{$spinnerPath|escape:'htmlall':'UTF-8'}" alt="{$loaderTranslatedText|escape:'htmlall':'UTF-8'}">
    </div>
  </div>
</div>

<section id="ps_checkout-displayPayment">
  {if !$is17 && $isExpressCheckout}
  <div class="express-checkout-block" id="ps_checkout-express-checkout-banner">
    <img src="{$paypalLogoPath|escape:'htmlall':'UTF-8'}" class="express-checkout-img" alt="PayPal">
    <p class="express-checkout-label">
      {$translatedText|escape:'htmlall':'UTF-8'}
    </p>
  </div>
  {/if}
  <div class="payment-options">
    {foreach from=$paymentOptions item="paymentOptionName" key="fundingSource"}
      <div id="payment-option-{$fundingSource}-container" class="payment-option row" style="display: none;">
        <div class="col-xs-12">
          <div id="payment-option-{$fundingSource}" class="payment_module closed" data-module-name="ps_checkout-{$fundingSource}">
            <a class="ps_checkout-{$fundingSource}" href="javascript:void(0);">
              {$paymentOptionName}
            </a>
          </div>
          <div class="payment_module closed">
            <a href="javascript:void(0);">
              {if $fundingSource == 'card' && $isHostedFieldsAvailable}
                <form id="ps_checkout-card-fields-form" class="form-horizontal loading" style="display: none;">
                  <div id="ps_checkout-card-fields-form-loader">
                    <img src="{$modulePath}views/img/tail-spin.svg" alt="">
                  </div>
                  <div>
                    <label class="form-control-label" for="ps_checkout-card-fields-name">{l s='Card holder name' mod='ps_checkout'}</label>
                    <div id="ps_checkout-card-fields-name"></div>
                    <div id="ps_checkout-card-fields-name-error" class="alert alert-danger hidden">{l s='Card holder name is invalid' mod='ps_checkout'}</div>
                  </div>
                  <div>
                    <label class="form-control-label" for="ps_checkout-card-fields-number">{l s='Card number' mod='ps_checkout'}</label>
                    <div id="ps_checkout-card-fields-number"></div>
                    <div id="ps_checkout-card-fields-number-error" class="alert alert-danger hidden">{l s='Card number is invalid' mod='ps_checkout'}</div>
                    <div id="ps_checkout-card-fields-vendor-error" class="alert alert-danger hidden">{l s='Card vendor is invalid' mod='ps_checkout'}</div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <label class="form-control-label" for="ps_checkout-card-fields-expiry">{l s='Expiry date' mod='ps_checkout'}</label>
                      <div id="ps_checkout-card-fields-expiry"></div>
                      <div id="ps_checkout-card-fields-expiry-error" class="alert alert-danger hidden">{l s='Card expiration date is invalid' mod='ps_checkout'}</div>
                    </div>
                    <div class="col-xs-6">
                      <label class="form-control-label" for="ps_checkout-card-fields-cvv">{l s='CVC' mod='ps_checkout'}</label>
                      <div class="ps_checkout-info-wrapper">
                        <div class="ps_checkout-info-button" onmouseenter="cvvEnter()" onmouseleave="cvvLeave()">i
                          <div class="popup-content" id="cvv-popup">
                            <img src="{$modulePath}views/img/cvv.svg" alt="">
                            {l s='The security code is a' mod='ps_checkout'} <b>{l s='3-digits' mod='ps_checkout'}</b> {l s='code on the back of your credit card. In some cases, it can be 4-digits or on the front of your card.' mod='ps_checkout'}
                          </div>
                        </div>
                      </div>
                      <div id="ps_checkout-card-fields-cvv"></div>
                      <div id="ps_checkout-card-fields-cvv-error" class="alert alert-danger hidden">{l s='CVV code is invalid' mod='ps_checkout'}</div>
                    </div>
                  </div>

                  <div id="payment-confirmation" class="submit hidden">
                    <button id="hosted-fields-validation" class="button btn btn-default button-medium" type="submit">
                      <span>{l s='I confirm my order' mod='ps_checkout'}<i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </form>
              {/if}
              <div class="js-payment-ps_checkout-card">
                <div id="pay-with-payment-option-{$fundingSource}-form"></div>
                <div class="ps_checkout-button" data-funding-source="{$fundingSource}"></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    {/foreach}
  </div>
</section>
<script>
function cvvEnter() {
  var popup = document.getElementById("cvv-popup");
  popup.classList.add("show");
}
function cvvLeave() {
  var popup = document.getElementById("cvv-popup");
  popup.classList.remove("show");
}
</script>
