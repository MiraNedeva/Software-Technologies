function addAndRemoveElements(args) {
    let array = new Array();
   // console.log(args);

    for(let command of args){

        let commandLine = command.split(' ');
        //console.log(commandLine);
        let action = commandLine[0];
       // console.log(action);
        let num = Number(commandLine[1]);
       //console.log(num);

       switch (action){
           case 'add':
               array.push(num);
               break;
           case 'remove':
               array.splice(num, 1);
               break;
       }
    }
    for(let i of array){
        console.log(i);
    }

}

addAndRemoveElements([
    'add 3',
    'add 5',
    'remove 1',
    'add 2',
]);