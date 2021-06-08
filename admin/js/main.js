// JavaScript Document
$(document).ready( function () {
    $('#table_id').DataTable();
} );

$(document).ready(function(){
    $('#cat').on('change',function(){
        let cat = this.value;
        $.ajax({
            url: "get-subcat.php",
            type: "POST",
            data: {
                cat_id: cat
            },
            cache: false,
            success: function(result) {
                $("#subcat").html(result);
            }
        });
    });
});
