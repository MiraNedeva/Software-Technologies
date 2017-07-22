function solve(args) {
    args = args.map(Number).sort((a,b) => b - a); // prevrusha argumentite v tcifri

    let total = Math.min(args.length, 3);

    for(let i = 0; i < total; i++){
        console.log(args[i]);
    }

}






solve([
    '10',
    '50',
    '20',
    '100',
    '5'
]);