function solve(arr) {

    let text = arr.join(",");
    let words = text.split(/\W+/);
    let nonEmptyWords = words.filter(w => w.length > 0);
    let upWords = nonEmptyWords.filter(isUppercase);

    console.log(upWords.join(", "));

    function isUppercase(str) {
        return str == str.toUpperCase();
    }
}



solve([
    'PHP is great. We love it!',
    'JavaScript is even better. It has a great API',
    'CSHARP 4EVA!'
]);
