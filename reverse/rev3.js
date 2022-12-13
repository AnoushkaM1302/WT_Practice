let num=[1,2,3,4,5,6];

rev_num=[];

console.log("Original Array: ");
console.log(num);

num.forEach((element)=>{
    rev_num.unshift(element);
});

console.log("New Array: ");
console.log(rev_num);