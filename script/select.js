$(document).ready(function(){
    $("#select-rnc").change(function () {

      

        $("#select-rnc option:selected").each(function () {
            id_rnc = $(this).val();
            $.post("script/includes/getSectores.php", { id_rnc: id_rnc }, function(data){
                $("#select-sector").html(data);
            });            
        });
    })
});