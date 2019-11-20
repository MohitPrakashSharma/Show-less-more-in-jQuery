<html>
    <head>
        <title>Show hide more in jQuery</title>
        <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script>
            function toggleText() {
                 if(!$("#more-option").is(':visible')) {
            		$("#more").hide();
            		$("#less").show();
            	 } else {
            		$("#less").hide();
            		$("#more").show();
            	 }
            	$("#more-option").slideToggle();
            }
        </script>
        <style>
            #less{display:none;}
            #more-option{display:none;}
        </style>
    </head>
    <body>
        <p>Write Mail</p>
        <p>Inbox</p>
        <p>Sent Mail</p>
        <p>Drafts</p>
        <div id="more-option">
            <p>Chat</p>
            <p>Spam</p>
            <p>Trash</p>
        </div>
        <input type="button" id="more" value="More" onClick="toggleText();">
        <input type="button" id="less" value="Less" onClick="toggleText();">
    </body>
</html>