document.addEventListener('DOMContentLoaded', function() {
	const DIV_PROFILE = document.getElementById('profile');

	let formData = new FormData;

	for (let el of DIV_PROFILE.querySelectorAll('[name]')) {
		if (el.tagName == 'INPUT') {
           	if (el.type == 'checkbox' && !el.checked) {
               continue;
            }
        } else if (el.files && el.files.length > 0) {
        	let name = el.files.length > 0 ? (el.name + '[]') : el.name;

        	for (let file of el.files) {
        		formData.append(name, file);
        	}

        	continue;
        }

        formData.append(el.name, el.value);
	}

	for (let val of formData.values()) {
		console.log(val);
	}
});