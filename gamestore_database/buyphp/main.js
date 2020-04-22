
let id = $("input[name*='buy_id']")
id.attr("readonly", "readonly");


$(".btnedit").click(e => {
    let textvalues = displayData(e);

    ;
    let buyname = $("input[name*='buy_name']");
    let buymail = $("input[name*='buy_mail']");
    let gameid = $("input[name*='game_id']");


    id.val(textvalues[0]);
    buyname.val(textvalues[1]);
    buymail.val(textvalues[2]);
    gameid.val(textvalues[3]);

});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td) {
        if (value.dataset.id == e.target.dataset.id) {
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}