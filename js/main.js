var app2 = new Vue({
    el: '#updated',
    data: {
        message: 'Updated: October 2nd'
    }
})

var app3 = new Vue({
    el: '#blogCount',
    data: {
        blogs: '7'
    }
})

var quotes = [ "Learning programming is like learning to play a musical instrument, you will not excel unless you train daily",
               "Work Hard",
               "Programming is understanding",
               "Do your work, don't be stupid",
               "Think twice, code once",
               "Keep calm and start debugging",
               "Programming is beautiful",
               "No pain, no gain",
               "Code is poetry"
               ]

var i = Math.round(Math.random()*100)%quotes.length;

var temp = {
      template: '<p>'+quotes[i] +'</p>'
    }

  var vm9 = new Vue({
    el: '#q',
    data: {

    },
    components: {
        'my-q': temp
    }
})