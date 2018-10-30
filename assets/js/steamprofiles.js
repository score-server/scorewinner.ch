var members = [];

function getSteamGroup(){
    $.ajax({
        type: "GET",
        url: "http://steamcommunity.com/groups/ScoreServer/memberslistxml/?xml=1",
        dataType: "xml",
        success: function(xml){
            $(xml).find('steamID64').each(function(){
                var member = $(this).text();
                members.push(member);
            });
            members.toString();
            getSteamProfiles(members);
        },
        error: function() {
            alert("An error occurred with the SteamAPI request");
        }
    });

}
function getSteamProfiles(members){
        $.getJSON('https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=A6BA7D083D9966B0CA20A2741C3E0B65&steamids=' + members, function(steamProfiles) {
        var players = steamProfiles.response.players;
        teamProfiles(players);
    });
}

function teamProfiles(players) {
    players.forEach(function (player) {
        $("#steamList").append(
            '<div class="col-md-4 col-6 mb-5">' +
                '<div class="card">' +
                    '<img class="card-img-top" src="' + player.avatarfull + '">' +
                    '<div class="card-body">' +
                        '<h5 class="card-title">'+ player.personaname +'</h5>' +
                            '<a href="' + player.profileurl + '">Steam Profile</a>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
    })
}
