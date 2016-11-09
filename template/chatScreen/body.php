<div class="messages-container">
    <div class="messages-inner">
        <div class="message">
            <div class="message-left">
                <p class="username">Liam</p>
                <p class="timestamp">15:32</p>
            </div>
            <div class="message-right">
                <p class="message-content">Hello World!</p>
            </div>
        </div>
        <div class="message local">
            <div class="message-left">
                <p class="username">Conor</p>
                <p class="timestamp">15:36</p>
            </div>
            <div class="message-right">
                <p class="message-content">Hi</p>
            </div>
        </div>
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