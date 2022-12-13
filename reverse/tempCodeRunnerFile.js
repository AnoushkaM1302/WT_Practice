let num=[1,2,3,4,5,6];

console.log("Original Array: ");
console.log(num);

rev_num=num.reduce((acc,item)=>[item].concat(acc),[])

console.log("New Array: ");
console.log(rev_num);