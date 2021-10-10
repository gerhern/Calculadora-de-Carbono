var i = 0;

    function displayCard(id) {

        do {
            $("#card" + i).fadeOut(400);
            i++;
        } while (i <= 5)
        $("#card" + id).delay(400).fadeIn(400);
        i = 1;
    }