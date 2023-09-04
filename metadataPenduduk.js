function showHint(str) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("tabel_section").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "metadataPenduduk.php?keyword=" + str, true);
    xhttp.send();
}