<div class="messages-container">
    <div class="messages-inner">
        <div class="message">
            <div class="message-left">
                <p class="username">Gary</p>
                <p class="timestamp">15:32</p>
            </div>
            <div class="message-right">
                <p class="message-content">Hello World!</p>
            </div>
        </div>
        <div class="message local">
            <div class="message-left">
                <p class="username">John</p>
                <p class="timestamp">15:36</p>
            </div>
            <div class="message-right">
                <p class="message-content">Hi</p>
            </div>
        </div>
    </div>
     <div class="message">
        <div class="message-left">
            <p class="username">Gary</p>
            <p class="timestamp">15:37</p>
        </div>
        <div class="message-right">
            <p class="message-content">How are you?</p>
        </div>
    </div>
     <div class="message local">
        <div class="message-left">
            <p class="username">John</p>
            <p class="timestamp">15:38</p>
        </div>
        <div class="message-right">
            <p class="message-content">I'm good</p>
        </div>
    </div>
     <div class="message">
        <div class="message-left">
            <p class="username">Gavin</p>
            <p class="timestamp">15:40</p>
        </div>
        <div class="message-right">
            <p class="message-content">Hey everyone!</p>
        </div>
    </div>
    <div class="message">
        <div class="message-left">
            <p class="username">EXTREMELY LONG USERNAME</p>
            <p class="timestamp">15:47</p>
        </div>
        <div class="message-right">
            <p class="message-content">Hi Gavin</p>
        </div>
    </div>
     <div class="message local">
        <div class="message-left">
            <p class="username">John</p>
            <p class="timestamp">15:50</p>
        </div>
        <div class="message-right">
            <p class="message-content">AN VERY LONG MESSAGE THAT GOES ON AND ONAFS AS ASD FASD ASD FSD J FVDKFBJDF KW,SD FAKJ,ADSKBASDASDLFABSD  ASLDFBASKILD ENDS</p>
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