var players;
function getSteamProfiles(){
    $.getJSON('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=A6BA7D083D9966B0CA20A2741C3E0B65&steamids=' + steamIDs, function(steamProfiles) {
        players = steamProfiles.response.players;
        teamProfiles(players);
    });
}

function teamProfiles(players) {
    players.forEach(function (player) {
        $("#steamList").append(
            '<div class="col-md-6 mb-5">' +
                '<div class="card">' +
                    '<img class="card-img-top" src="' + player.avatarfull + '">' +
                    '<div class="card-body">' +
                        '<h5 class="card-title">'+ player.personaname +'</h5>' +
                            '<a href="' + player.profileurl + '">Steam Profile</a>' +
                    '</div>' +
                '</div>' +
            '</div>');
    })
}
