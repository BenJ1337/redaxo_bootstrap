<script>
    $(document).ready(function() {
        console.log("Footer Script loaded...");
    });
</script>

<?php
if ($globalSettings->isSlickslider()) {
    echo   '<link rel="stylesheet" href="/assets/addons/redaxo_custom_components/frontend/slick-slider/slick.css">
            <link rel="stylesheet" href="/assets/addons/redaxo_custom_components/frontend/slick-slider/slick-theme.css">
            <script src="/assets/addons/redaxo_custom_components/frontend/slick-slider/slick.min.js"></script>");';
}
