// Complete the below questions using this array:
const array = [
  {
    username: "john",
    team: "red",
    score: 5,
    items: ["ball", "book", "pen"]
  },
  {
    username: "becky",
    team: "blue",
    score: 10,
    items: ["tape", "backpack", "pen"]
  },
  {
    username: "susy",
    team: "red",
    score: 55,
    items: ["ball", "eraser", "pen"]
  },
  {
    username: "tyson",
    team: "green",
    score: 1,
    items: ["book", "pen"]
  },

];

//Create an array using forEach that has all the usernames with a "!" to each of the usernames



let usernameArray = [array.length]

array.forEach(function(element, i){usernameArray[i] = element.username+"!"})

// console.log(usernameArray)



//Create an array using map that has all the usernames with a "? to each of the usernames
let replace = []

replace = function(x, y, string){
  let str = ""
  let arrayChar = string.split('')
  for(let i=0; i<string.length; i++){
    if( x===arrayChar[i]){  
      arrayChar[i] =y;
      
    }
  }
  for(let j =0; j<string.length; j++){
    
    str  += arrayChar[j]
  }
  return str
}

let arrayMap = usernameArray.map(string => replace("!", "?", string))

// console.log(arrayMap)



//Filter the array to only include users who are on team: red


let arrayFilter = array.filter(object => object.team ==="red")
// console.log(arrayFilter)

//Find out the total score of all users using reduce

let reduceArray = array.reduce((acc, object) => (acc+object.score),0)
console.log(reduceArray)
// (1), what is the value of i?
// (2), Make this map function pure:
// const arrayNum = [1, 2, 4, 5, 8, 9];
// const newArray = arrayNum.map((num, i) => {
// 	console.log(num, i);
// 	alert(num);
// 	return num * 2;
// })

//BONUS: create a new list with all user information, but add "!" to the end of each items they own.
