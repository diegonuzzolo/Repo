const array = [1, 2, 10, 16]

const double = []
const newArray = array.forEach((num) => {
    double.push(num*2)
})

// console.log(double)


// map, filter, reduce

const mapArray = array.map((num)=> {
    return num * 2
})


// console.log(mapArray)


// filter

const filterArray = array.filter(num=>{return num===5})

console.log("filtro", filterArray)

// reduce

const reduceArray = array.reduce((accumulatore, num)=>{
    return accumulatore + num
}, 0);

console.log("reduce", reduceArray)