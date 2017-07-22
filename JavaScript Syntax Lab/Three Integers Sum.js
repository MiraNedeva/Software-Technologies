function threeIntegersSum(arr) {
    let numbers = arr[0].split(' ');

    let firstNum = Number(numbers[0]);
    let secondNum = Number(numbers[1]);
    let thirdNum = Number(numbers[2]);


    console.log(checkForSum(firstNum, secondNum, thirdNum)||
        checkForSum(firstNum, thirdNum, secondNum) ||
        checkForSum(secondNum, thirdNum, firstNum)||
        'No');

    function checkForSum(firstNum, secondNum, sum) {
        if(firstNum + secondNum != sum) {
            return false;
        }
        if(firstNum > secondNum) {
            [firstNum, secondNum] = [secondNum, firstNum];
        }

        return `${firstNum} + ${secondNum} = ${sum}`;
    }
}

threeIntegersSum(['8 , 15, 7']);