var array =[];
function task()
{

  let item = document.getElementById('id1').value;
  document.getElementById('elementadded').innerHTML=`${item} is added.`
  array.push(item);
  console.log(array);

}

function sort_array(){
array.sort(function(a,b){return a-b});
document.getElementById('sortedarray').innerHTML=array;
console.log(array);
}

function search(){
    let item=document.getElementById('ele').value;
    let index=0;
    let flag=false;
    for(var i=0;i<array.length;i++){
   if(array[i]==item){
    flag=true;
index=i;
break;
   }
    }

    if(flag==true){
        document.getElementById('orighinalarray').innerHTML=array;
        alert("element is found")
        document.getElementById('find').innerHTML=`the index of element is  ${index}`;
    }else{
        alert("element is not found")
    }
}
function reverse(){
    let leftIndex=0;
    let rightIndex=array.length-1;

while (leftIndex < rightIndex) {
  
    let temp = array[leftIndex];
    array[leftIndex] = array[rightIndex];
    array[rightIndex] = temp;

    leftIndex++;
    rightIndex--;
  }
  
  document.getElementById('reversearray').innerHTML=array;
  
}
