function multiplyValuesForAKey(args) {

    //iterate over arguments
    //split every element by space
    //make new object
    //iterate over pairs
    //get key and value out of pairs
    //set key and value to object

    let obj = {};

    for(let arg of args.splice(0, args.length - 1)){

        let tokens = arg.split(' ');

        let key = tokens[0];
        let value = tokens[1];

        if(obj[key]){
            obj[key].push(value);
        } else {
            obj[key] = [value];

        }
    }
    let key = args[args.length - 1];
//let key = args.splice(-1)[0];
    console.log(obj[key] ? obj[key].join('\n'): "None");
}

/*multiplyValuesForAKey([
    'key value',
    'key eulav',
    'test tset',
    'key',
]);*/

multiplyValuesForAKey([
    '3 test',
    '3 test1',
    '4 test2',
    '4 test3',
    '4 test5',
    '4',
    ]);