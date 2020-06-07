function showTab(evt, tabname, classcat) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName(classcat);
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    tablinks = document.getElementsByClassName("dtab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activet", "");
    }
    document.getElementById(tabname).classList = "dtab activet";
    evt.currentTarget.className += " active";
}