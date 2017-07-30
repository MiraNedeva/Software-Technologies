function objIntoJSONStr(args){

    let studentData = args.map(studentString => studentString.split(' -> '));

    let student = {};
        studentData.forEach(tokens => {
            let key = tokens[0];
            let value = tokens[1];
        if(key === 'age' || key === 'grade'){
            value = Number(value);
        }
            student[key] = value;

        });


    console.log(JSON.stringify(student));

}

objIntoJSONStr([

]);