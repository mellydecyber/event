
$(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}
 
function update() {
	$.getJSON("tampil.php", function(data) {
		$("nama").empty();
		$.each(data.result, function() {
            var nama = this['nama'];
			// $("ul").append("<li>Nama : "+this['nama']+"</li><li>Kelas : "+this['keterangan']+"</li><li>Jurusan : "+this['image']+"</li><br />");
            $("#nama").val(nama);
        });
	});
}