<script>
    function getKotaKabupaten(provinsi){
        $('#id_kota').prop('disabled', true);
        $('#id_kota').empty();
        id_provinsi = provinsi[provinsi.selectedIndex].value;

        $('#id_kota').append('<option value=""></option>');

        url = "{{ env('APP_URL') }}" + "/api/kota/" + id_provinsi;
        $.get(url, function(data){
            $.each(data, function(index, kota){
                $('#id_kota').append('<option value="'+kota.id+'">'+kota.nama_kota+'</option>');
            });
            $('#id_kota').prop('disabled', false);
        });
    }
</script>
