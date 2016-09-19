'use strict';

window.addEventListener('DOMContentLoaded', function (event) {
    var translate = navigator.mozL10n.get;

    navigator.mozL10n.once(function() {

    });

    console.log('based');

    //window.sticky = new PureSticky(true);
    //sticky.add('#nav',0);

    var list_courses = function(data) {
        var courses = document.getElementById('courses');

        data.courses.forEach(function (course) {
            var itemElement = document.createElement('p');

            course.forEach(function (item, index) {
                var seperator = ': ';
                itemElement.textContent += (index == 0 ? item : seperator + item );
            });

            courses.appendChild(itemElement);
        });
    };

    var xhr = new XMLHttpRequest();
    xhr.open('GET', encodeURI('share/courses.json'));
    xhr.responseType = 'json';
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            list_courses(this.response);
        }
    };
    xhr.send();
});
