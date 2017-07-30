function kvp(args) {

    //iterate over arguments
    //split every element by space
    //make new object
    //iterate over pairs
    //get key and value out of pairs
    //set key and value to object

    let obj = {};

    for(let arg of args){
        // for(let arg of args.splice(0, args.length - 1))
        let tokens = arg.split(' ');

        let key = tokens[0];
        let value = tokens[1];

        if(value !== undefined){
            obj[key] = value;
        }
    }
    let key = args[args.length - 1];

    console.log(obj[key] || "None");
}

kvp([
    'key value',
    'key eulav',
    'test tset',
    'key',
]);



