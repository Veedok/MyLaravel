var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
    }
};

// document.addEventListener('DOMContentLoaded', function() {
//     let element = document.querySelector('.destroy');
//     element.forEach(function(el,key) {
//         el.addEventListener('click', function() {
//             alert('allok');
//         })
//     });

// })
