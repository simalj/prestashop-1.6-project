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

<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }

  .page-sidebar-closed:not(.mobile) #content.nobootstrap,
  .page-sidebar:not(.mobile) #content.nobootstrap {
    padding: 100px 0 0 0;
  }

  #content.nobootstrap .page-head h4.page-subtitle {
    display: none;
  }

  #footer {
    display: none;
  }
</style>

<script>
  // Enhance page title with subtitle and module version
  const pageTitle = document.querySelector('#content.nobootstrap .page-head h2.page-title');
  const pageSubtitle = document.querySelector('#content.nobootstrap .page-head h4.page-subtitle');

  if (pageTitle) {
    pageTitle.textContent = pageTitle.textContent
      + (pageSubtitle ? ' ' + pageSubtitle.textContent : '')
      + (window?.store?.context?.moduleVersion ? ' v' + window.store.context.moduleVersion : '')
  }
</script>
