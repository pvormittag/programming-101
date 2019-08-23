const { add } = require('./math')

type Person = {
    firstName?: string,
    lastName: string,
}

let patrik: Person = {
    firstName: "Patrik",
    lastName: "Vormittag",
}

process.stdout.write(add(1, 2) + '')
