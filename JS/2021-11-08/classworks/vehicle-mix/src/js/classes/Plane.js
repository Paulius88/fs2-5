import Vehicle from './Vehicle';

export default class Plane extends Vehicle {
	constructor(make, model, year, wheels) {
		super(make, model, year);

		this.wheels = wheels;
	}
}