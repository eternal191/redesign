$(document).ready(function ()
{
    $("#btnTestConnectie").click($.ajax({
        url: '/send-message.php',
        success: function(data) {
            //do something
            console.log('worked');
        }
    }));
});