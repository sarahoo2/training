// var myList=['apples','orange','bana'];
//
// myList.forEach(function(value,index){
//   alert('I have' + value+ ' in my shopping bag');
// });
//query Selector  is for first oneapril
//query selector all is for showing all

// var numOne=document.getElementById("num_one");
// var numTwo=document.getElementById("num_two");
// var sumUp=document.getElementById("sumUp");
//
// numOne.addEventListener("input",add());
// numTwo.addEventListener("input",add());
//
//   function add(){
//     var one= parseFloat(numOne.value) || 0;
//     var two=parseFloat(numTwo.value) || 0;
//     sumUp.innerHTML="Your Sum is " + (one+two);
// }

var simon=document.getElementsById("simon");
var simonPic=document.getElementsById("simon-pic");
simon.addEventListener("click",function(){
  if(simonPic.className ==="hide"){
     simonPic.className="";
  }else {
    simonPic.className="hide";
  }
})
