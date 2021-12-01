<!--MODAL FUNKCIA A SUBMIT FUNKCIA CO SA POUZIVA PRI PRIDANIE OSOBY-->
$(document).ready(function () {
    $("#myModal").modal();
});

$('#submit').click(function(){
    $('#form1').submit();
});

<!-- FUNKCIA SUBMIT A IFKO AK SU VSETKY UDAJE NEPRAZDNE , VLOZI PACIENTA-->
function form_submit() {
    var meno = $("#meno").val();
    var priezvisko = $("#priezvisko").val();
    var diagnoza = $("#diagnoza").val();
    console.log(meno);
    console.log(priezvisko);
    console.log(diagnoza);


    if (meno === "" || priezvisko === "" || diagnoza === "") {
        alert("Nevyplnili ste všetky potrebné údaje");
    } else {
        document.getElementById("vlozPacienta").submit();
    }
}

<!-- FUNKCIA PREDVYPLN UDAJOV -->

function predvypln(id, meno, priezvisko, pohlavie, pricinaPobytu)
{
    $("#editModal").modal('show');

    $("#editId").val(id);
    $("#editMeno").val(meno);
    $("#editPriezvisko").val(priezvisko);
    $("#editPohlavie").val(pohlavie);
    $("#editPricinaPobytu").val(pricinaPobytu);
}