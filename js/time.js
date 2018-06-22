   var timerID = null
      var timerRunning = false
      function stopclock(){
         if(timerRunning)
            clearTimeout(timerID)
         timerRunning = false
      }
      function startclock(){
         // Make sure the clock is stopped
         stopclock()
         showtime()
      }
      function showtime(){
         var now = new Date()
         var hours = now.getHours()
         var minutes = now.getMinutes()
         var seconds = now.getSeconds()
         var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
         timeValue += ((minutes < 10) ? ":0" : ":") + minutes
         timeValue += ((seconds < 10) ? ":0" : ":") + seconds
         timeValue += (hours >= 12) ? " P.M." : " A.M."
         document.clock.face.value = timeValue
         timerID = setTimeout("showtime()",1000)
         timerRunning = true
      }

        var secs = 8;
      function countDown() {
        if (secs > 0) {
          num.innerHTML = secs--;
        }
        else
          location = "./index.html";
        }