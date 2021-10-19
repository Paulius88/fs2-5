
let fakeImagesOfLeftColumn = document.querySelectorAll('.leftcolumn .fakeimg');
let fakeImagesOfRighColumn = document.querySelectorAll('.rightcolumn .card:nth-child(2) .fakeimg');

for (let img of fakeImagesOfLeftColumn) {
	img.style.backgroundColor = 'green';
}

for (let img of fakeImagesOfRighColumn) {
	img.style.backgroundColor = 'red';
}

// for (let i = 0; i < fakeImagesOfRighColumn.length; i++) {
// 	fakeImagesOfRighColumn[i].style.backgroundColor = 'red';
// }

// let i = 0;

// while (i < fakeImagesOfRighColumn.length) {
// 	fakeImagesOfRighColumn[i].style.backgroundColor = 'red';

// 	i++
// }


document.querySelector('#about-me-img').style.backgroundColor = 'purple';
