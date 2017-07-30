function numbersInReversedOrder(nums) {
    let arr = nums.map(Number);

   // arr.reverse();

    for(let i = arr.length- 1; i >= 0; i--){
        console.log(arr[i]);
    }

}



numbersInReversedOrder([
    '5',
    '5.5',
    '24',
    '-3',


]);