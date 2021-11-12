function Timer(hours, seconds){
    this.hours = hours;
    this.seconds = seconds;

    this.secondCount = function(){
        if(this.seconds == 0){
            this.hours--;
            this.seconds = 59;
        }
        if(this.hours < 0){
            this.secondCount = null;
            return;
        }

        document.getElementById('seconds').innerHTML = this.seconds--;
        document.getElementById('hours').innerHTML = this.hours;
        setTimeout(this.secondCount.bind(this), 1000);
    };
}

var timer = new Timer(59 , 59);
timer.secondCount();