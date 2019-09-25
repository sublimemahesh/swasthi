function every8am (yourcode) {
    var now = new Date(),
        start,
        wait;

    if (now.getHours() < 7) {
        start = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 8, 0, 0, 0);
    } else {
        start = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 8, 0, 0, 0);
    }

    wait = start.getTime() - now.getTime();

    if(wait <= 0) { //If missed 8am before going into the setTimeout
        console.log('Oops, missed the hour');
        every8am(yourcode); //Retry
    } else {
        setTimeout(function () { //Wait 8am
            setInterval(function () {
                yourcode();
            }, 86400000); //Every day
        },wait);
    }
}