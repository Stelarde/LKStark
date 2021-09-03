<footer id="footer " class="footer">
  <div class="container">
    <div class="footer-block">
        <a href="#" class="footer-logo">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo-light.png" alt="">
        </a>
        <a href="#" class="footer-feedback">Обратная связь</a>
    </div>
  </div>
</footer>
<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/libs/jquery.min.js", true);
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/libs/jquery.fancybox.min.js", true);
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/libs/chart.min.js", true);
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/libs/chartjs-plugin-datalabels.js", true);
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.min.js", true);
?>
</body>
</html>