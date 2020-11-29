function Greeting(){
    var myDate = new Date();
    var hrs = myDate.getHours();
    var greet;

    if (hrs < 12)
              greet = 'Good Morning';
            else if (hrs >= 12 && hrs <= 17)
              greet = 'Good Afternoon';
             else if (hrs >= 17 && hrs <= 24)
             greet = 'Good Evening';
            document.getElementById('greeting').innerHTML =
        '<b>' + greet + '</b>' + ' the current date and time is ';
        document.getElementById("time").innerHTML = d;

    
    return (
        React.createElement("h3", {id: "Welcome"}, greet, "! ", React.createElement("p", {id: "WelcomeTime"}),"The time is now " + hrs));
        
}

function Icon() {
    var current = new Date();
    var day_night=current.getHours();

    if (day_night<=12)
    document.write("<img src='day.png'>")
    else
    document.write("<img src='night.png'>")
    
    

}

function Tick() {
    ReactDOM.render(React.createElement("div", null, React.createElement(Greeting, null)), 
    document.getElementById("WelcomeBar"));
    
}
setInterval(Tick, 1000); 