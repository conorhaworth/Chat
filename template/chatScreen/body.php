<div class="messages-container">
    <div class="messages-inner" id="messagepane">

    </div>
</div>

<script>
jQuery(document).ready(function(){
    var windowHeight = window.innerHeight;
    jQuery('.messages-container').css('height', windowHeight-100);
    jQuery('.messages-container').css('max-height', windowHeight-100);
    console.log("ready");
});
jQuery(window).resize(function(){
    var windowHeight = window.innerHeight;
    jQuery('.messages-container').css('height', windowHeight-100);
    jQuery('.messages-container').css('max-height', windowHeight-100);
});
</script>