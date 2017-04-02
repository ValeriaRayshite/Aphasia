var counterEn = 2;
var limit = 15;
function addInputEn() {
    if (counterEn == limit) {
        alert("You have reached the limit of adding " + counterEn + " inputs");
    } else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = " <br><textarea type='text' class='content' name='content" + counterEn + "'>";
        document.getElementById('dynamicInputEn').appendChild(newdiv);
        counterEn++;
    }
}


var counterRu = 2;
function addInputRu() {
    if (counterRu == limit) {
        alert("You have reached the limit of adding " + counterRu + " inputs");
    } else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = " <br><textarea type='text' class='content' name='content" + counterRu + "_ru'>";
        document.getElementById('dynamicInputRu').appendChild(newdiv);
        counterRu++;
    }
}


function inn() {
    document.getElementById('theinputid').value = document.getElementById('theinputid').value + '{{HTML::image("img/$pref.$file", "Logo")}}'
}