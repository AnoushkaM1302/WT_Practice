let num=[1,2,3,4,5,6];

rev_num=[];

console.log("Original Array: ");
console.log(num);

for (let i=num.length-1; i>=0;i--){
    rev_num.push(num[i]);
}

console.log("New Array: ");
console.log(rev_num);