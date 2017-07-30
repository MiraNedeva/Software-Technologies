function productOf3numbers(nums) {

    let num1 = Number(nums[0]);
    let num2 = Number(nums[1]);
    let num3 = Number(nums[2]);

    let arr = [num1, num2, num3];


    var negativeCounter = 0;

    for(var num of arr){

        if(num < 0){
            negativeCounter++;

        }
    }

    if(negativeCounter % 2 === 1){
        console.log('Negative');
    }
    else {
        console.log('Positive');
    }
}



productOf3numbers([
    '2',
    '3',
    '-1'
]);
