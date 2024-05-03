// document.addEventListener('DOMContentLoaded', function () {
//     const report_btn = document.querySelector('.report-btn');
//     const report_tag = document.querySelector('.report-tag')

//     report_btn.addEventListener('click', function () {
//         report_tag.style.display = "block";
        
//     });
// });



document.addEventListener('DOMContentLoaded', function () {
    const reportBtns = document.querySelectorAll('.report-btn');
    const reportTag = document.querySelector('.report-tag');

    reportBtns.forEach(function(reportBtn) {
        reportBtn.addEventListener('click', function () {
            if (reportTag.style.display === "block") {
                reportTag.style.display = "none";
            } else {
                reportTag.style.display = "block";
            }
        });
    });

    // Hide report_tag when clicking anywhere on the webpage
    document.body.addEventListener('click', function (event) {
        if (!event.target.matches('.report-btn') && !event.target.matches('.report-tag')) {
            reportTag.style.display = "none";
        }
    });
});
