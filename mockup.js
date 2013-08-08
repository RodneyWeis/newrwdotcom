function animate(i) {
	var filebase = "images/mockup";
	setTimeout(function () {
		var filename = filebase + i + ".png";
		document.getElementById("mockup").setAttribute('src', filename);
		i++;
		if (i <= 5) {
			animate(i);
		}
	}, 5000)
}

function control() {
	setInterval(function () {
		var i = 1;
		animate(i);
	}, 25000)
}

animate(1);
control();