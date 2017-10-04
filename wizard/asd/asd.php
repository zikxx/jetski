<select id="id"></select>
<select id="name">asd</select>
<select id="department"></select>
<script>$(document).on("change", '#department', function (e) {
        var department = $(this).val();


        $.ajax({
            type: "POST",
            data: {department: department},
            url: 'asd/php/list.php',
            dataType: 'json',
            success: function (json) {

                var $el = $("#name");
                $el.empty(); // remove old options
                $el.append($("<option></option>")
                    .attr("value", '').text('Please Select'));
                $.each(json, function (value, key) {
                    $el.append($("<option></option>")
                        .attr("value", value).text(key));
                });
            }
        });

    });
</script>