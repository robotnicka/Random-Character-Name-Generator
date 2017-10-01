window.onload = function() {
    generateCharacter();
};

function generateCharacter() {
    document.getElementById('generator').onclick = function() {
        $('#names-container').load('random.php', function(responseTxt, statusTxt, xhr) {
            if (statusTxt == 'error') {
                console.error("Error: " + xhr.status + " " + xhr.statusText);
            };
        });

    }
    
    $('.generator').click();
};
