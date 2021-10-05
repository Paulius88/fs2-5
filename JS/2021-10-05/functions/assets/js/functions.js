function calcRectArea(width, height) {
	let result = width * height;

	return result;
}

console.log(calcRectArea(5, 6));

// ======================================== //

let getRectArea = function(width, height) {
	return width * height;
};

console.log(getRectArea(5, 6));

function randomFuncExec(func, width, height) {
	return func(width, height);
}

console.log(randomFuncExec(getRectArea, 5, 6));
console.log(randomFuncExec(calcRectArea, 5, 6));

// console.log(randomFuncExec(randomFuncExec, 5, 6));

// ======================================== //


let getRectAreaArrow = (width, height) => {
	return width * height;
};

console.log(getRectAreaArrow(5, 6));


// ======================================== //

function plusplus(num, max) {
	console.log('plusplus ' + num);

	// num++;
	num = num + 1;

	if (num === max) {
		return num;
	}

	console.log('plusplus end ' + num);

	num = plusplus(num, max);

	return num;

	// return plusplus(num, max)
}

console.log(plusplus(1, 10));
