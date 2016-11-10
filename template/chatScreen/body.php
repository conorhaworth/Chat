<div class="messages-container">
    <div class="messages-inner" id="messagepane">

    </div>
</div>
<div class="menu-container close-menu">
    <div class="menu-inner">
        <?php include('/template/chatScreen/menu.php'); ?>
    </div>
</div>
<script src="/js/menu.js"></script>

<script>
jQuery(document).ready(function(){
    var windowHeight = window.innerHeight;
    jQuery('.messages-container').css('height', windowHeight-100);
    jQuery('.messages-container').css('max-height', windowHeight-100);
    jQuery('.menu-container').css('max-height', windowHeight-50);
    jQuery('.menu-container').css('bottom', windowHeight-100);

    console.log("ready");
});
jQuery(window).resize(function(){
    var windowHeight = window.innerHeight;
    jQuery('.messages-container').css('height', windowHeight-100);
    jQuery('.messages-container').css('max-height', windowHeight-100);
    jQuery('.menu-container').css('max-height', windowHeight-50);
    jQuery('.menu-container').css('bottom', windowHeight-100);
});
</script>