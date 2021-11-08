import Vehicle from './Vehicle';

export default class Car extends Vehicle {
	constructor(make, model, year) {
		super(make, model, year);

		this.wheels = 4;
	}
}