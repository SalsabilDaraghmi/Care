function docORper() {
    let v1 = document.getElementById("doctor");
    let v2 = document.getElementById("person");
    if (v1.checked == true) {
        document.getElementById("doctorBox").style.display = "flex";
    } else if (v2.checked == true) {
        document.getElementById("doctorBox").style.display = "none";

    } else {

        alert("يجب عليك ان تختار ازا كنت زائر او طبيب قبل مغادرة الصفحة");
    }
}