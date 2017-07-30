function setValuesToIndexesInArray(args){

    let length = Number(args[0]);

    let array = new Array(length).fill(0);

            for(let i = 1; i < args.length; i++){
                let nums = args[i].split(' ');
               // console.log(nums);
                let index = Number(nums[0]);
                let value = Number(nums[2]);
                array[index] = value;
            }
            for(let num of array){
                console.log(num);
            }

}

setValuesToIndexesInArray([
    '2',
    '0 - 5',
    '0 - 6',
    '0 - 7',
]);