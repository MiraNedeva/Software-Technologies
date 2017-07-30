function JSONObjects(args) {
    let students = [];

    args.forEach(jsonString => {
        let student = JSON.parse(jsonString);
        students.push(student);
    });

    console.log(students);
}

JSONObjects([
    '"name":"Gosho","age":10,"date":"19/06/2005"',
    '"name":"Tosho","age":11,"date":"04/04/2005"'
]);