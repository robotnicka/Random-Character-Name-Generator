/*global $*/

$(document).ready(function() {

    $('#generator').click(function(event) {
        event.preventDefault();
        
        $('#names-container').load('random.php', function(responseTxt, statusTxt, xhr) {
            if (statusTxt == 'error') {
                console.error("Error: " + xhr.status + " " + xhr.statusText);
            };
            
            $('.name-header').text("Your character's name is:");
        });
    });
});
