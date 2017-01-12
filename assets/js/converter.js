$(document).ready(function() {
	$("#ascii").click(function() {
		$("#btn_1").attr("value", "desimal").text("DESIMAL");
		$("#btn_2").attr("value", "biner").text("BINER");
		$("#btn_3").attr("value", "hexadesimal").text("HEXADESIMAL");
		$("#alert").hide();
	});

	$("#desimal").click(function() {
		$("#btn_1").attr("value", "ascii").text("ASCII");
		$("#btn_2").attr("value", "biner").text("BINER");
		$("#btn_3").attr("value", "hexadesimal").text("HEXADESIMAL");
		$("#alert").hide();
	});

	$("#biner").click(function() {
		$("#btn_1").attr("value", "ascii").text("ASCII");
		$("#btn_2").attr("value", "desimal").text("DESIMAL");
		$("#btn_3").attr("value", "hexadesimal").text("HEXADESIMAL");
		$("#alert").hide();
	});

	$("#hexadesimal").click(function() {
		$("#btn_1").attr("value", "ascii").text("ASCII");
		$("#btn_2").attr("value", "desimal").text("DESIMAL");
		$("#btn_3").attr("value", "biner").text("BINER");
		$("#alert").hide();
	});
});