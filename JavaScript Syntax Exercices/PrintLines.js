function printLines(args) {
    for(let line of args){
        if(line == "Stop"){
            return;
        }
        console.log(line);
    }
}

printLines([
    '3',
    '6',
    '5',
    '3',
    '4',
    'Stop',
    '2',
]);