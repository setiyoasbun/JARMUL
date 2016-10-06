var now = $('#itung').val();
/*var akhir = null;*/

function updateFeed(){
	$.ajax({
		url: 'tarik-data.php',
		success: function(a){
			$('#cek').html(a);
		}
	});
	akhir =  $('#itung').val();
	
}

console.log("now:",now);
console.log("akhir:",akhir);

t = setInterval("updateFeed();", 500 );

if(akhir != now){
	window.location.href = "akhir.php";

}
