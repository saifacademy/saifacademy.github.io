var app2 = new Vue({
    el: '#updated',
    data: {
        message: 'Updated: September 9th'
    }
})

var cppVids = [{
    "id": 1,
    "url": "http://www.youtube.com/embed/huWwibFczeE",
    "title": "Introduction"
}, {
    "id": 2,
    "url": "http://www.youtube.com/embed/0ZEMzvQEMes",
    "title": "Borland C++ 5.02 IDE Setup"
}, {
    "id": 3,
    "url": "http://www.youtube.com/embed/PWfQwDdGpVw",
    "title": "CodeBlocks IDE Setup"
}, {
    "id": 4,
    "url": "http://www.youtube.com/embed/IxktJ5dZBqM",
    "title": "Terminology"
},
{
    "id": 5,
    "url": "http://www.youtube.com/embed/Gwt1jhgRegw",
    "title": "Hello World"
},{
    "id": 6,
    "url": "http://www.youtube.com/embed/l5R44bPxcL4",
    "title": "Variables"
},
{
    "id": 7,
    "url": "http://www.youtube.com/embed/JRq6Ga1n_gU",
    "title": "Data Types"
},
{
    "id": 8,
    "url": "http://www.youtube.com/embed/p9hcOeW9Y3Y",
    "title": "Notes on Data Types"
},
{
    "id": 9,
    "url": "http://www.youtube.com/embed/vRtV12AjIFw",
    "title": "Arithmetic Operators"
},
{
    "id": 10,
    "url": "http://www.youtube.com/embed/uAglKFT9lAY",
    "title": "Arithmetic Operators Precedence"
},
{
    "id": 11,
    "url": "http://www.youtube.com/embed/J6IXZxbihOA",
    "title": "Writing Long Equations Correctly"
},
{
    "id": 12,
    "url": "http://www.youtube.com/embed/eMhD0Nl0bS8",
    "title": "(Exercise) Equations & Math Functions"
},
{
    "id": 13,
    "url": "http://www.youtube.com/embed/7IRD2tzlYt4",
    "title": "(Exercise) Average of 5 Numbers"
},
{
    "id": 14,
    "url": "http://www.youtube.com/embed/X_oDhS99asE",
    "title": "(Exercise) Circle Area"
},
{
    "id": 15,
    "url": "http://www.youtube.com/embed/eMjIsSAlb2o",
    "title": "(Exercise) Using Trigonometric Functions"
},
{
    "id": 16,
    "url": "http://www.youtube.com/embed/7sjlNN6VxxM",
    "title": "(Exercise) Expressions & Precedence Law"
}]

var cVids1 = new Vue({
    el: '#cppVids',
    data: { vids: cppVids }
})


var quotes = [ "Learning programming is like learning to play a musical instrument, you will not excel unless you train daily",
               "Work Hard",
               "Programming is understanding",
               "Do your work, don't be stupid",
               "Think twice, code once",
               "Keep calm and start debugging",
               "Programming is beautifil",
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