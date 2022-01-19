function downloadTracking1() {
    $('#$deepLinkHeader').click(function() {
        fbq('track', 'Download', {button: "download", value: "navbar"});
      });
}

function downloadTracking2() {
    $('#$deepLinkHero').click(function() {
        fbq('track', 'Download', {button: "download", value: "hero"});
      });
}

function downloadTracking3() {
    $('#$deepLinkAndroid').click(function() {
        fbq('track', 'Download', {button: "download", value: "cta-googlePlay"});
      });
}
function downloadTracking4() {
    $('#$deepLinkApple').click(function() {
        fbq('track', 'Download', {button: "download", value: "cta-appleStore"});
      });
}