console.log("See what happens if you improve 1% each day")
console.log("Let's say you startrunning 10km")
console.log("For the following days, we'll take the amount you ran the day before and increase it by 1%")

initialValue = 10
for(var i = 0; i < 365; i++){
    initialValue += (initialValue * 0.01)
}

initialValue = parseInt(initialValue)
console.log("In 365 days you will be running %s km", initialValue)
console.log("Maybe 1% each day isn't realistic")