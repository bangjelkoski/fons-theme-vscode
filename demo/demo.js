class Employee {
  constructor(firstName, lastName) {
    this.firstName = firstName
    this.lastName = lastName
  }

  get name() {
    return this.fullName()
  }

  demo() {
    console.log('This is a demo preview.')
  }

  fullName() {
    return this.firstName + ' ' + this.lastName
  }

  returnFalse() {
    return false
  }
}

/**
 * This is an example comment.
 */
const exampleEmployee = new Employee('John', 'Doe')

throw new Error(exampleEmployee.name)
